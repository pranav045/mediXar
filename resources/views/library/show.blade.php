<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $material->title }} | MedixAR Library</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(5, 11, 9, 0.7); backdrop-filter: blur(24px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .glass-panel { background: rgba(10, 25, 22, 0.45); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.08); }
        .article-content { line-height: 1.8; color: rgba(255,255,255,0.8); }
        .article-content h2 { color: white; font-size: 1.5rem; font-weight: 700; margin-top: 2rem; margin-bottom: 1rem; }
        .article-content p { margin-bottom: 1.5rem; }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-emerald-500/30">

    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-[50vh] bg-gradient-to-b from-emerald-900/20 to-transparent"></div>
    </div>

    <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-5xl mx-auto flex items-center justify-between">
            <a href="{{ route('dashboard') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                <span class="font-medium">Back to Dashboard</span>
            </a>
            <div class="text-xs font-bold uppercase tracking-widest text-emerald-500">{{ $material->category }}</div>
        </div>
    </nav>

    <main class="flex-grow max-w-4xl w-full mx-auto px-6 py-12">
        <header class="mb-12">
            <div class="flex items-center gap-4 mb-6 text-sm text-gray-400">
                <span class="flex items-center gap-2"><svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg> {{ $material->read_time }} min read</span>
                <span>•</span>
                <span>Published on {{ $material->created_at->format('M d, Y') }}</span>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-6 leading-tight">{{ $material->title }}</h1>
            <p class="text-xl text-gray-400 leading-relaxed">{{ $material->description }}</p>
        </header>

        <div class="w-full h-80 md:h-[500px] rounded-3xl overflow-hidden mb-12 border border-white/10 shadow-2xl">
            <img src="{{ asset('storage/'.$material->thumbnail) }}" class="w-full h-full object-cover">
        </div>

        <article class="article-content text-lg">
            {!! nl2br(e($material->content)) !!}
        </article>

        <div class="mt-20 pt-10 border-t border-white/10 flex flex-col items-center text-center">
            <div class="w-16 h-16 rounded-full bg-emerald-500/20 flex items-center justify-center text-emerald-400 mb-6">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
            </div>
            <h3 class="text-xl font-bold mb-2">You've finished the article!</h3>
            <p class="text-gray-400 mb-8">Want to test your knowledge on this topic?</p>
            <a href="{{ route('quiz') }}" class="px-8 py-4 rounded-full bg-emerald-500 text-black font-bold hover:bg-emerald-400 transition shadow-lg shadow-emerald-500/20">
                Take a Quiz →
            </a>
        </div>
    </main>

    <footer class="py-12 border-t border-white/5 text-center text-gray-500 text-sm">
        <p>&copy; 2026 MedixAR. All rights reserved for biomedical education.</p>
    </footer>

</body>
</html>
