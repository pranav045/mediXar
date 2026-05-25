@extends('layouts.app')

@section('title', 'Contact Us | MedixAR')

@section('content')
<div class="relative min-h-[calc(100vh-72px)] flex items-center justify-center py-20 px-6">
    <div class="w-full max-w-6xl">
        <div class="glass-panel w-full rounded-3xl flex flex-col lg:flex-row overflow-hidden shadow-2xl">
            <!-- Left Side: Info -->
            <div class="lg:w-[60%] p-10 sm:p-14 md:p-16 flex flex-col justify-between border-r border-white/5 bg-gradient-to-br from-teal-500/5 to-transparent">
                <div>
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-teal-500/10 border border-teal-500/30 text-[10px] font-bold text-teal-300 tracking-widest uppercase mb-8">
                        Support Center
                    </div>
                    <h1 class="text-4xl md:text-6xl font-bold mb-8 leading-tight">
                        Get in <span class="gradient-text">Touch</span>
                    </h1>

                    <p class="text-gray-300 text-lg leading-relaxed max-w-xl font-light">
                        Have questions about our anatomy platform? Whether you need technical support,
                        have feedback on our 3D models, or want to explore partnership opportunities,
                        we’d love to hear from you.
                    </p>

                    <div class="mt-12 space-y-6">
                        <div class="flex items-center gap-4 text-gray-300 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:border-teal-500/50 transition-all">
                                <svg class="w-6 h-6 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-widest">Email Support</p>
                                <p class="text-lg font-medium">support@medixar.com</p>
                            </div>
                        </div>

                        <div class="flex items-center gap-4 text-gray-300 group">
                            <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:border-teal-500/50 transition-all">
                                <svg class="w-6 h-6 text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-gray-500 font-bold uppercase tracking-widest">Headquarters</p>
                                <p class="text-lg font-medium">Medical Innovation Lab, NY</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16 pt-8 border-t border-white/5">
                    <p class="text-xs text-gray-500 font-bold uppercase tracking-widest mb-6">Connect with our developers</p>
                    <div class="flex gap-4">
                        <a href="https://github.com/Gomit-Dev" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-teal-500/50 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/in/gomit-saha" target="_blank" class="w-10 h-10 rounded-xl bg-white/5 border border-white/10 flex items-center justify-center hover:bg-white/10 hover:border-teal-500/50 transition-all">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Side: Form -->
            <div class="lg:w-[40%] p-10 sm:p-14 bg-black/40 flex flex-col justify-center">
                <h2 class="text-2xl font-bold mb-2">Send a Message</h2>
                <p class="text-gray-400 text-sm mb-10 font-light leading-relaxed">
                    Fill out the form below and our team will get back to you within 24 hours.
                </p>

                @if(session('success'))
                    <div class="mb-8 p-4 rounded-2xl bg-teal-500/10 border border-teal-500/20 text-teal-300 text-sm flex items-center gap-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-8 p-4 rounded-2xl bg-red-500/10 border border-red-500/20 text-red-300 text-sm flex items-center gap-3">
                        <svg class="w-5 h-5 flex-shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="/contact" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-[0.2em] mb-2 ml-4">Full Name</label>
                        <input type="text" name="name" required placeholder="Enter your name"
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 outline-none focus:border-teal-500/50 transition-all placeholder:text-gray-600 text-sm">
                    </div>

                    <div>
                        <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-[0.2em] mb-2 ml-4">Email Address</label>
                        <input type="email" name="email" required placeholder="email@example.com"
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 outline-none focus:border-teal-500/50 transition-all placeholder:text-gray-600 text-sm">
                    </div>

                    <div>
                        <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-[0.2em] mb-2 ml-4">Subject</label>
                        <input type="text" name="subject" required placeholder="What is this regarding?"
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 outline-none focus:border-teal-500/50 transition-all placeholder:text-gray-600 text-sm">
                    </div>

                    <div>
                        <label class="block text-[10px] text-gray-500 font-bold uppercase tracking-[0.2em] mb-2 ml-4">Message</label>
                        <textarea rows="4" name="message" required placeholder="Type your message here..."
                            class="w-full bg-white/5 border border-white/10 rounded-2xl px-6 py-4 outline-none focus:border-teal-500/50 transition-all placeholder:text-gray-600 text-sm resize-none"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 rounded-2xl bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 text-[#050b09] font-bold tracking-wide transition-all shadow-[0_10px_20px_rgba(20,184,166,0.2)] hover:-translate-y-1 flex items-center justify-center gap-2">
                        Send Message
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" /></svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection