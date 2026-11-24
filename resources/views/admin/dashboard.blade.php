<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-gray-900 leading-tight">
            Good morning, <span class="text-blue-600">{{ explode(' ', Auth::user()->name)[0] }}</span>
        </h2>
    </x-slot>

    <div class="w-full">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
                <h3 class="font-bold text-gray-800">Overview</h3>
            </div>

            <a href="{{ route('admin.quotes.index') }}"
               class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded-xl shadow-sm transition-colors">
                <i data-lucide="book-text" class="w-4 h-4"></i>
                Manage Quotes
            </a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <div class="bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm p-6 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Quotes</p>
                    <p class="text-3xl font-extrabold text-gray-900 mt-2">{{ $quoteCount }}</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i data-lucide="quote" class="w-6 h-6"></i>
                </div>
            </div>

            <div class="bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm p-6 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Users</p>
                    <p class="text-3xl font-extrabold text-gray-900 mt-2">{{ $userCount }}</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i data-lucide="users" class="w-6 h-6"></i>
                </div>
            </div>

            <div class="bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm p-6 flex items-center justify-between">
                <div>
                    <p class="text-xs font-semibold uppercase tracking-wider text-gray-400">Total Admins</p>
                    <p class="text-3xl font-extrabold text-gray-900 mt-2">{{ $adminCount }}</p>
                </div>
                <div class="w-12 h-12 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center">
                    <i data-lucide="shield-check" class="w-6 h-6"></i>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
