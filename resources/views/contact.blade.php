<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact | MedixAR</title>

@vite(['resources/css/app.css'])

<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>
body { font-family: 'Outfit', sans-serif; }

.glass-panel {
    background: rgba(10, 25, 22, 0.45);
    backdrop-filter: blur(24px);
    border: 1px solid rgba(255,255,255,0.08);
}
</style>
</head>

<body class="bg-[#050b09] min-h-screen flex items-center justify-center text-white overflow-hidden">


<div class="absolute inset-0 -z-10">
    <img src="{{ Vite::asset('resources/img/image.png') }}"
         class="w-full h-full object-cover opacity-20 blur-sm">
</div>


<div class="w-full flex items-center justify-center px-6 py-8">

    
    <div class="w-full max-w-6xl max-h-[90vh]">

        
        <div class="glass-panel w-full h-full rounded-3xl flex flex-col lg:flex-row overflow-hidden">

            
            <div class="lg:w-[70%] p-10 sm:p-14 md:p-16 flex flex-col justify-between border-r border-white/10">

                <div>
                    <h1 class="text-4xl md:text-6xl font-semibold mb-6">
                        Get in Touch
                    </h1>

                    <p class="text-gray-300 text-lg leading-relaxed max-w-xl">
                        Have questions about our anatomy platform? Whether you need technical support,
                        have feedback on our 3D models, or want to explore partnership opportunities,
                        we’d love to hear from you.
                    </p>

                    <div class="mt-8 flex items-center gap-3 text-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 opacity-70" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8"/>
                            <rect stroke-linecap="round" stroke-linejoin="round" x="3" y="4" width="18" height="16" rx="2"/>
                        </svg>
                        Support & Inquiries
                    </div>
                </div>

                
                <div>
                    <p class="text-sm text-gray-400 mb-4">CONNECT WITH ME</p>

                    <div class="flex gap-4">

                        
                        <a href="#" class="w-10 h-10 rounded-full p-2 border border-white/20 flex items-center justify-center hover:bg-white/10 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2a10 10 0 100 20 10 10 0 000-20z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2 12h20"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c3 3 3 17 0 20"/>
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 2c-3 3-3 17 0 20"/>
                            </svg>
                        </a>

                        
                        <a href="#" class="w-10 h-10 rounded-full p-2 border border-white/20 flex items-center justify-center hover:bg-white/10 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 12a10 10 0 10-11.5 9.9v-7H8v-3h2.5V9.5c0-2.5 1.5-4 3.8-4 1.1 0 2.2.2 2.2.2v2.5h-1.2c-1.2 0-1.6.7-1.6 1.5V12H16l-.4 3h-2.3v7A10 10 0 0022 12z"/>
                            </svg>
                        </a>

                        
                        <a href="#" class="w-10 h-10 rounded-full p-2 border border-white/20 flex items-center justify-center hover:bg-white/10 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-gray-300" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 5.8c-.7.3-1.5.6-2.3.7.8-.5 1.4-1.3 1.7-2.3-.8.5-1.6.9-2.6 1.1A4.1 4.1 0 0015.5 4c-2.3 0-4.1 2-3.6 4.2A11.7 11.7 0 013 5.1a4.1 4.1 0 001.3 5.5c-.6 0-1.2-.2-1.7-.5 0 2 1.4 3.7 3.3 4.1-.6.2-1.2.2-1.8.1.5 1.7 2.1 3 3.9 3A8.3 8.3 0 012 19.5 11.7 11.7 0 008.3 21c7.6 0 11.8-6.4 11.5-12.2.8-.6 1.5-1.3 2.2-2.1z"/>
                            </svg>
                        </a>

                    </div>
                </div>

            </div>

            
            <div class="lg:w-[30%] p-10 sm:p-12 flex flex-col justify-center bg-black/20">

                <h2 class="text-2xl font-semibold mb-2">Send a Message</h2>
                <p class="text-gray-400 text-sm mb-6">
                    Fill out the form below and I'll get back to you shortly.
                </p>

                @if(session('success'))
                    <div class="mb-6 p-4 rounded-xl bg-teal-500/10 border border-teal-500/20 text-teal-200 text-sm">
                        {{ session('success') }}
                    </div>
                @endif
                @if(session('error'))
                    <div class="mb-6 p-4 rounded-xl bg-red-500/10 border border-red-500/20 text-red-200 text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="/contact" class="space-y-4">
                    @csrf

                    <div>
                        <label class="text-xs text-gray-400 uppercase">Name</label>
                        <input type="text" name="name" required placeholder="John Doe"
                            class="mt-1 w-full bg-transparent border border-white/20 rounded-full px-4 py-3 outline-none">
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase">Email</label>
                        <input type="email" name="email" required placeholder="john@example.com"
                            class="mt-1 w-full bg-transparent border border-white/20 rounded-full px-4 py-3 outline-none">
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase">Subject</label>
                        <input type="text" name="subject" required placeholder="How can I help you?"
                            class="mt-1 w-full bg-transparent border border-white/20 rounded-full px-4 py-3 outline-none">
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase">Message</label>
                        <textarea rows="4" name="message" required placeholder="Tell me about your problem..."
                            class="mt-1 w-full bg-transparent border border-white/20 rounded-lg px-4 py-3 outline-none resize-none"></textarea>
                    </div>

                    <button type="submit" class="mt-4 flex items-center gap-2 text-white font-medium hover:text-teal-300 transition">
                        Send Message →
                    </button>

                </form>

            </div>

        </div>
    </div>
</div>
</body>
</html>