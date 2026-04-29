<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | MedixAR</title>

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
             class="w-full h-full object-cover opacity-20 blur-sm mix-blend-screen">
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
                            <div class="w-12 h-12 relative flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                                <div class="absolute inset-0 border-2 border-teal-500/20 rounded-xl transform rotate-12 group-hover:rotate-90 transition-all duration-700"></div>
                                <div class="absolute inset-0 border-2 border-emerald-400/20 rounded-xl transform -rotate-12 group-hover:-rotate-90 transition-all duration-700"></div>
                                <div class="w-8 h-8 bg-gradient-to-br from-teal-400 to-emerald-500 rounded-lg shadow-[0_0_20px_rgba(45,212,191,0.6)] flex items-center justify-center relative z-10">
                                    <svg class="w-5 h-5 text-[#050b09]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                        <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                            <path d="M8 15a6 6 0 1 0 12 0v-3" />
                            <path d="M11 3v2" />
                            <path d="M6 3v2" />
                            <path d="M18 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                    </svg>
                                </div>
                            </div>
                            <span class="text-2xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
                        </a>
                    </div>

                    <div class="relative z-10">
                        <h1 class="text-4xl md:text-6xl font-semibold mb-6">
                            Welcome Back
                        </h1>

                        <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
                            Pick up right where you left off. Access your saved 3D anatomy models, review your quiz scores, and continue exploring the human body.
                        </p>

                        <div class="mt-8 flex items-center gap-3 text-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-teal-400 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                            Syncs across all devices instantly
                        </div>
                    </div>

                    <div class="mt-16 relative z-10">
                        <p class="text-sm text-gray-400 mb-4">DON'T HAVE AN ACCOUNT?</p>
                        <a href="/register" class="inline-flex items-center gap-2 px-6 py-3 rounded-full border border-white/20 hover:bg-white/10 transition text-sm font-medium">
                            Register Now →
                        </a>
                    </div>
                    
                    <!-- Decorative Graphic element -->
                    <div class="absolute -bottom-20 -right-20 w-96 h-96 bg-teal-900/20 rounded-full blur-[100px] pointer-events-none mix-blend-screen"></div>

                </div>

                <!-- RIGHT SIDE (Form) -->
                <div class="lg:w-[35%] p-10 sm:p-12 flex flex-col justify-center bg-black/40">

                    <h2 class="text-2xl font-semibold mb-2">Sign In</h2>
                    <p class="text-gray-400 text-sm mb-8">
                        Enter your credentials to access your dashboard.
                    </p>

                    <form method="POST" action="/login" class="space-y-6">
                        @csrf

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Email Address</label>
                            <input type="email" name="email" required placeholder="you@university.edu"
                                class="form-input w-full rounded-full px-5 py-3.5 text-sm">
                        </div>

                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Password</label>
                            <input type="password" name="password" required placeholder="••••••••"
                                class="form-input w-full rounded-full px-5 py-3.5 text-sm">
                        </div>

                        <div class="flex items-center justify-between text-sm">
                            <div class="flex items-center">
                                <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-600 bg-transparent text-teal-500 focus:ring-teal-500">
                                <label for="remember-me" class="ml-2 block text-gray-400">Remember me</label>
                            </div>
                            <a href="/forgot-password" class="font-medium text-teal-400 hover:text-teal-300 transition-colors">Forgot password?</a>
                        </div>

                        <button type="submit" class="w-full mt-2 flex items-center justify-center py-4 px-4 rounded-full font-bold text-[#040d0a] bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 transition-all shadow-[0_5px_15px_rgba(20,184,166,0.2)] hover:shadow-[0_10px_20px_rgba(20,184,166,0.4)]">
                            Sign In
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>
