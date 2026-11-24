<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Explore - Quotes App</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('storage/images/logo-quotesapp.png') }}">
    <style>
        body { font-family: 'Manrope', sans-serif; }
        .bg-subtle { background-color: #F5F7F9; }
    </style>
</head>
<body class="bg-subtle min-h-screen flex flex-col">

    <nav class="bg-[#F5F7F9] px-12 py-5 flex items-center justify-between shadow-md">
        <div class="text-blue-600 font-extrabold text-2xl tracking-tight">Quotes App</div>
        <div class="hidden md:flex space-x-10 text-gray-500 font-semibold text-md">
            <a href="{{ route('home') }}" class="hover:text-blue-600 transition">Home</a>
            <a href="{{ route('explore') }}" class="text-blue-600 border-b-2 border-blue-600 pb-1 font-bold">Explore</a>
            <a href="{{ route('home') }}#features" class="hover:text-blue-600 transition">Features</a>
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

    <main class="flex-grow container mx-auto px-8 md:px-16 py-16">
        
        <div class="text-center max-w-3xl mx-auto mb-20 py-[100px]">
            <h1 class="text-6xl font-extrabold text-[#111827] mb-6">
                Find your favorite <span class="text-blue-600">quote</span>
            </h1>
            <p class="text-gray-500 text-lg leading-relaxed font-medium">
                Traverse a curated universe of human wisdom, captured in fragments of light and preserved for your inspiration.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 mb-16 mt-[58px]">
            @foreach($quotes as $quote)
            <div class="quote-card group bg-white p-8 rounded-3xl border border-gray-100 hover:border-l-blue-600 hover:border-l-4 shadow-sm hover:shadow-xl transition-all duration-300 cursor-pointer relative hover:scale-105 hover:z-10 {{ $loop->index >= 6 ? 'hidden quote-hidden' : '' }}">
                <p class="text-gray-800 group-hover:text-blue-700 text-xl font-medium group-hover:font-bold mb-12 italic transition-all duration-300">
                    "{{ $quote->content }}"
                </p>
                <div class="flex justify-between items-center">
                    <span class="text-gray-400 text-sm font-semibold group-hover:font-bold transition-all duration-300">{{ $quote->user->name ?? 'Unknown Author' }}</span>
                    <!-- <span class="text-gray-300 text-xl cursor-pointer transition-colors duration-300 hover:text-pink-500">♡</span> -->
                </div>
            </div>
            @endforeach

            @if($quotes->isEmpty())
            <div class="col-span-3 text-center py-10">
                <p class="text-gray-500 text-lg">Belum ada quote yang tersedia.</p>
            </div>
            @endif
        </div>

        @if($quotes->count() > 6)
        <div class="flex justify-center mt-12" id="load-more-container">
            <button id="load-more-btn" class="border-2 border-blue-600 text-blue-600 px-10 py-3 rounded-full font-bold hover:bg-blue-600 hover:text-white transition-all duration-300">
                Load More Wisdom
            </button>
        </div>
        @endif

    </main>

    <footer class="bg-[#F1F5F9] py-16 px-8 md:px-16 border-t border-gray-100 mt-20">
        <div class="max-w-7xl mx-auto grid md:grid-cols-4 gap-12">
            <div class="col-span-1">
                <div class="text-blue-600 font-extrabold text-2xl mb-4 italic">Quotes App</div>
                <p class="text-gray-400 text-sm leading-relaxed">© 2024 Quotes App. The Luminous Archive. Preserving human wisdom through elegant design.</p>
            </div>
            <div>
                <h4 class="font-extrabold text-gray-900 mb-6 text-xs uppercase tracking-widest">Product</h4>
                <ul class="text-gray-400 space-y-4 text-sm font-bold">
                    <li><a href="#" class="hover:text-blue-600 transition">Explore</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Collections</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Pricing</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-extrabold text-gray-900 mb-6 text-xs uppercase tracking-widest">Support</h4>
                <ul class="text-gray-400 space-y-4 text-sm font-bold">
                    <li><a href="#" class="hover:text-blue-600 transition">Terms of Service</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Privacy Policy</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-extrabold text-gray-900 mb-6 text-xs uppercase tracking-widest">Follow Journey</h4>
                <div class="flex space-x-4">
                    <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition cursor-pointer font-bold">𝕏</div>
                    <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition cursor-pointer font-bold">ig</div>
                    <div class="w-10 h-10 bg-gray-100 rounded-xl flex items-center justify-center text-gray-400 hover:bg-blue-600 hover:text-white transition cursor-pointer font-bold">in</div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const loadMoreBtn = document.getElementById('load-more-btn');
            if (loadMoreBtn) {
                loadMoreBtn.addEventListener('click', function() {
                    const hiddenCards = document.querySelectorAll('.quote-hidden');
                    hiddenCards.forEach(card => card.classList.remove('hidden'));
                    document.getElementById('load-more-container').style.display = 'none';
                });
            }
        });
    </script>
</body>
</html>