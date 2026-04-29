<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $quiz->title }} | MedixAR</title>
    @vite(['resources/css/app.css'])
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Outfit', sans-serif; }
        .glass-nav { background: rgba(5, 11, 9, 0.7); backdrop-filter: blur(24px); border-bottom: 1px solid rgba(255,255,255,0.05); }
        .glass-panel { background: rgba(10, 25, 22, 0.45); backdrop-filter: blur(24px); border: 1px solid rgba(255,255,255,0.08); }
        
        .quiz-option {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.2s ease;
            cursor: pointer;
        }
        .quiz-option:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }
        input[type="radio"]:checked + .quiz-option {
            background: rgba(20, 184, 166, 0.2);
            border-color: rgba(20, 184, 166, 0.5);
            box-shadow: inset 0 0 20px rgba(20, 184, 166, 0.1);
        }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30">

    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[30%] left-[50%] -translate-x-1/2 w-[50vw] h-[50vw] rounded-full bg-teal-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-5 blur-xl mix-blend-screen">
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] flex-shrink-0">
        <div class="h-full px-6 flex items-center justify-between max-w-5xl mx-auto">
            <a href="{{ route('quiz') }}" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                <span class="font-semibold text-sm">Back to Quizzes</span>
            </a>
            <div class="flex items-center gap-4">
                <div class="px-4 py-1.5 rounded-full bg-teal-500/10 border border-teal-500/20 text-teal-400 text-xs font-bold tracking-widest flex items-center gap-2">
                    {{ $quiz->category }}
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex flex-col items-center p-6">
        
        <div class="w-full max-w-3xl mb-8 mt-4 text-center">
            <h1 class="text-3xl font-bold">{{ $quiz->title }}</h1>
            <p class="text-gray-400 mt-2">{{ $quiz->description }}</p>
        </div>

        <form action="{{ route('quiz.submit', $quiz->id) }}" method="POST" class="w-full max-w-3xl space-y-8">
            @csrf
            
            @foreach($quiz->questions as $index => $question)
            <div class="glass-panel p-8 md:p-10 rounded-3xl relative overflow-hidden shadow-2xl">
                <div class="mb-8 flex justify-between items-end border-b border-white/10 pb-4">
                    <h2 class="text-xl font-bold text-teal-500 tracking-widest uppercase">Question {{ $index + 1 }}</h2>
                </div>

                <div class="mb-8">
                    <h3 class="text-xl md:text-2xl font-medium leading-relaxed">
                        {{ $question->question_text }}
                    </h3>
                </div>

                <div class="space-y-4">
                    @foreach($question->options as $optIndex => $option)
                    <label class="block cursor-pointer">
                        <input type="radio" name="answers[{{ $question->id }}]" value="{{ $option }}" class="hidden" required>
                        <div class="quiz-option w-full text-left p-5 rounded-2xl flex items-center gap-4 group">
                            <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-sm font-bold text-gray-400 group-hover:border-white/50 transition">
                                {{ chr(65 + $optIndex) }}
                            </div>
                            <span class="font-medium text-lg">{{ $option }}</span>
                        </div>
                    </label>
                    @endforeach
                </div>
            </div>
            @endforeach

            <div class="flex justify-end pt-4 pb-20">
                <button type="submit" class="px-8 py-4 rounded-full font-bold text-xl text-[#040d0a] bg-gradient-to-r from-teal-500 to-emerald-400 hover:from-teal-400 hover:to-emerald-300 transition-all shadow-[0_0_20px_rgba(20,184,166,0.3)]">
                    Submit Quiz
                </button>
            </div>
        </form>

    </main>

</body>
</html>
