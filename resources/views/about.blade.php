@extends('layouts.app')

@section('title', 'About Us | MedixAR')

@section('content')
    <!-- Content Section -->
    <div class="relative flex flex-col items-center px-6 py-20 min-h-[calc(100vh-72px)]">
        <!-- Badge -->
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-500/30 text-xs font-semibold text-teal-300 tracking-widest uppercase mb-8 shadow-inner backdrop-blur-md">
            <span class="w-2 h-2 rounded-full bg-teal-400 animate-pulse"></span>
            The Visionaries
        </div>

        <h1 class="text-4xl md:text-6xl font-bold mb-6 text-center">Meet the Team</h1>
        <p class="text-gray-400 text-lg max-w-2xl text-center mb-16 leading-relaxed">
            Driving the architectural vision of MedixAR, orchestrating the integration of 3D WebXR components with modern frontend design paradigms.
        </p>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl w-full relative z-10 items-stretch">
            <!-- Anurag Yadav -->
            <div class="glass-panel p-10 rounded-3xl flex flex-col items-center text-center relative group hover:border-teal-500/30 transition-all duration-500">
                <div class="w-32 h-32 rounded-full bg-gradient-to-tr from-teal-500 to-emerald-400 p-1 mb-6 relative shadow-[0_0_20px_rgba(45,212,191,0.3)] group-hover:scale-105 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] overflow-hidden">
                        <img src="{{ asset('img/anurag.jpg') }}?v={{ time() }}" alt="Anurag Yadav" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-2xl font-bold mb-2">Anurag Yadav</h3>
                <p class="text-sm font-bold text-emerald-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-300 text-sm leading-relaxed mb-6">
                    Specializing in robust backend architecture and ensuring seamless database integration for user progress tracking.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://www.linkedin.com/in/anurag-yv/" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#0077b5] transition-all text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <!-- Gomit Saha (Leader Card) -->
            <div class="glass-panel p-10 rounded-3xl flex flex-col items-center text-center relative md:-translate-y-4 z-20 group border-teal-500/40 border-2 shadow-[0_0_30px_rgba(45,212,191,0.15)] transition-all duration-500">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 py-1 bg-gradient-to-r from-teal-400 to-emerald-400 text-[#050b09] font-bold text-xs rounded-full uppercase tracking-widest shadow-lg">
                    Project Leader
                </div>
                <div class="w-40 h-40 rounded-full bg-gradient-to-tr from-teal-400 to-emerald-400 p-1 mb-6 relative shadow-[0_0_25px_rgba(45,212,191,0.5)] group-hover:scale-105 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] overflow-hidden">
                        <img src="{{ asset('img/gomit.png') }}?v={{ time() }}" alt="Gomit Saha" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-2">Gomit Saha</h3>
                <p class="text-sm font-bold text-teal-400 uppercase tracking-widest mb-4">Lead Developer & Visionary</p>
                <p class="text-gray-300 text-base leading-relaxed mb-6">
                    Driving the architectural vision of MedixAR, orchestrating the integration of 3D WebXR components with modern frontend design paradigms.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://github.com/Gomit-Dev" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-gray-800 transition-all text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/gomit-saha" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#0077b5] transition-all text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>

            <div class="glass-panel p-10 rounded-3xl flex flex-col items-center text-center relative md:-translate-y-4 z-20 group border-teal-500/40 border-2 shadow-[0_0_30px_rgba(45,212,191,0.15)] transition-all duration-500">
                <div class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 px-4 py-1 bg-gradient-to-r from-teal-400 to-emerald-400 text-[#050b09] font-bold text-xs rounded-full uppercase tracking-widest shadow-lg">
                    Core Developer
                </div>
                <div class="w-40 h-40 rounded-full bg-gradient-to-tr from-teal-400 to-emerald-400 p-1 mb-6 relative shadow-[0_0_25px_rgba(45,212,191,0.5)] group-hover:scale-105 transition-all duration-500">
                    <div class="w-full h-full rounded-full bg-[#050b09] overflow-hidden">
                        <img src="{{ asset('img/pranav.png') }}?v={{ time() }}" alt="Gomit Saha" class="w-full h-full object-cover">
                    </div>
                </div>
                <h3 class="text-3xl font-bold mb-2">Pranav Gaira</h3>
                <p class="text-sm font-bold text-teal-400 uppercase tracking-widest mb-4">Core Developer</p>
                <p class="text-gray-300 text-base leading-relaxed mb-6">
                          Focused on crafting responsive frontend UI components and ensuring the platform delivers a premium, glitch-free user experience.
                </p>
                <div class="flex gap-4 mt-auto">
                    <a href="https://github.com/pranav045" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-gray-800 transition-all text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/pranav-gaira" target="_blank" class="w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-[#0077b5] transition-all text-white hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                    </a>
                </div>
            </div>
            <!-- Pranav Gaira -->

    </div>
@endsection
