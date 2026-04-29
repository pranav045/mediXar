<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | MedixAR</title>

    @vite(['resources/css/app.css'])

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
    body { font-family: 'Outfit', sans-serif; }

    .glass-panel {
        background: rgba(10, 25, 22, 0.45);
        backdrop-filter: blur(24px);
        border: 1px solid rgba(255,255,255,0.08);
    }
    
    .form-input {
        background: transparent;
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: white;
        transition: all 0.3s ease;
    }
    
    .form-input:focus {
        border-color: rgba(45, 212, 191, 0.8);
        outline: none;
    }
    </style>
</head>

<body class="bg-[#050b09] min-h-screen flex items-center justify-center text-white overflow-hidden selection:bg-teal-500/30">

    <!-- Background -->
    <div class="absolute inset-0 -z-10">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}"
             class="w-full h-full object-cover opacity-20 blur-sm mix-blend-screen" style="transform: scaleX(-1);">
    </div>

    <!-- CENTER WRAPPER -->
    <div class="w-full flex items-center justify-center px-6 py-8">

        <!-- MAIN CARD -->
        <div class="w-full max-w-6xl max-h-[90vh]">

            <div class="glass-panel w-full h-full rounded-3xl flex flex-col lg:flex-row overflow-hidden shadow-2xl">

                <!-- LEFT SIDE (Info) -->
                <div class="lg:w-[65%] p-10 sm:p-14 md:p-16 flex flex-col justify-between border-r border-white/10 relative overflow-hidden">
                    
                    <!-- Logo -->
                    <div class="mb-10 relative z-10">
                        <a href="/" class="flex items-center gap-3 group inline-flex">
                            <img src="{{ Vite::asset('resources/img/medixar_logo.png') }}" class="h-10 w-auto rounded-xl shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                            <span class="text-2xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
                        </a>
                    </div>

                    <div class="relative z-10">
                        <h1 class="text-4xl md:text-6xl font-semibold mb-6">
                            Join the Revolution
                        </h1>

                        <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
                            Create your free account today. Start exploring the human body in unparalleled detail with our interactive 3D and AR models.
                        </p>

                        <div class="mt-8 flex flex-col gap-3 text-gray-300">
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-400 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Full access to 5,000+ structures
                            </div>
                            <div class="flex items-center gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-400 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                                Create and save custom study paths
                            </div>
                        </div>
                    </div>

                    <div class="mt-16 relative z-10">
                        <p class="text-sm text-gray-400 mb-4">ALREADY HAVE AN ACCOUNT?</p>
                        <a href="/login" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-white/20 hover:bg-white/10 transition text-sm font-medium">
                            Sign In Instead →
                        </a>
                    </div>
                    
                    <!-- Decorative Graphic element -->
                    <div class="absolute -top-20 -left-20 w-96 h-96 bg-emerald-900/20 rounded-full blur-[100px] pointer-events-none mix-blend-screen"></div>

                </div>

                <!-- RIGHT SIDE (Form) -->
                <div class="lg:w-[35%] p-10 sm:p-12 flex flex-col justify-center bg-black/40 overflow-y-auto">

                    <h2 class="text-2xl font-semibold mb-2">Create Account</h2>
                    <p class="text-gray-400 text-sm mb-8">
                        Just a few details to get you started.
                    </p>

                    <form method="POST" action="/register" class="space-y-4">
                        @csrf

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Full Name</label>
                            <input type="text" name="name" required placeholder="John Doe"
                                class="form-input w-full rounded-full px-5 py-3 text-sm">
                        </div>

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Email Address</label>
                            <input type="email" name="email" required placeholder="you@university.edu"
                                class="form-input w-full rounded-full px-5 py-3 text-sm">
                        </div>

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Password</label>
                            <input type="password" name="password" required placeholder="••••••••"
                                class="form-input w-full rounded-full px-5 py-3 text-sm">
                        </div>

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Confirm Password</label>
                            <input type="password" name="password_confirmation" required placeholder="••••••••"
                                class="form-input w-full rounded-full px-5 py-3 text-sm">
                        </div>

                        <div class="flex items-center text-sm pt-2 pb-2">
                            <input id="terms" name="terms" type="checkbox" required class="h-4 w-4 rounded border-gray-600 bg-transparent text-teal-500 focus:ring-teal-500">
                            <label for="terms" class="ml-2 block text-gray-400">
                                I agree to the <a href="#" class="text-teal-400 hover:text-teal-300">Terms</a>
                            </label>
                        </div>

                        <button type="submit" class="w-full flex items-center justify-center py-4 px-4 rounded-full font-bold text-[#040d0a] bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 transition-all shadow-[0_5px_15px_rgba(20,184,166,0.2)] hover:shadow-[0_10px_20px_rgba(20,184,166,0.4)]">
                            Sign Up
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
