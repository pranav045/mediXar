<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomy Quiz | MedixAR</title>
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
        }
        .quiz-option:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateX(5px);
        }
        .quiz-option.selected {
            background: rgba(20, 184, 166, 0.2);
            border-color: rgba(20, 184, 166, 0.5);
            box-shadow: inset 0 0 20px rgba(20, 184, 166, 0.1);
        }
        .quiz-option.correct {
            background: rgba(16, 185, 129, 0.2);
            border-color: rgba(16, 185, 129, 0.5);
            color: #34d399;
        }
        .quiz-option.wrong {
            background: rgba(239, 68, 68, 0.2);
            border-color: rgba(239, 68, 68, 0.5);
            color: #f87171;
            transform: translateX(0);
            animation: shake 0.4s ease-in-out;
        }

        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            25% { transform: translateX(-5px); }
            50% { transform: translateX(5px); }
            75% { transform: translateX(-5px); }
        }
    </style>
</head>
<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30">

    <!-- Ambient Background -->
    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[30%] left-[50%] -translate-x-1/2 w-[50vw] h-[50vw] rounded-full bg-teal-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-5 blur-xl mix-blend-screen">
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] flex-shrink-0">
        <div class="h-full px-6 flex items-center justify-between max-w-5xl mx-auto">
            <a href="/dashboard" class="flex items-center gap-2 text-gray-400 hover:text-white transition group">
                <svg class="w-5 h-5 group-hover:-translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                <span class="font-semibold text-sm">Back to Dashboard</span>
            </a>
            <div class="flex items-center gap-4">
                <div class="px-4 py-1.5 rounded-full bg-red-500/10 border border-red-500/20 text-red-400 text-xs font-bold tracking-widest flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    04:59
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow flex items-center justify-center p-6">
        
        <div class="w-full max-w-3xl">
            
            <!-- Progress Header -->
            <div class="mb-8">
                <div class="flex justify-between items-end mb-2">
                    <div>
                        <span class="text-xs font-bold text-teal-500 tracking-widest uppercase block mb-1">Nervous System Assessment</span>
                        <h2 class="text-2xl font-bold">Question 4 of 10</h2>
                    </div>
                    <span class="text-sm font-medium text-gray-400">Score: 3/3</span>
                </div>
                <!-- Progress Bar -->
                <div class="w-full h-2 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-gradient-to-r from-teal-500 to-emerald-400 rounded-full" style="width: 40%"></div>
                </div>
            </div>

            <!-- Quiz Card -->
            <div class="glass-panel p-8 md:p-10 rounded-3xl relative overflow-hidden shadow-2xl">
                
                <!-- The Question -->
                <div class="mb-10">
                    <h3 class="text-xl md:text-2xl font-medium leading-relaxed">
                        Which of the following cranial nerves is responsible for transmitting visual information from the retina to the brain?
                    </h3>
                </div>

                <!-- The Options -->
                <div class="space-y-4" id="quiz-options">
                    
                    <button class="quiz-option w-full text-left p-5 rounded-2xl flex items-center gap-4 group" onclick="selectOption(this)">
                        <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-sm font-bold text-gray-400 group-hover:border-white/50 transition">A</div>
                        <span class="font-medium text-lg">Olfactory Nerve (CN I)</span>
                    </button>

                    <button class="quiz-option w-full text-left p-5 rounded-2xl flex items-center gap-4 group" onclick="selectOption(this)">
                        <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-sm font-bold text-gray-400 group-hover:border-white/50 transition">B</div>
                        <span class="font-medium text-lg">Optic Nerve (CN II)</span>
                    </button>

                    <button class="quiz-option w-full text-left p-5 rounded-2xl flex items-center gap-4 group" onclick="selectOption(this)">
                        <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-sm font-bold text-gray-400 group-hover:border-white/50 transition">C</div>
                        <span class="font-medium text-lg">Oculomotor Nerve (CN III)</span>
                    </button>

                    <button class="quiz-option w-full text-left p-5 rounded-2xl flex items-center gap-4 group" onclick="selectOption(this)">
                        <div class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center text-sm font-bold text-gray-400 group-hover:border-white/50 transition">D</div>
                        <span class="font-medium text-lg">Trigeminal Nerve (CN V)</span>
                    </button>

                </div>

                <!-- Footer Actions -->
                <div class="mt-10 pt-6 border-t border-white/10 flex justify-between items-center hidden" id="quiz-actions">
                    <p class="text-sm font-medium" id="feedback-text"></p>
                    <button class="px-8 py-3 rounded-full font-bold text-[#040d0a] bg-white hover:bg-gray-200 transition shadow-lg">
                        Next Question →
                    </button>
                </div>

            </div>

        </div>

    </main>

    <script>
        // Simple client-side quiz interaction logic
        let hasAnswered = false;

        function selectOption(btn) {
            if (hasAnswered) return;
            hasAnswered = true;

            const buttons = document.querySelectorAll('.quiz-option');
            const actions = document.getElementById('quiz-actions');
            const feedbackText = document.getElementById('feedback-text');

            // Find the index or text to determine correctness (Hardcoded for prototype demo)
            const answerText = btn.querySelector('span').innerText;
            
            if (answerText.includes('Optic Nerve')) {
                // Correct
                btn.classList.add('correct');
                feedbackText.innerHTML = '<span class="text-emerald-400 flex items-center gap-2"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg> Correct! Excellent job.</span>';
            } else {
                // Wrong
                btn.classList.add('wrong');
                feedbackText.innerHTML = '<span class="text-red-400 flex items-center gap-2"><svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg> Incorrect.</span>';
                
                // Highlight the correct one
                buttons.forEach(b => {
                    if (b.querySelector('span').innerText.includes('Optic Nerve')) {
                        b.classList.add('correct');
                        b.style.opacity = '0.5';
                    }
                });
            }

            // Disable other buttons
            buttons.forEach(b => {
                b.style.pointerEvents = 'none';
                if (!b.classList.contains('correct') && !b.classList.contains('wrong')) {
                    b.style.opacity = '0.3';
                }
            });

            // Show Next Button
            actions.classList.remove('hidden');
        }
    </script>
</body>
</html>
