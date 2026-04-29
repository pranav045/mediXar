<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit() {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function update(Request $request) {
        $user = Auth::user();
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'specialization' => 'nullable|string',
        ]);

        $user->update($validated);
        $preferences = $user->preferences ?? [];
        $preferences['theme'] = $request->input('theme', 'light');
        $preferences['notifications'] = $request->has('notifications');
        $user->preferences = $preferences;
        $user->save();

        return redirect()->route('profile')->with('success', 'Profile updated successfully.');
    }

    public function uploadAvatar(Request $request) {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user = Auth::user();
        if ($request->file('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $path;
            $user->save();
        }

        return redirect()->route('profile')->with('success', 'Avatar updated successfully.');
    }

    public function updatePassword(Request $request) {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!\Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password does not match.']);
        }

        $user->password = \Hash::make($request->new_password);
        $user->save();

        return redirect()->route('profile')->with('success', 'Password updated successfully.');
    }
}
