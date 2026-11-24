<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Quotes App - Where Every Word Finds Its Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Manrope', sans-serif; }
        .hero-gradient {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #6366f1 100%);
        }
        .glass-nav {
            background: rgba(245, 247, 249, 0.7);
            backdrop-filter: blur(24px);
        }
    </style>
</head>
<body class="bg-[#F5F7F9]">

    <nav class="px-12 py-5 flex items-center justify-between sticky top-0 w-full z-50 glass-nav shadow-sm">
        <div class="text-blue-600 font-extrabold text-2xl tracking-tight">Quotes App</div>
        <div class="hidden md:flex space-x-10 text-gray-500 font-semibold text-md">
            <a href="#" class="text-blue-600 border-b-2 border-blue-600 pb-1 font-bold">Home</a>
            <a href="{{ route('explore') }}" class="hover:text-blue-600 transition">Explore</a>
            <a href="#features" class="hover:text-blue-600 transition">Features</a>
            <a href="#" class="hover:text-blue-600 transition">About</a>
        </div>
        <div class="flex items-center space-x-3">
            @auth
                <a href="{{ isset(Auth::user()->role) && Auth::user()->role === 'admin' ? route('admin.dashboard') : route('dashboard') }}" class="inline-block text-center bg-blue-600 text-white px-5 py-2 text-md font-bold rounded-lg hover:bg-blue-700 shadow-md shadow-blue-200 transition-all duration-300">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="inline-block text-center text-blue-600 px-5 py-2 text-md font-bold border border-blue-600 rounded-lg hover:bg-blue-600 hover:text-white transition-all duration-300">Login</a>
                <a href="{{ route('register') }}" class="inline-block text-center bg-blue-600 text-white px-5 py-2 text-md font-bold rounded-lg hover:bg-blue-700 shadow-md shadow-blue-200 transition-all duration-300">Register</a>
            @endauth
        </div>
    </nav>

    <section class="hero-gradient min-h-[800px] flex items-center relative overflow-hidden">
        <div class="w-full px-12 grid lg:grid-cols-2 gap-12 items-center pt-4 pb-20 relative">
            <div class="text-white z-10">
                <h1 class="text-[64px] font-extrabold leading-tight mb-6">Where Every Word<br>Finds Its Home</h1>
                <p class="text-[20px] opacity-80 mb-10 max-w-lg font-light">Curate your personal archive of wisdom. Save, organize, and share the quotes that move you.</p>
                <div class="flex gap-4">
                    <a href="{{ route('login') }}" class="inline-block text-center bg-[#FFD700] text-[#393936] px-8 py-4 rounded-2xl font-extrabold hover:bg-yellow-400 transition shadow-lg text-lg">Get Started Free</a>
                    <a href="{{ route('explore') }}" class="inline-block text-center border-2 border-white/40 glass-card text-white px-8 py-4 rounded-2xl font-bold hover:bg-white/10 transition text-lg">Explore Quotes</a>
                </div>
            </div>
            <div class="relative flex justify-end items-center">
                <img src="{{ asset('assets/images/Image Hero.png') }}" alt="image">
            </div>
            <div class="absolute bottom-[-175px] left-0 w-full z-0 pointer-events-none">
                <img src="{{ asset('assets/images/Bottom Curve Decoration.png') }}" alt="Hero Background" class="w-full h-auto object-cover">
            </div>
        </div>
    </section>

    <section class="pt-[30px] pb-[116px] px-12 bg-[#F5F7F9]">
        <div class="w-full mx-auto">
            <div class="flex justify-between items-end mb-12">
                <div>
                    <p class="text-blue-600 font-bold text-[18px] tracking-widest uppercase mb-2">The Feed</p>
                    <h2 class="text-[36px] font-extrabold text-gray-900">Daily Curator</h2>
                </div>
                <a href="#" class="text-blue-600 font-bold text-[20px] flex items-center gap-2">View All Quotes <span>→</span></a>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="group bg-white p-8 rounded-3xl border border-gray-100 hover:border-l-blue-600 hover:border-l-4 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer relative hover:scale-105 hover:z-10">
                    <p class="text-gray-800 group-hover:text-blue-700 text-xl font-medium group-hover:font-bold mb-12 italic transition-all duration-300">"He who has a why to live for can bear almost any how."</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm font-semibold group-hover:font-bold transition-all duration-300">Friedrich Nietzsche</span>
                        <!-- <span class="text-gray-300 transition-colors duration-300 group-hover:text-pink-500"><i class="fa-regular fa-heart"></i></span> -->
                    </div>
                </div>
                <div class="group bg-white p-8 rounded-3xl border border-gray-100 hover:border-l-blue-600 hover:border-l-4 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer relative hover:scale-105 hover:z-10">
                    <p class="text-gray-800 group-hover:text-blue-700 text-xl font-medium group-hover:font-bold mb-12 italic transition-all duration-300">"The best way to predict your future is to create it."</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm font-semibold group-hover:font-bold transition-all duration-300">Abraham Lincoln</span>
                        <!-- <span class="text-gray-300 transition-colors duration-300 group-hover:text-pink-500"><i class="fa-regular fa-heart"></i></span> -->
                    </div>
                </div>
                <div class="group bg-white p-8 rounded-3xl border border-gray-100 hover:border-l-blue-600 hover:border-l-4 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer relative hover:scale-105 hover:z-10">
                    <p class="text-gray-800 group-hover:text-blue-700 text-xl font-medium group-hover:font-bold mb-12 italic transition-all duration-300">"Software is eating the world, but AI is teaching the world how to eat."</p>
                    <div class="flex justify-between items-center">
                        <span class="text-gray-400 text-sm font-semibold group-hover:font-bold transition-all duration-300">Marc Andreessen</span>
                        <!-- <span class="text-gray-300 transition-colors duration-300 group-hover:text-pink-500"><i class="fa-regular fa-heart"></i></span> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-[116px] bg-[#EEF1F3]" id="features">
        <div class="w-full mx-auto px-12 text-center">
            <h2 class="text-4xl font-extrabold mb-4">The Toolset</h2>
            <p class="text-gray-500 max-w-2xl mx-auto mb-16 text-[20px]">A suite of precision instruments designed to help you capture and cherish every spark of inspiration.</p>
            
            <div class="grid md:grid-cols-4 gap-6">
                <div class="bg-white p-8 rounded-[35px] text-left shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-6 font-bold text-xl"><i class="fa-solid fa-book-open"></i></div>
                    <h3 class="font-bold text-[24px] mb-2">Intelligent Library</h3>
                    <p class="text-gray-400 text-[16px] leading-relaxed">Automatically organize and category search powered by neural analysis.</p>
                </div>
                <div class="bg-white p-8 rounded-[35px] text-left shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-6 font-bold text-xl"><x-lucide-shopping-cart class="w-6 h-6 text-green-500"/></div>
                    <h3 class="font-bold text-[24px] mb-2">Social Sync</h3>
                    <p class="text-gray-400 text-[16px] leading-relaxed">Instantly pull quotes from Kindle, Twitter, and your favorite newsletters.</p>
                </div>
                <div class="bg-white p-8 rounded-[35px] text-left shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-6 font-bold text-xl"><i class="fa-solid fa-wand-magic-sparkles"></i></div>
                    <h3 class="font-bold text-[24px] mb-2">Creator Suite</h3>
                    <p class="text-gray-400 text-[16px] leading-relaxed">Turn text into stunning shareable graphics in just one click.</p>
                </div>
                <div class="bg-white p-8 rounded-[35px] text-left shadow-sm hover:shadow-md transition">
                    <div class="w-12 h-12 bg-yellow-100 text-yellow-600 rounded-full flex items-center justify-center mb-6 font-bold text-xl"><i class="fa-solid fa-chart-pie"></i></div>
                    <h3 class="font-bold text-[24px] mb-2">Deep Insights</h3>
                    <p class="text-gray-400 text-[16px] leading-relaxed">Discover recurring patterns and find thematic connections in your library.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 px-12 bg-[#F5F7F9] text-center">
        <div class="max-w-6xl mx-auto">
            <span class="text-blue-100 text-[200px] block mb-[-200px] font-serif">“</span>
            <h2 class="text-[60px] font-extrabold text-gray-900 leading-tight">
                Words have the power to light <span class="text-blue-600">new paths</span> in the mind.
            </h2>
            <div>
                <p class="text-gray-400 mt-8 text-[24px] max-w-xl mx-auto">We don't just store text; we preserve the sparks of human consciousness that fuel your growth.</p>
            </div>
        </div>
    </section>

    <section class="px-12 mb-20 bg-[#F5F7F9]">
        <div class="w-full mx-auto bg-blue-700 rounded-[50px] p-[116px] text-center text-white relative overflow-hidden">
            <h2 class="text-[60px] font-extrabold mb-6 relative z-10">Ready to start your archive?</h2>
            <p class="opacity-80 mb-10 max-w-xl mx-auto relative z-10 text-[20px]">Join over 50,000 thinkers, writers, and dreamers who use My Quotes App to navigate their intellectual journey.</p>
            <a href="{{ route('login') }}" class="inline-block text-center bg-[#FFD700] text-black px-12 py-4 rounded-2xl font-bold hover:bg-yellow-400 transition relative z-10 text-xl">Join the Movement</a>
            <div class="absolute top-0 right-0 w-64 h-64 bg-white/10 rounded-full -mr-20 -mt-20 blur-3xl"></div>
        </div>
    </section>

    <footer class="bg-[#F1F5F9] py-20 px-12 border-t border-gray-100">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-10">
            <div class="col-span-1">
                <div class="text-blue-600 font-extrabold text-xl mb-6">Quotes App</div>
                <p class="text-gray-400 text-sm leading-relaxed">© 2024 Quotes App. The Luminous Archive. Preserving human wisdom through elegant design and thoughtful technology.</p>
            </div>
            <div>
                <h4 class="font-bold text-sm mb-6">PRODUCT</h4>
                <ul class="text-gray-400 space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-600">Explore</a></li>
                    <li><a href="#" class="hover:text-blue-600">Collections</a></li>
                    <li><a href="#" class="hover:text-blue-600">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-sm mb-6">SUPPORT</h4>
                <ul class="text-gray-400 space-y-4 text-sm">
                    <li><a href="#" class="hover:text-blue-600">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-blue-600">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-blue-600">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold text-sm mb-6">FOLLOW OUR JOURNEY</h4>
                <div class="flex space-x-4">
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition cursor-pointer"><i class="fa-brands fa-x-twitter"></i></div>
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition cursor-pointer"><i class="fa-brands fa-instagram"></i></div>
                    <div class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center text-gray-500 hover:bg-blue-600 hover:text-white transition cursor-pointer"><i class="fa-brands fa-linkedin-in"></i></div>
                </div>
                <p class="text-xs text-gray-400 mt-6 italic">CURATED WITH INTENT IN SAN FRANCISCO. BUILT FOR THE GLOBAL CONSCIOUSNESS.</p>
            </div>
        </div>
    </footer>

</body>
</html>