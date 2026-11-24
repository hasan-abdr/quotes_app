<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-gray-900 leading-tight">
            Good morning, <span class="text-blue-600">{{ explode(' ', Auth::user()->name)[0] }}</span>
        </h2>
    </x-slot>

    <div class="w-full space-y-6">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h3 class="font-bold text-gray-800">Dashboard</h3>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="{{ route('quotes.index') }}"
               class="bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm hover:shadow-md transition-shadow p-6 flex items-center justify-between">
                <div>
                    <p class="text-base font-bold text-gray-800">Browse Quotes</p>
                    <p class="text-sm text-gray-400 mt-1">Discover what everyone is sharing.</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i data-lucide="quote" class="w-6 h-6"></i>
                </div>
            </a>

            <a href="{{ route('quotes.mine') }}"
               class="bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm hover:shadow-md transition-shadow p-6 flex items-center justify-between">
                <div>
                    <p class="text-base font-bold text-gray-800">My Quotes</p>
                    <p class="text-sm text-gray-400 mt-1">Manage the quotes you posted.</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i data-lucide="bookmark" class="w-6 h-6"></i>
                </div>
            </a>
        </div>
    </div>
</x-app-layout>
