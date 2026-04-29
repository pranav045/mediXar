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

        <nav class="fixed top-0 w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <div class="w-12 h-12 relative flex items-center justify-center group-hover:scale-105 transition-transform duration-300">
                    <div class="absolute inset-0 border-2 border-teal-500/30 rounded-lg transform rotate-12 group-hover:rotate-90 transition-all duration-700"></div>
                    <div class="absolute inset-0 border-2 border-emerald-400/30 rounded-lg transform -rotate-12 group-hover:-rotate-90 transition-all duration-700"></div>
                    <svg class="w-8 h-8 text-teal-400 drop-shadow-[0_0_15px_rgba(45,212,191,0.5)] relative z-10" fill="currentColor" viewBox="0 0 512 512">
                        <path fill="currentColor" d="M202.412 21.06c-2.189.065-4.715.577-7.795 1.643C149.244 38.411 80.172 79.747 18.965 98.262c10.858 6.727 22.689 12.663 34.941 17.37c13.696-6.286 27.073-12.537 38.414-18.808c13.887-7.678 24.612-15.672 29.078-22.199l13.204 9.035c-7.33 10.712-19.785 19.009-34.54 27.166c-7.337 4.057-15.276 8.01-23.468 11.904c7.515 1.809 15.064 3.09 22.533 3.707q5.068.419 10.057.456c15.845-9.826 30.838-22.51 35.67-31.631l14.138 7.488c-3.464 6.54-8.679 12.826-14.933 18.695c15.63-5.498 29.79-15.436 41.54-31.103l7.235-9.647l6.076 10.416c4.704 8.064 11.043 14.811 18.235 20.618c5.332-.816 10.034-1.374 14.855-1.649V79.084c-9.7-7.317-16-18.93-16-31.941a39.6 39.6 0 0 1 3.068-15.305c-2.539-3.553-5.16-6.348-7.793-8.072c-2.172-1.423-4.325-2.385-6.941-2.643a16 16 0 0 0-1.922-.063m106.258 0q-.513.014-1.004.063c-2.616.258-4.769 1.22-6.941 2.643c-2.634 1.724-5.254 4.52-7.793 8.072A39.6 39.6 0 0 1 296 47.143c0 13.011-6.3 24.624-16 31.941v30.996c5.003.289 10.454.932 14.855 1.649c7.192-5.807 13.531-12.554 18.235-20.618l6.076-10.416l7.234 9.647c11.75 15.667 25.911 25.605 41.541 31.103c-6.254-5.869-11.47-12.155-14.933-18.695l14.138-7.488c4.832 9.122 19.825 21.805 35.67 31.63a134 134 0 0 0 10.057-.454c7.47-.619 15.018-1.9 22.533-3.708c-8.192-3.894-16.131-7.847-23.469-11.904c-14.754-8.157-27.208-16.454-34.539-27.166l13.204-9.035c4.466 6.527 15.19 14.521 29.078 22.2c11.34 6.27 24.718 12.52 38.414 18.808c12.252-4.708 24.083-10.644 34.941-17.371c-61.207-18.515-130.279-59.85-175.652-75.559c-3.52-1.219-6.317-1.711-8.713-1.642zM256 24c-13.35 0-24 10.65-24 24s10.65 24 24 24s24-10.65 24-24s-10.65-24-24-24m-8 62.332v24.64c2.793.606 5.759 1.61 8 2.89c2.681-1.483 5.28-2.266 8-2.89v-24.64c-2.587.53-5.263.81-8 .81s-5.413-.28-8-.81m-12.547 39.654a76 76 0 0 0-4.674.2c-12.862.942-28.802 5.08-35.353 8.185c-14.907 7.066-21.148 13.791-24.215 19.988c-3.067 6.198-3.211 12.802-3.211 20.784c0 9.333 4.299 16.218 12.146 22.812s19.157 12.141 30.8 16.75c21.493 11.283 44.162 22.942 62.048 35.984c4.915 3.475 11.183 5.658 15.998 8.178c4.717-4.959 7.008-9.53 7.008-13.724c0-2.5-.667-5.262-1.893-8.182c-12.214-23.082-35.176-34.215-59.312-47.52l-.057.063c-10.371-4.023-20.014-6.361-26.738-6.361l-3.578-15.157c15.833-7.916 27.435-14.553 34.338-20.877c6.756-6.188 9.266-11.253 9.209-19.312c-4.007-1.756-8.557-1.851-12.516-1.81zm41.094 0c-4.174.141-9.299.064-12.516 1.81c-.057 8.06 2.453 13.125 9.21 19.313c6.902 6.324 18.504 12.961 34.337 20.877L304 183.143c-7.963 0-20.012 3.269-32.525 8.744c10.05 6.432 19.599 13.926 27.498 23.611c.695-.268 1.387-.518 2.082-.793c11.642-4.609 22.95-10.156 30.799-16.75C339.7 191.361 344 184.475 344 175.143c0-7.982-.144-14.586-3.21-20.784c-3.068-6.197-9.309-12.922-24.216-19.988c-6.55-3.105-22.491-7.243-35.353-8.185a76 76 0 0 0-4.674-.2M256 151.77a49.3 49.3 0 0 1-6.434 7.138c-.508.466-1.035.926-1.566 1.383v17.15a160 160 0 0 1 8.008 3.92a164 164 0 0 1 7.992-3.92v-17.15a68 68 0 0 1-1.566-1.383A49.3 49.3 0 0 1 256 151.77m-37.537 83.896c-1.594 3.4-2.463 6.61-2.463 9.477c0 4.833 3.03 10.165 9.322 16.015s15.368 11.666 24.686 17.06c9.318 5.395 18.832 10.38 26.472 15.339c3.82 2.48 7.189 4.92 9.995 7.81S292 307.976 292 313.143c0 4.25-2.151 8.289-4.693 10.804c-2.543 2.516-5.357 4.063-8.274 5.467c-2.293 1.104-4.71 2.104-7.16 3.098c6.558 4.82 12.595 10.053 17.467 15.232c2.72-1.247 5.468-2.497 8.181-3.807c6.982-3.37 13.564-7.126 17.93-11.242c4.367-4.115 6.549-7.97 6.549-13.552c0-9.945-3.598-17.446-9.586-24.297c-5.988-6.852-14.492-12.712-23.363-17.746c-8.87-5.035-17.995-9.213-25.438-13.438c-3.721-2.112-7.045-4.194-9.908-6.88c-.146-.138-.29-.291-.435-.434c-10.483-7.04-23.998-15.262-34.807-20.682m2.406 42.647c-8.107 4.759-15.766 10.22-21.283 16.533c-5.988 6.85-9.586 14.352-9.586 24.297c0 5.583 2.182 9.437 6.549 13.552c4.366 4.116 10.948 7.872 17.93 11.243c2.64 1.274 5.3 2.493 7.94 3.708c19.051 9.787 36.7 19.107 53.985 23.813c4.034-1.373 4.848-5.133 3.936-9.729c-14.856-14.943-29.808-23.803-47.373-32.316c-2.917-1.404-5.731-2.951-8.274-5.467S220 317.393 220 313.143c0-5.167 2.72-8.885 5.525-11.776s6.174-5.33 9.995-7.81a158 158 0 0 1 4.373-2.721c-6.53-3.83-13.092-7.935-19.024-12.524zM256 299.998c-2.85 1.615-5.56 3.17-8 4.64v13.602c.75.346 1.504.714 2.258 1.082c1.845.76 3.75 1.558 5.74 2.461c2.81-1.274 5.521-2.389 8.002-3.388v-13.756a337 337 0 0 0-8-4.641m-17.795 73.816c.588 4.245 2.564 8.12 5.824 12.147c3.933 4.857 9.67 9.59 15.723 14.059s12.365 8.641 17.643 13.166c5.277 4.524 10.605 9.79 10.605 17.957c0 9.9-5.82 17.934-12.969 27s-16.35 18.536-25.51 27.273c-2.047 1.953-3.986 3.667-6.005 5.53c8.23-4.31 16.77-9.533 24.816-15.385C290.729 459.27 308 437.905 308 423.143c0-4.467-1.67-8.043-4.982-11.957s-8.27-7.772-13.592-11.48c-5.322-3.71-10.947-7.234-15.762-11.368a56 56 0 0 1-1.666-1.494c-12.987-3.453-23.893-8.06-33.793-13.03m-7.873 20.582c-2.574 1.786-5.2 3.527-7.758 5.31c-5.321 3.708-10.28 7.565-13.592 11.48c-3.311 3.914-4.982 7.49-4.982 11.957c0 7.314 3.964 16.342 11.316 25.61c6.386 8.05 15.135 16.148 24.827 23.481a385 385 0 0 0 5.076-4.976c-2.796-3.028-5.456-6.053-7.871-9.033C230.003 449.162 224 441.16 224 431.143c0-8.167 5.328-13.433 10.605-17.957c2.485-2.13 5.21-4.181 8.018-6.223c-3.918-3.258-7.718-6.846-11.027-10.934a53 53 0 0 1-1.264-1.633m25.662 22.666c-2.896 2.081-5.66 4.071-7.994 5.872v22.921a70 70 0 0 0 1.777 2.297c1.95 2.407 4.133 4.909 6.467 7.457c2.24-2.519 4.349-4.995 6.225-7.375c.536-.68 1.04-1.353 1.531-2.023v-23.277c-2.346-1.81-5.09-3.778-8.006-5.872"/>
                    </svg>
                </div>
                <span class="text-xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
            </a>

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

        <header class="relative min-h-[90vh] flex flex-col justify-center items-center px-6 pt-32 pb-20">
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

        <section class="py-12 border-y border-white/5 bg-black/40 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-sm font-semibold text-gray-500 uppercase tracking-widest mb-8">Trusted by medical students from top universities</p>
            <div class="flex flex-wrap items-center justify-center gap-10 md:gap-20 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-500">
                                <h3 class="text-xl font-bold tracking-tighter">Harvard<span class="font-light">Med</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">Stanford<span class="font-light">Bio</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">JohnHopkins</h3>
                <h3 class="text-xl font-bold tracking-tighter">UCLA<span class="font-light">Anatomy</span></h3>
                <h3 class="text-xl font-bold tracking-tighter">Oxford<span class="font-light">Sci</span></h3>
            </div>
        </div>
    </section>

        <section id="how-it-works" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6 space-y-32">
            
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

        <section id="features" class="relative z-10 py-24 bg-black/40 border-y border-white/5">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-bold mb-6">Everything You Need To Master Anatomy</h2>
                <p class="text-gray-400 text-lg max-w-2xl mx-auto">Built from the ground up by developers and medical educators to provide the ultimate learning toolkit.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
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

        <section id="testimonials" class="py-24 relative z-10">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-5xl font-bold mb-4">What Our Students Say</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
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
