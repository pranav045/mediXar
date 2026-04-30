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

        <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[20%] left-[50%] -translate-x-1/2 w-[60vw] h-[60vw] rounded-full bg-teal-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-10 blur-xl mix-blend-screen">
    </div>

        <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-7xl mx-auto flex items-center justify-between">
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
                <a href="/" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Home</a>
                @auth
                    <a href="/dashboard" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Dashboard</a>
                @endauth
                <a href="/anatomy" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Explorer</a>
                <a href="/contact" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Contact</a>
                <div class="w-px h-5 bg-white/20"></div>
                @guest
                    <a href="/login" class="text-sm font-semibold text-white hover:text-teal-400 transition-colors">Log in</a>
                    <a href="/register" class="px-5 py-2 rounded-full bg-white text-black font-bold text-sm hover:bg-teal-400 transition shadow-[0_0_15px_rgba(255,255,255,0.1)]">Sign up</a>
                @else
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Logout</button>
                    </form>
                @endguest
            </div>

                        <button class="md:hidden text-white hover:text-teal-400 transition" id="mobile-menu-btn">
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </div>
        
                <div id="mobile-menu" class="hidden md:hidden absolute top-[72px] left-0 w-full glass-panel border-t-0 border-x-0 shadow-2xl flex flex-col p-4 gap-4">
            <a href="/" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Home</a>
            @auth
                <a href="/dashboard" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Dashboard</a>
            @endauth
            <a href="/anatomy" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Explorer</a>
            <a href="/contact" class="p-3 rounded-lg hover:bg-white/5 text-gray-300 font-medium">Contact</a>
            <div class="h-px w-full bg-white/10 my-2"></div>
            @guest
                <a href="/login" class="p-3 rounded-lg hover:bg-white/5 text-white font-medium">Log in</a>
                <a href="/register" class="p-3 rounded-lg bg-teal-500/20 text-teal-400 font-medium text-center border border-teal-500/30">Sign up</a>
            @else
                <form action="{{ route('logout') }}" method="POST" class="w-full">
                    @csrf
                    <button type="submit" class="p-3 w-full text-left rounded-lg hover:bg-white/5 text-gray-300 font-medium">Logout</button>
                </form>
            @endguest
        </div>
    </nav>

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

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 w-full max-w-6xl relative z-10 items-center">

                        <div class="glass-panel p-8 rounded-3xl flex flex-col items-center text-center group">
                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-gray-700 to-gray-500 p-1 mb-6 group-hover:from-emerald-500 group-hover:to-teal-400 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/anurag.jpg') }}" alt="Anurag Yadav" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-1">Anurag Yadav</h3>
                <p class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Specializing in robust backend architecture and ensuring seamless database integration for user progress tracking.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://www.linkedin.com/in/anurag-yv/" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#0077b5] transition-colors text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

                        <div class="glass-panel leader-card p-10 rounded-3xl flex flex-col items-center text-center relative md:-translate-y-4 z-20 group">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 py-1 bg-gradient-to-r from-teal-400 to-emerald-400 text-[#050b09] font-bold text-xs rounded-full uppercase tracking-widest shadow-lg">
                    Project Leader
                </div>
                <div class="w-40 h-40 rounded-full bg-gradient-to-tr from-teal-500 to-emerald-400 p-1 mb-6 relative shadow-[0_0_20px_rgba(45,212,191,0.5)]">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/gomit.png') }}?v={{ time() }}" alt="Gomit Saha" class="w-full h-full object-cover">
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
                    <a href="https://www.linkedin.com/in/gomit-saha" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-teal-500 transition-colors text-white hover:text-black">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

                        <div class="glass-panel p-8 rounded-3xl flex flex-col items-center text-center group">
                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-gray-700 to-gray-500 p-1 mb-6 group-hover:from-emerald-500 group-hover:to-teal-400 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <img src="{{ asset('img/pranav.png') }}" alt="Pranav Gaira" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-1">Pranav Gaira</h3>
                <p class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-400 text-sm leading-relaxed mb-6">
                    Focused on crafting responsive frontend UI components and ensuring the platform delivers a premium, glitch-free user experience.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://www.linkedin.com/in/pranav-gaira" target="_blank" class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-[#0077b5] transition-colors text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

        </div>

    </main>

        <footer class="w-full py-8 mt-auto border-t border-white/10 bg-black/40">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 opacity-50">
                <div class="w-6 h-6 relative flex items-center justify-center">
                <svg class="w-5 h-5 text-teal-400" fill="currentColor" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M202.412 21.06c-2.189.065-4.715.577-7.795 1.643C149.244 38.411 80.172 79.747 18.965 98.262c10.858 6.727 22.689 12.663 34.941 17.37c13.696-6.286 27.073-12.537 38.414-18.808c13.887-7.678 24.612-15.672 29.078-22.199l13.204 9.035c-7.33 10.712-19.785 19.009-34.54 27.166c-7.337 4.057-15.276 8.01-23.468 11.904c7.515 1.809 15.064 3.09 22.533 3.707q5.068.419 10.057.456c15.845-9.826 30.838-22.51 35.67-31.631l14.138 7.488c-3.464 6.54-8.679 12.826-14.933 18.695c15.63-5.498 29.79-15.436 41.54-31.103l7.235-9.647l6.076 10.416c4.704 8.064 11.043 14.811 18.235 20.618c5.332-.816 10.034-1.374 14.855-1.649V79.084c-9.7-7.317-16-18.93-16-31.941a39.6 39.6 0 0 1 3.068-15.305c-2.539-3.553-5.16-6.348-7.793-8.072c-2.172-1.423-4.325-2.385-6.941-2.643a16 16 0 0 0-1.922-.063m106.258 0q-.513.014-1.004.063c-2.616.258-4.769 1.22-6.941 2.643c-2.634 1.724-5.254 4.52-7.793 8.072A39.6 39.6 0 0 1 296 47.143c0 13.011-6.3 24.624-16 31.941v30.996c5.003.289 10.454.932 14.855 1.649c7.192-5.807 13.531-12.554 18.235-20.618l6.076-10.416l7.234 9.647c11.75 15.667 25.911 25.605 41.541 31.103c-6.254-5.869-11.47-12.155-14.933-18.695l14.138-7.488c4.832 9.122 19.825 21.805 35.67 31.63a134 134 0 0 0 10.057-.454c7.47-.619 15.018-1.9 22.533-3.708c-8.192-3.894-16.131-7.847-23.469-11.904c-14.754-8.157-27.208-16.454-34.539-27.166l13.204-9.035c4.466 6.527 15.19 14.521 29.078 22.2c11.34 6.27 24.718 12.52 38.414 18.808c12.252-4.708 24.083-10.644 34.941-17.371c-61.207-18.515-130.279-59.85-175.652-75.559c-3.52-1.219-6.317-1.711-8.713-1.642zM256 24c-13.35 0-24 10.65-24 24s10.65 24 24 24s24-10.65 24-24s-10.65-24-24-24m-8 62.332v24.64c2.793.606 5.759 1.61 8 2.89c2.681-1.483 5.28-2.266 8-2.89v-24.64c-2.587.53-5.263.81-8 .81s-5.413-.28-8-.81m-12.547 39.654a76 76 0 0 0-4.674.2c-12.862.942-28.802 5.08-35.353 8.185c-14.907 7.066-21.148 13.791-24.215 19.988c-3.067 6.198-3.211 12.802-3.211 20.784c0 9.333 4.299 16.218 12.146 22.812s19.157 12.141 30.8 16.75c21.493 11.283 44.162 22.942 62.048 35.984c4.915 3.475 11.183 5.658 15.998 8.178c4.717-4.959 7.008-9.53 7.008-13.724c0-2.5-.667-5.262-1.893-8.182c-12.214-23.082-35.176-34.215-59.312-47.52l-.057.063c-10.371-4.023-20.014-6.361-26.738-6.361l-3.578-15.157c15.833-7.916 27.435-14.553 34.338-20.877c6.756-6.188 9.266-11.253 9.209-19.312c-4.007-1.756-8.557-1.851-12.516-1.81zm41.094 0c-4.174.141-9.299.064-12.516 1.81c-.057 8.06 2.453 13.125 9.21 19.313c6.902 6.324 18.504 12.961 34.337 20.877L304 183.143c-7.963 0-20.012 3.269-32.525 8.744c10.05 6.432 19.599 13.926 27.498 23.611c.695-.268 1.387-.518 2.082-.793c11.642-4.609 22.95-10.156 30.799-16.75C339.7 191.361 344 184.475 344 175.143c0-7.982-.144-14.586-3.21-20.784c-3.068-6.197-9.309-12.922-24.216-19.988c-6.55-3.105-22.491-7.243-35.353-8.185a76 76 0 0 0-4.674-.2M256 151.77a49.3 49.3 0 0 1-6.434 7.138c-.508.466-1.035.926-1.566 1.383v17.15a160 160 0 0 1 8.008 3.92a164 164 0 0 1 7.992-3.92v-17.15a68 68 0 0 1-1.566-1.383A49.3 49.3 0 0 1 256 151.77m-37.537 83.896c-1.594 3.4-2.463 6.61-2.463 9.477c0 4.833 3.03 10.165 9.322 16.015s15.368 11.666 24.686 17.06c9.318 5.395 18.832 10.38 26.472 15.339c3.82 2.48 7.189 4.92 9.995 7.81S292 307.976 292 313.143c0 4.25-2.151 8.289-4.693 10.804c-2.543 2.516-5.357 4.063-8.274 5.467c-2.293 1.104-4.71 2.104-7.16 3.098c6.558 4.82 12.595 10.053 17.467 15.232c2.72-1.247 5.468-2.497 8.181-3.807c6.982-3.37 13.564-7.126 17.93-11.242c4.367-4.115 6.549-7.97 6.549-13.552c0-9.945-3.598-17.446-9.586-24.297c-5.988-6.852-14.492-12.712-23.363-17.746c-8.87-5.035-17.995-9.213-25.438-13.438c-3.721-2.112-7.045-4.194-9.908-6.88c-.146-.138-.29-.291-.435-.434c-10.483-7.04-23.998-15.262-34.807-20.682m2.406 42.647c-8.107 4.759-15.766 10.22-21.283 16.533c-5.988 6.85-9.586 14.352-9.586 24.297c0 5.583 2.182 9.437 6.549 13.552c4.366 4.116 10.948 7.872 17.93 11.243c2.64 1.274 5.3 2.493 7.94 3.708c19.051 9.787 36.7 19.107 53.985 23.813c4.034-1.373 4.848-5.133 3.936-9.729c-14.856-14.943-29.808-23.803-47.373-32.316c-2.917-1.404-5.731-2.951-8.274-5.467S220 317.393 220 313.143c0-5.167 2.72-8.885 5.525-11.776s6.174-5.33 9.995-7.81a158 158 0 0 1 4.373-2.721c-6.53-3.83-13.092-7.935-19.024-12.524zM256 299.998c-2.85 1.615-5.56 3.17-8 4.64v13.602c.75.346 1.504.714 2.258 1.082c1.845.76 3.75 1.558 5.74 2.461c2.81-1.274 5.521-2.389 8.002-3.388v-13.756a337 337 0 0 0-8-4.641m-17.795 73.816c.588 4.245 2.564 8.12 5.824 12.147c3.933 4.857 9.67 9.59 15.723 14.059s12.365 8.641 17.643 13.166c5.277 4.524 10.605 9.79 10.605 17.957c0 9.9-5.82 17.934-12.969 27s-16.35 18.536-25.51 27.273c-2.047 1.953-3.986 3.667-6.005 5.53c8.23-4.31 16.77-9.533 24.816-15.385C290.729 459.27 308 437.905 308 423.143c0-4.467-1.67-8.043-4.982-11.957s-8.27-7.772-13.592-11.48c-5.322-3.71-10.947-7.234-15.762-11.368a56 56 0 0 1-1.666-1.494c-12.987-3.453-23.893-8.06-33.793-13.03m-7.873 20.582c-2.574 1.786-5.2 3.527-7.758 5.31c-5.321 3.708-10.28 7.565-13.592 11.48c-3.311 3.914-4.982 7.49-4.982 11.957c0 7.314 3.964 16.342 11.316 25.61c6.386 8.05 15.135 16.148 24.827 23.481a385 385 0 0 0 5.076-4.976c-2.796-3.028-5.456-6.053-7.871-9.033C230.003 449.162 224 441.16 224 431.143c0-8.167 5.328-13.433 10.605-17.957c2.485-2.13 5.21-4.181 8.018-6.223c-3.918-3.258-7.718-6.846-11.027-10.934a53 53 0 0 1-1.264-1.633m25.662 22.666c-2.896 2.081-5.66 4.071-7.994 5.872v22.921a70 70 0 0 0 1.777 2.297c1.95 2.407 4.133 4.909 6.467 7.457c2.24-2.519 4.349-4.995 6.225-7.375c.536-.68 1.04-1.353 1.531-2.023v-23.277c-2.346-1.81-5.09-3.778-8.006-5.872"/>
                </svg>
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
