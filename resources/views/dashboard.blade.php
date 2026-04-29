<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | MedixAR</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(5, 11, 9, 0.7); backdrop-filter: blur(24px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .glass-panel { background: rgba(10, 25, 22, 0.45); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.08); }
        .glass-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease; }
        .glass-card:hover { background: rgba(255, 255, 255, 0.06); border-color: rgba(45, 212, 191, 0.3); transform: translateY(-2px); }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30 pb-20">

    <!-- Ambient Background -->
    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[0%] right-[0%] w-[40vw] h-[40vw] rounded-full bg-teal-900/15 blur-[120px] mix-blend-screen"></div>
        <div class="absolute bottom-[0%] left-[0%] w-[50vw] h-[50vw] rounded-full bg-emerald-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-10 blur-xl mix-blend-screen">
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-8 h-8 rounded-lg bg-gradient-to-br from-teal-400 to-emerald-500 flex items-center justify-center shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                    <svg class="w-5 h-5 text-[#050b09]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-6">
                <a href="/anatomy" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">3D Explorer</a>
                <a href="/quiz" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Quizzes</a>
                <a href="/about" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">About Us</a>
                <a href="/profile" class="w-8 h-8 rounded-full bg-teal-500/20 border border-teal-500/50 flex items-center justify-center text-teal-300 hover:bg-teal-500/40 transition">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white hover:text-teal-400 transition" id="mobile-menu-btn">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>
        
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-[72px] left-0 w-full glass-panel border-t-0 border-x-0 shadow-2xl flex flex-col p-4 gap-4">
            <a href="/anatomy" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">3D Explorer</a>
            <a href="/quiz" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Quizzes</a>
            <a href="/about" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">About Us</a>
            <a href="/profile" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">My Profile</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-6 pt-10 flex flex-col gap-10">

        <!-- Welcome Banner -->
        <header class="flex flex-col md:flex-row md:items-end justify-between gap-6 pb-6 border-b border-white/10">
            <div>
                <h1 class="text-4xl md:text-5xl font-bold mb-2">Welcome back, <span class="text-teal-400">Jane</span></h1>
                <p class="text-gray-400 text-lg">Ready to continue exploring the human body?</p>
            </div>
            <div class="flex items-center gap-4 bg-teal-900/20 px-6 py-3 rounded-2xl border border-teal-500/20">
                <div class="w-10 h-10 rounded-full bg-teal-500/20 flex items-center justify-center text-teal-400">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <div>
                    <p class="text-xs text-teal-500 font-bold tracking-widest uppercase">Current Streak</p>
                    <p class="text-xl font-bold text-white">12 Days 🔥</p>
                </div>
            </div>
        </header>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            
            <!-- Left Column (2/3) -->
            <div class="lg:col-span-2 space-y-8">
                
                <!-- Quick Continue -->
                <section>
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold">Pick up where you left off</h2>
                    </div>
                    <div class="glass-panel p-2 rounded-3xl flex flex-col sm:flex-row overflow-hidden group">
                        <div class="w-full sm:w-1/3 h-48 sm:h-auto bg-black/50 rounded-2xl relative overflow-hidden flex items-center justify-center">
                            <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-50 mix-blend-screen group-hover:scale-110 transition duration-700">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <svg class="w-12 h-12 text-teal-400 opacity-80" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                            </div>
                        </div>
                        <div class="p-8 flex flex-col justify-center sm:w-2/3">
                            <span class="inline-block px-3 py-1 rounded-full bg-emerald-500/20 text-emerald-300 text-xs font-bold tracking-widest uppercase mb-3 w-fit">Nervous System</span>
                            <h3 class="text-3xl font-bold mb-2">The Brain Stem</h3>
                            <p class="text-gray-400 mb-6 line-clamp-2">Review the midbrain, pons, and medulla oblongata, including the cranial nerve nuclei.</p>
                            <a href="/anatomy" class="inline-flex items-center gap-2 px-6 py-3 rounded-full bg-white text-black font-bold hover:bg-teal-400 transition w-fit">
                                Continue in 3D →
                            </a>
                        </div>
                    </div>
                </section>

                <!-- Recommended Modules -->
                <section>
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-bold">Recommended for you</h2>
                        <a href="/anatomy" class="text-sm text-teal-400 hover:text-white transition">View all</a>
                    </div>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <a href="/anatomy" class="glass-card p-6 rounded-2xl flex flex-col group">
                            <div class="w-10 h-10 rounded-xl bg-teal-500/20 text-teal-400 flex items-center justify-center mb-4 group-hover:bg-teal-400 group-hover:text-black transition">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" /></svg>
                            </div>
                            <h3 class="font-bold text-lg mb-1">Human Heart</h3>
                            <p class="text-xs text-gray-400 mb-4">Cardiovascular System</p>
                            <div class="w-full bg-white/10 rounded-full h-1.5 mt-auto">
                                <div class="bg-teal-400 h-1.5 rounded-full" style="width: 45%"></div>
                            </div>
                        </a>
                        <a href="/anatomy" class="glass-card p-6 rounded-2xl flex flex-col group">
                            <div class="w-10 h-10 rounded-xl bg-cyan-500/20 text-cyan-400 flex items-center justify-center mb-4 group-hover:bg-cyan-400 group-hover:text-black transition">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" /></svg>
                            </div>
                            <h3 class="font-bold text-lg mb-1">Human Skull</h3>
                            <p class="text-xs text-gray-400 mb-4">Skeletal System</p>
                            <div class="w-full bg-white/10 rounded-full h-1.5 mt-auto">
                                <div class="bg-cyan-400 h-1.5 rounded-full" style="width: 10%"></div>
                            </div>
                        </a>
                    </div>
                </section>

            </div>

            <!-- Right Column (1/3) -->
            <div class="space-y-8">
                
                <!-- Recent Quizzes -->
                <section>
                    <h2 class="text-xl font-bold mb-4">Recent Quizzes</h2>
                    <div class="glass-panel p-6 rounded-3xl flex flex-col gap-4">
                        
                        <div class="flex items-center justify-between pb-4 border-b border-white/10">
                            <div>
                                <h4 class="font-semibold text-white">Cranial Nerves</h4>
                                <p class="text-xs text-gray-400">Nervous System</p>
                            </div>
                            <div class="text-right">
                                <span class="text-emerald-400 font-bold">92%</span>
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Passed</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between pb-4 border-b border-white/10">
                            <div>
                                <h4 class="font-semibold text-white">Heart Valves</h4>
                                <p class="text-xs text-gray-400">Cardiovascular</p>
                            </div>
                            <div class="text-right">
                                <span class="text-emerald-400 font-bold">85%</span>
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Passed</p>
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div>
                                <h4 class="font-semibold text-white">Bones of the Hand</h4>
                                <p class="text-xs text-gray-400">Skeletal System</p>
                            </div>
                            <div class="text-right">
                                <span class="text-red-400 font-bold">60%</span>
                                <p class="text-[10px] text-gray-500 uppercase tracking-wider">Failed</p>
                            </div>
                        </div>

                        <a href="/quiz" class="mt-2 w-full py-3 rounded-xl border border-white/10 hover:bg-white/5 text-center text-sm font-semibold transition">
                            Take a new Quiz
                        </a>
                    </div>
                </section>

                <!-- AR App Promo -->
                <section>
                    <div class="glass-panel p-8 rounded-3xl relative overflow-hidden bg-gradient-to-br from-teal-900/40 to-emerald-900/20 border-teal-500/30">
                        <div class="relative z-10">
                            <h3 class="text-xl font-bold mb-2">Try MedixAR on Mobile</h3>
                            <p class="text-sm text-teal-100/70 mb-6">Experience 1:1 scale anatomical models in your physical space with our native AR viewer.</p>
                            <button class="px-6 py-2 bg-teal-500 text-black font-bold rounded-full text-sm hover:bg-teal-400 transition w-full">
                                Get Download Link
                            </button>
                        </div>
                        <svg class="absolute -bottom-10 -right-10 w-48 h-48 text-teal-500/10" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20 10 10 0 000-20zM9.5 16.5l-4-4 1.41-1.41L9.5 13.67l7.09-7.09L18 8l-8.5 8.5z"/></svg>
                    </div>
                </section>

            </div>
        </div>

    </main>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
