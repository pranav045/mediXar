<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | MedixAR</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(5, 11, 9, 0.7); backdrop-filter: blur(24px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .glass-panel { background: rgba(10, 25, 22, 0.45); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.08); transition: all 0.3s ease; }
        .glass-panel:hover { transform: translateY(-5px); border-color: rgba(45, 212, 191, 0.3); box-shadow: 0 10px 30px rgba(0,0,0,0.5); }
        .leader-card { background: rgba(13, 35, 30, 0.6); border: 1px solid rgba(45, 212, 191, 0.4); box-shadow: 0 0 30px rgba(45, 212, 191, 0.15); }
        .leader-card:hover { transform: translateY(-5px); box-shadow: 0 0 40px rgba(45, 212, 191, 0.25); }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30">

    <!-- Ambient Background -->
    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[20%] left-[50%] -translate-x-1/2 w-[60vw] h-[60vw] rounded-full bg-teal-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-10 blur-xl mix-blend-screen">
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-9 h-9 relative flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 border-[1.5px] border-teal-500/30 rounded-lg transform rotate-12 group-hover:rotate-90 transition-all duration-700"></div>
                    <div class="absolute inset-0 border-[1.5px] border-emerald-400/30 rounded-lg transform -rotate-12 group-hover:-rotate-90 transition-all duration-700"></div>
                    <div class="w-6 h-6 bg-gradient-to-br from-teal-400 to-emerald-500 rounded flex items-center justify-center relative z-10 shadow-[0_0_15px_rgba(45,212,191,0.5)]">
                        <svg class="w-3.5 h-3.5 text-[#050b09]" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                            <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                            <path d="M8 15a6 6 0 1 0 12 0v-3" />
                            <path d="M11 3v2" />
                            <path d="M6 3v2" />
                            <path d="M18 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                        </svg>
                    </div>
                </div>
                <span class="text-xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="/" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Home</a>
                <a href="/anatomy" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Explorer</a>
                <a href="/contact" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Contact</a>
                <div class="w-px h-5 bg-white/20"></div>
                <a href="/login" class="text-sm font-semibold text-white hover:text-teal-400 transition-colors">Log in</a>
                <a href="/register" class="px-5 py-2 rounded-full bg-white text-black font-bold text-sm hover:bg-teal-400 transition shadow-[0_0_15px_rgba(255,255,255,0.1)]">Sign up</a>
            </div>

            <!-- Mobile Menu Button -->
            <button class="md:hidden text-white hover:text-teal-400 transition" id="mobile-menu-btn">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>
        
        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden md:hidden absolute top-[72px] left-0 w-full glass-panel border-t-0 border-x-0 shadow-2xl flex flex-col p-4 gap-4">
            <a href="/" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Home</a>
            <a href="/anatomy" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Explorer</a>
            <a href="/contact" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Contact</a>
            <div class="h-px w-full bg-white/10 my-2"></div>
            <a href="/login" class="p-3 rounded-lg hover:bg-white/5 text-white font-medium">Log in</a>
            <a href="/register" class="p-3 rounded-lg bg-teal-500/20 text-teal-400 font-medium text-center border border-teal-500/30">Sign up</a>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center justify-center px-6 py-20">
        
        <div class="text-center max-w-3xl mx-auto mb-16 relative z-10">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-teal-500/10 border border-teal-500/20 text-xs font-bold text-teal-400 tracking-widest uppercase mb-6">
                The Visionaries
            </div>
            <h1 class="text-4xl md:text-6xl font-bold mb-6">Meet the Team</h1>
            <p class="text-gray-400 text-lg md:text-xl leading-relaxed">
                We are a passionate trio of developers dedicated to revolutionizing medical education by bridging the gap between traditional textbooks and immersive 3D technology.
            </p>
        </div>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl relative z-10 items-center">

            <!-- Team Member 2 -->
            <div class="glass-panel p-8 rounded-3xl flex flex-col items-center text-center group">
                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-gray-700 to-gray-500 p-1 mb-6 group-hover:from-emerald-500 group-hover:to-teal-400 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <svg class="w-12 h-12 text-gray-500 group-hover:text-teal-400 transition-colors duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-1">Anurag Yadav</h3>
                <p class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Specializing in robust backend architecture and ensuring seamless database integration for user progress tracking.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#0077b5] transition-colors text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Project Leader -->
            <div class="glass-panel leader-card p-10 rounded-3xl flex flex-col items-center text-center relative md:-translate-y-4 z-20 group">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 py-1 bg-gradient-to-r from-teal-400 to-emerald-400 text-[#050b09] font-bold text-xs rounded-full uppercase tracking-widest shadow-lg">
                    Project Leader
                </div>
                <div class="w-40 h-40 rounded-full bg-gradient-to-tr from-teal-500 to-emerald-400 p-1 mb-6 relative shadow-[0_0_20px_rgba(45,212,191,0.5)]">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <svg class="w-16 h-16 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-1">Gomit Saha</h3>
                <p class="text-sm font-bold text-teal-400 uppercase tracking-widest mb-4">Lead Developer & Visionary</p>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">
                    Driving the architectural vision of MedixAR, orchestrating the integration of 3D WebXR components with modern frontend design paradigms.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://github.com/Gomit-Dev" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-teal-500 transition-colors text-white hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-teal-500 transition-colors text-white hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="glass-panel p-8 rounded-3xl flex flex-col items-center text-center group">
                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-gray-700 to-gray-500 p-1 mb-6 group-hover:from-emerald-500 group-hover:to-teal-400 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <svg class="w-12 h-12 text-gray-500 group-hover:text-teal-400 transition-colors duration-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-1">Pranav Giara</h3>
                <p class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Focused on crafting responsive frontend UI components and ensuring the platform delivers a premium, glitch-free user experience.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="#" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#0077b5] transition-colors text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

        </div>

    </main>

    <!-- Global Footer -->
    <footer class="w-full py-8 mt-auto border-t border-white/10 bg-black/40">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 opacity-50">
                <div class="w-6 h-6 relative flex items-center justify-center">
                <div class="w-4 h-4 bg-teal-500/20 rounded flex items-center justify-center">
                    <svg class="w-3 h-3 text-teal-400" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                        <path d="M6 4h-1a2 2 0 0 0 -2 2v3.5a5.5 5.5 0 0 0 11 0v-3.5a2 2 0 0 0 -2 -2h-1" />
                            <path d="M8 15a6 6 0 1 0 12 0v-3" />
                            <path d="M11 3v2" />
                            <path d="M6 3v2" />
                            <path d="M18 10a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                    </svg>
                </div>
            </div>
                <span class="font-bold tracking-widest text-sm">MedixAR</span>
            </div>
            <p class="text-xs text-gray-500">© 2026 MedixAR EdTech. All rights reserved.</p>
        </div>
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            document.getElementById('mobile-menu').classList.toggle('hidden');
        });
    </script>
</body>
</html>
