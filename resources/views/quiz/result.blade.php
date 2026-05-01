<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Results | MedixAR</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(5, 11, 9, 0.7); backdrop-filter: blur(24px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .glass-panel { background: rgba(10, 25, 22, 0.45); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.08); }
        .result-card { background: rgba(255, 255, 255, 0.03); border: 1px solid rgba(255,255,255,0.05); transition: all 0.3s ease; }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30 pb-20">

    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[0%] right-[0%] w-[40vw] h-[40vw] rounded-full bg-teal-900/15 blur-[120px] mix-blend-screen"></div>
        <div class="absolute bottom-[0%] left-[0%] w-[50vw] h-[50vw] rounded-full bg-emerald-900/10 blur-[150px] mix-blend-screen"></div>
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-7xl mx-auto flex items-center justify-between">
            <a href="/" class="flex items-center gap-3 group">
                <span class="text-xl font-bold tracking-widest text-white">Medix<span class="text-teal-400">AR</span></span>
            </a>
            <div class="flex items-center gap-6">
                <a href="/quiz" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">All Quizzes</a>
                <a href="/dashboard" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Dashboard</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow max-w-4xl w-full mx-auto px-6 pt-10 flex flex-col gap-10">

        <header class="text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Quiz <span class="text-teal-400">Results</span></h1>
            <div class="glass-panel inline-block px-10 py-6 rounded-3xl shadow-2xl border-teal-500/30">
                <p class="text-gray-400 text-sm uppercase tracking-widest mb-1">Your Score</p>
                <div class="text-6xl font-black text-white">
                    {{ $score }}<span class="text-teal-500/50">/</span>{{ $total }}
                </div>
                @php
                    $percentage = ($score / $total) * 100;
                    $rank = $percentage >= 80 ? 'Master' : ($percentage >= 50 ? 'Learner' : 'Beginner');
                    $color = $percentage >= 80 ? 'text-emerald-400' : ($percentage >= 50 ? 'text-teal-400' : 'text-amber-400');
                @endphp
                <p class="mt-4 font-bold uppercase tracking-tighter {{ $color }}">{{ $rank }} Level Achievement</p>
            </div>
        </header>

        <div class="space-y-6">
            <h2 class="text-2xl font-bold border-b border-white/10 pb-4">Detailed Review</h2>
            @foreach($results as $index => $res)
            <div class="glass-panel p-6 rounded-2xl relative overflow-hidden {{ $res['is_correct'] ? 'border-emerald-500/20' : 'border-red-500/20' }}">
                <div class="flex items-start gap-4">
                    <div class="w-8 h-8 rounded-full flex-shrink-0 flex items-center justify-center font-bold {{ $res['is_correct'] ? 'bg-emerald-500 text-black' : 'bg-red-500 text-white' }}">
                        {{ $index + 1 }}
                    </div>
                    <div class="flex-grow">
                        <h3 class="text-lg font-semibold mb-4">{{ $res['question'] }}</h3>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                            @foreach($res['options'] as $option)
                                @php
                                    $isUserChoice = $option == $res['user_answer'];
                                    $isCorrectAnswer = $option == $res['correct_answer'];
                                    $bgClass = 'bg-white/5';
                                    $borderClass = 'border-white/10';
                                    $textClass = 'text-gray-400';
                                    
                                    if ($isCorrectAnswer) {
                                        $bgClass = 'bg-emerald-500/20';
                                        $borderClass = 'border-emerald-500/50';
                                        $textClass = 'text-emerald-400 font-bold';
                                    } elseif ($isUserChoice && !$res['is_correct']) {
                                        $bgClass = 'bg-red-500/20';
                                        $borderClass = 'border-red-500/50';
                                        $textClass = 'text-red-400 font-bold';
                                    }
                                @endphp
                                <div class="px-4 py-3 rounded-xl border {{ $bgClass }} {{ $borderClass }} {{ $textClass }} text-sm flex justify-between items-center">
                                    <span>{{ $option }}</span>
                                    @if($isCorrectAnswer)
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/></svg>
                                    @elseif($isUserChoice && !$res['is_correct'])
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="flex justify-center gap-4 mt-4">
            <a href="/quiz" class="px-8 py-4 rounded-full bg-white/10 hover:bg-white/20 font-bold transition">Back to Quizzes</a>
            <a href="/dashboard" class="px-8 py-4 rounded-full bg-teal-500 text-black font-bold hover:bg-teal-400 transition shadow-lg shadow-teal-500/20">Go to Dashboard</a>
        </div>

    </main>

</body>
</html>
