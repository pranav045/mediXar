<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings | MedixAR</title>

    @vite(['resources/css/app.css'])

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { font-family: 'Outfit', sans-serif; }
        
        .glass-nav {
            background: rgba(5, 11, 9, 0.7);
            backdrop-filter: blur(24px);
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        
        .glass-panel {
            background: rgba(10, 25, 22, 0.45);
            backdrop-filter: blur(24px);
            border: 1px solid rgba(255,255,255,0.08);
        }

        .form-input {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
            transition: all 0.3s ease;
        }
        
        .form-input:focus {
            border-color: rgba(45, 212, 191, 0.8);
            background: rgba(0, 0, 0, 0.4);
            outline: none;
        }
    </style>
</head>

<body class="bg-[#050b09] text-white min-h-screen flex flex-col selection:bg-teal-500/30 pb-20">

    <!-- Ambient Background Elements -->
    <div class="fixed inset-0 -z-20 pointer-events-none">
        <div class="absolute top-[10%] left-[20%] w-[30vw] h-[30vw] rounded-full bg-emerald-900/10 blur-[120px] mix-blend-screen"></div>
        <div class="absolute bottom-[20%] right-[10%] w-[40vw] h-[40vw] rounded-full bg-teal-900/10 blur-[150px] mix-blend-screen"></div>
    </div>
    <div class="fixed inset-0 -z-10 pointer-events-none">
        <img src="{{ Vite::asset('resources/img/anatomy_hero_bg.png') }}" class="w-full h-full object-cover opacity-10 blur-xl mix-blend-screen">
    </div>

    <!-- Navbar -->
    <nav class="w-full z-50 glass-nav h-[72px] sticky top-0">
        <div class="h-full px-6 max-w-7xl mx-auto flex items-center justify-between">
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

            <div class="flex items-center gap-6">
                <a href="/anatomy" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">3D Explorer</a>
                <a href="/" class="text-sm font-semibold text-gray-400 hover:text-white transition-colors">Logout</a>
            </div>
        </div>
    </nav>

    <!-- Main Container -->
    <main class="flex-grow max-w-7xl w-full mx-auto px-6 pt-12 flex flex-col lg:flex-row gap-8">

        <!-- Left Sidebar (Settings Navigation) -->
        <aside class="w-full lg:w-[280px] flex-shrink-0">
            
            <div class="mb-8 flex items-center gap-4">
                <div class="w-16 h-16 rounded-full bg-gradient-to-tr from-teal-500 to-emerald-400 p-[2px]">
                    <div class="w-full h-full rounded-full bg-[#050b09] flex items-center justify-center overflow-hidden">
                        <svg class="w-8 h-8 text-teal-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                </div>
                <div>
                    <h2 class="font-bold text-lg">Dr. Jane Doe</h2>
                    <p class="text-xs text-gray-400 font-medium tracking-widest uppercase mt-1">Free Tier</p>
                </div>
            </div>

                <a href="#" class="tab-link active flex items-center gap-3 px-4 py-3 rounded-xl bg-teal-500/20 text-teal-300 font-medium border border-teal-500/30 transition-colors" onclick="switchTab('personal', this)">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                    Personal Details
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-white/5 hover:text-white transition-colors" onclick="switchTab('security', this)">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                    </svg>
                    Security & Password
                </a>
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-white/5 hover:text-white transition-colors" onclick="switchTab('preferences', this)">
                    <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    Preferences
                </a>
            </nav>

        </aside>

        <!-- Right Content Area -->
        <div class="flex-grow space-y-8">

            <!-- Stats Row -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="glass-panel p-6 rounded-2xl border-l-4 border-l-teal-500">
                    <p class="text-gray-400 text-sm font-medium">Models Explored</p>
                    <p class="text-3xl font-bold mt-2">142</p>
                </div>
                <div class="glass-panel p-6 rounded-2xl border-l-4 border-l-emerald-500">
                    <p class="text-gray-400 text-sm font-medium">Quizzes Passed</p>
                    <p class="text-3xl font-bold mt-2">28</p>
                </div>
                <div class="glass-panel p-6 rounded-2xl border-l-4 border-l-cyan-500">
                    <p class="text-gray-400 text-sm font-medium">Study Streak</p>
                    <p class="text-3xl font-bold mt-2">12 <span class="text-lg font-normal text-gray-500">days</span></p>
                </div>
            </div>

            <!-- Tab: Personal Details -->
            <div id="tab-personal" class="tab-content glass-panel p-8 md:p-10 rounded-3xl relative overflow-hidden">
                
                <h3 class="text-2xl font-bold mb-6">Personal Details</h3>
                
                <form class="space-y-6">
                    
                    <!-- Avatar Upload -->
                    <div class="flex items-center gap-6 pb-6 border-b border-white/10">
                        <div class="w-20 h-20 rounded-full bg-black/50 border border-white/20 flex items-center justify-center overflow-hidden relative group cursor-pointer">
                            <svg class="w-8 h-8 text-gray-500 group-hover:text-teal-400 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <div class="absolute inset-0 bg-black/60 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
                                <span class="text-xs font-semibold text-white">Upload</span>
                            </div>
                        </div>
                        <div>
                            <p class="font-medium text-white mb-1">Profile Photo</p>
                            <p class="text-xs text-gray-400">Recommended size: 256x256px. Max 2MB.</p>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">First Name</label>
                            <input type="text" value="Jane" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                        </div>
                        <div>
                            <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Last Name</label>
                            <input type="text" value="Doe" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                        </div>
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Email Address</label>
                        <input type="email" value="jane.doe@university.edu" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Institution / University</label>
                        <input type="text" value="Medical College of Anatomy" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                    </div>

                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Bio / Study Goals</label>
                        <textarea rows="3" class="form-input w-full rounded-xl px-4 py-3 text-sm resize-none">Currently studying for USMLE Step 1. Focusing heavily on neuroanatomy and the cardiovascular system.</textarea>
                    </div>

                    <div class="pt-4 flex justify-end">
                        <button type="button" class="px-8 py-3 rounded-full font-bold text-[#040d0a] bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 transition-all shadow-[0_5px_15px_rgba(20,184,166,0.2)]">
                            Save Changes
                        </button>
                    </div>

                </form>
            </div>

            <!-- Tab: Security & Password -->
            <div id="tab-security" class="tab-content hidden glass-panel p-8 md:p-10 rounded-3xl relative overflow-hidden">
                <h3 class="text-2xl font-bold mb-6">Security & Password</h3>
                <form class="space-y-6">
                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Current Password</label>
                        <input type="password" placeholder="Enter current password" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                    </div>
                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">New Password</label>
                        <input type="password" placeholder="Create new password" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                    </div>
                    <div>
                        <label class="text-xs text-gray-400 uppercase tracking-wider block mb-2">Confirm New Password</label>
                        <input type="password" placeholder="Confirm new password" class="form-input w-full rounded-xl px-4 py-3 text-sm">
                    </div>
                    <div class="pt-4 flex justify-end">
                        <button type="button" class="px-8 py-3 rounded-full font-bold text-[#040d0a] bg-gradient-to-r from-teal-500 to-emerald-500 hover:from-teal-400 hover:to-emerald-400 transition-all shadow-[0_5px_15px_rgba(20,184,166,0.2)]">
                            Update Password
                        </button>
                    </div>
                </form>
            </div>

            <!-- Tab: Preferences -->
            <div id="tab-preferences" class="tab-content hidden glass-panel p-8 md:p-10 rounded-3xl relative overflow-hidden">
                <h3 class="text-2xl font-bold mb-6">Learning Preferences</h3>
                <form class="space-y-6">
                    <div class="flex items-center justify-between pb-6 border-b border-white/10">
                        <div>
                            <p class="font-medium text-white mb-1">High Quality 3D Models</p>
                            <p class="text-xs text-gray-400">Download higher resolution textures (Uses more bandwidth)</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" checked class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-500"></div>
                        </label>
                    </div>
                    <div class="flex items-center justify-between pb-6 border-b border-white/10">
                        <div>
                            <p class="font-medium text-white mb-1">Email Notifications</p>
                            <p class="text-xs text-gray-400">Receive weekly study reminders and progress reports</p>
                        </div>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-700 peer-focus:outline-none rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-teal-500"></div>
                        </label>
                    </div>
                </form>
            </div>

        </div>

    </main>

    <script>
        function switchTab(tabId, element) {
            // Hide all tabs
            document.querySelectorAll('.tab-content').forEach(tab => {
                tab.classList.add('hidden');
            });
            // Show selected tab
            document.getElementById('tab-' + tabId).classList.remove('hidden');

            // Reset all sidebar links styles
            document.querySelectorAll('.tab-link').forEach(link => {
                link.className = 'tab-link flex items-center gap-3 px-4 py-3 rounded-xl text-gray-400 hover:bg-white/5 hover:text-white transition-colors';
            });

            // Set active style for clicked link
            element.className = 'tab-link active flex items-center gap-3 px-4 py-3 rounded-xl bg-teal-500/20 text-teal-300 font-medium border border-teal-500/30 transition-colors';
        }
    </script>
</body>
</html>
