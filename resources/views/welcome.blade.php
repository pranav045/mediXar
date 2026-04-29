<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedixAR | Master Human Anatomy with AR</title>

    @vite(['resources/css/app.css'])

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        
        .glass-nav {
            background: rgba(5, 11, 9, 0.7);
            backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        
        .glass-card {
            background: rgba(10, 25, 22, 0.4);
            backdrop-filter: blur(16px);
            border: 1px solid rgba(255,255,255,0.05);
            transition: all 0.5s ease;
        }
        
        .glass-card:hover {
            background: rgba(20, 45, 40, 0.5);
            border-color: rgba(45, 212, 191, 0.3);
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.5), 0 0 20px rgba(45, 212, 191, 0.1);
        }

        .gradient-text {
            background: linear-gradient(to right, #99f6e4, #6ee7b7, #14b8a6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-overlay {
            background: linear-gradient(to bottom, rgba(5, 11, 9, 0.3) 0%, rgba(5, 11, 9, 0.8) 70%, rgba(5, 11, 9, 1) 100%);
        }
    </style>
</head>
<body class="bg-[#050b09] text-white overflow-x-hidden relative selection:bg-teal-500/30">

    <!-- Navbar -->
    <nav class="fixed top-0 w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
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
                <a href="#how-it-works" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">How it Works</a>
                <a href="#features" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Features</a>
                <a href="/about" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">About Us</a>
                <a href="/contact" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Contact</a>
                <div class="w-px h-5 bg-white/20"></div>
                @if (Route::has('login'))
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm font-semibold text-gray-300 hover:text-white transition-colors">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm font-semibold text-gray-300 hover:text-white transition-colors">Log in</a>
                        @if (Route::has('register'))
                            <a href="/register" class="text-sm font-semibold px-5 py-2 rounded-full bg-white/10 hover:bg-white/20 border border-white/10 transition-all">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="relative min-h-[90vh] flex flex-col justify-center items-center px-6 pt-32 pb-20">
        <!-- New Background Image -->
        <div class="absolute inset-0 -z-20">
            <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" alt="Holographic Anatomy Background" class="w-full h-full object-cover object-top opacity-50 mix-blend-screen">
        </div>
        <div class="absolute inset-0 -z-10 hero-overlay"></div>

        <div class="max-w-4xl mx-auto text-center relative z-10">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-500/30 text-xs font-semibold text-teal-300 tracking-widest uppercase mb-8 shadow-inner backdrop-blur-md">
                <span class="w-2 h-2 rounded-full bg-teal-400 animate-pulse"></span>
                The Future of Medical Education
            </div>

            <h1 class="text-5xl md:text-7xl font-bold tracking-tight mb-8 leading-[1.1]">
                Master Human Anatomy <br class="hidden md:block" />
                <span class="gradient-text">In Immersive 3D & AR</span>
            </h1>

            <p class="text-gray-300 text-lg md:text-xl leading-relaxed max-w-2xl mx-auto font-light mb-12">
                Step away from flat textbooks. MedixAR brings anatomical structures to life, letting you interact, dissect, and explore the human body from any device.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="/register" class="w-full sm:w-auto px-8 py-4 bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-[#040d0a] font-bold tracking-wide rounded-xl transition-all duration-300 shadow-[0_10px_20px_rgba(20,184,166,0.3)] hover:-translate-y-1 flex items-center justify-center gap-2">
                    Get Started Free
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </a>
                <a href="#how-it-works" class="w-full sm:w-auto px-8 py-4 rounded-xl bg-white/5 border border-white/10 text-white font-medium hover:bg-white/10 transition-all flex items-center justify-center gap-2 backdrop-blur-md">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    Watch Demo
                </a>
            </div>
        </div>
    </header>

    <!-- Trust / Stats Banner -->
    <section class="py-12 border-y border-white/5 bg-black/40 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-sm font-semibold text-gray-500 uppercase tracking-widest mb-8">Trusted by medical students from top universities</p>
            <div class="flex flex-wrap items-center justify-center gap-10 md:gap-20 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                <!-- Placeholder University Logos (Text for now) -->
                <h3 class="text-xl font-bold tracking-tighter">Harvard<span class="font-light">Med</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">Stanford<span class="font-light">Bio</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">JohnHopkins</h3>
                <h3 class="text-xl font-bold tracking-tighter">UCLA<span class="font-light">Anatomy</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">Oxford<span class="font-light">Sci</span></h3>
            </div>
        </div>
    </section>

    <!-- How It Works (Zig-Zag) -->
    <section id="how-it-works" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6 space-y-32">
            
            <!-- Row 1 -->
            <div class="flex flex-col md:flex-row items-center gap-12 lg:gap-20">
                <div class="w-full md:w-1/2 aspect-square md:aspect-video rounded-3xl bg-teal-900/20 border border-teal-500/20 flex items-center justify-center relative overflow-hidden group shadow-[0_0_40px_rgba(45,212,191,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-tr from-teal-500/10 to-transparent"></div>
                    <svg class="w-24 h-24 text-teal-400/50 group-hover:scale-110 transition-transform duration-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                    </svg>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <div class="text-teal-400 font-semibold tracking-widest uppercase text-sm">Immersive AR Integration</div>
                    <h2 class="text-3xl md:text-5xl font-bold leading-tight">Project Anatomy Into Your Reality</h2>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        Why just look at a screen? With our native AR projection technology, you can drop a life-sized, fully interactive 3D anatomical model onto your desk or classroom floor. Walk around it, inspect spatial relationships, and learn intuitively.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> No headset required (uses iOS/Android)</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> True-to-life scaling</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Multi-user synchronized viewing</li>
                    </ul>
                </div>
            </div>

            <!-- Row 2 -->
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 lg:gap-20">
                <div class="w-full md:w-1/2 aspect-square md:aspect-video rounded-3xl bg-emerald-900/20 border border-emerald-500/20 flex items-center justify-center relative overflow-hidden group shadow-[0_0_40px_rgba(16,185,129,0.1)]">
                    <div class="absolute inset-0 bg-gradient-to-tl from-emerald-500/10 to-transparent"></div>
                    <svg class="w-24 h-24 text-emerald-400/50 group-hover:scale-110 transition-transform duration-700" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                    </svg>
                </div>
                <div class="w-full md:w-1/2 space-y-6">
                    <div class="text-emerald-400 font-semibold tracking-widest uppercase text-sm">Interactive Dissection</div>
                    <h2 class="text-3xl md:text-5xl font-bold leading-tight">Layer-By-Layer Exploration</h2>
                    <p class="text-gray-400 text-lg leading-relaxed">
                        Peel back skin, isolate muscle groups, highlight the nervous system, or hide the skeleton. MedixAR gives you complete control over the visibility of thousands of distinct anatomical structures.
                    </p>
                    <ul class="space-y-3 text-gray-300">
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> One-tap isolation of organ systems</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Transparency sliders for deep context</li>
                        <li class="flex items-center gap-3"><svg class="w-5 h-5 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg> Detailed clinical annotations per structure</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

    <!-- Comprehensive Features Grid -->
    <section id="features" class="relative z-10 py-24 bg-black/40 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Everything You Need To Master Anatomy</h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">Built from the ground up by developers and medical educators to provide the ultimate learning toolkit.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Feature 1 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-teal-500/20 border border-teal-500/30 flex items-center justify-center mb-8 text-teal-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">3D Spatial Rotation</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Effortlessly rotate, zoom, and pan around ultra-high-definition anatomical models at 60 frames per second without any lag.
                    </p>
                </div>

                <!-- Feature 2 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-emerald-500/20 border border-emerald-500/30 flex items-center justify-center mb-8 text-emerald-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Built-in Quizzes</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Test your knowledge with 3D pin-drop quizzes. The app highlights a structure and challenges you to identify it correctly under a timer.
                    </p>
                </div>

                <!-- Feature 3 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-cyan-500/20 border border-cyan-500/30 flex items-center justify-center mb-8 text-cyan-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Voice-Activated Search</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Hands tied up? Just say "Show me the cardiovascular system" and MedixAR automatically isolates the exact structures you requested.
                    </p>
                </div>

                <!-- Feature 4 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-blue-500/20 border border-blue-500/30 flex items-center justify-center mb-8 text-blue-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Custom Study Paths</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Save views, create custom bookmarks, and arrange slides into presentations for studying or teaching a class.
                    </p>
                </div>

                <!-- Feature 5 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-indigo-500/20 border border-indigo-500/30 flex items-center justify-center mb-8 text-indigo-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Medical-Grade Accuracy</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Every model is peer-reviewed by real anatomists and doctors, ensuring that what you see matches real-world clinical science perfectly.
                    </p>
                </div>

                <!-- Feature 6 -->
                <div class="glass-card p-10 rounded-3xl">
                    <div class="w-14 h-14 rounded-2xl bg-purple-500/20 border border-purple-500/30 flex items-center justify-center mb-8 text-purple-400">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold mb-4">Cross-Platform Sync</h3>
                    <p class="text-gray-400 leading-relaxed">
                        Start studying on your laptop browser, seamlessly pick up where you left off on your iPad, and project it in AR via your iPhone.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section id="testimonials" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">What Our Students Say</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Testimonial 1 -->
                <div class="glass-card p-8 rounded-3xl">
                    <div class="flex items-center gap-2 text-teal-400 mb-6">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-8">"MedixAR completely transformed how I visualize the cranial nerves. Being able to project a skull onto my desk and peel back the bone layer by layer is absolute magic."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-teal-900/50 flex items-center justify-center font-bold text-teal-300">SJ</div>
                        <div>
                            <p class="font-bold">Sarah Jenkins</p>
                            <p class="text-sm text-gray-500">2nd Year Med Student</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 2 -->
                <div class="glass-card p-8 rounded-3xl">
                    <div class="flex items-center gap-2 text-teal-400 mb-6">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-8">"I use MedixAR to prep my high school biology labs. The quizzes feature alone has driven my students' engagement and test scores up by 40%."</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-emerald-900/50 flex items-center justify-center font-bold text-emerald-300">MR</div>
                        <div>
                            <p class="font-bold">Mark Ramirez</p>
                            <p class="text-sm text-gray-500">Biology Educator</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial 3 -->
                <div class="glass-card p-8 rounded-3xl">
                    <div class="flex items-center gap-2 text-teal-400 mb-6">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                    </div>
                    <p class="text-gray-300 italic mb-8">"I had a technical issue setting up AR on my older iPad, but their 24/7 support team resolved it in literally 5 minutes. Outstanding service!"</p>
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-blue-900/50 flex items-center justify-center font-bold text-blue-300">AK</div>
                        <div>
                            <p class="font-bold">Aisha Khan</p>
                            <p class="text-sm text-gray-500">Pre-Med Student</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Large Pre-Footer CTA -->
    <section class="py-24 relative z-10 border-t border-white/5 bg-gradient-to-b from-transparent to-teal-900/20">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-6xl font-bold mb-6">Ready to see the difference?</h2>
            <p class="text-gray-400 text-lg md:text-xl mb-10 max-w-2xl mx-auto">
                Join over 10,000 students and educators who are already using MedixAR to explore the human body in unprecedented detail.
            </p>
            <a href="/register" class="inline-flex px-10 py-5 bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-[#040d0a] font-bold tracking-wide rounded-2xl transition-all duration-300 shadow-[0_15px_30px_rgba(20,184,166,0.3)] hover:-translate-y-2 items-center justify-center gap-3 text-lg">
                Create Your Free Account
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="relative z-10 py-12 border-t border-white/5 bg-[#020504]">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="flex items-center gap-2">
                <div class="w-6 h-6 rounded bg-gradient-to-br from-teal-400 to-emerald-500 flex items-center justify-center">
                    <svg class="w-3 h-3 text-[#050b09]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <span class="text-lg font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
            </div>
            
            <p class="text-sm text-gray-600">
                &copy; {{ date('Y') }} MedixAR. Designed for Medical Excellence.
            </p>
            
            <div class="flex items-center gap-6 text-sm text-gray-500">
                <a href="#" class="hover:text-teal-400 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-teal-400 transition-colors">Terms of Service</a>
                <a href="/contact" class="hover:text-teal-400 transition-colors">Support & Contact</a>
            </div>
        </div>
    </footer>

</body>
</html>
