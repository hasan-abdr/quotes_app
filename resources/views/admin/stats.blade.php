<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h2 class="font-bold text-gray-800">Statistics</h2>
        </div>
    </x-slot>

    <div class="w-full space-y-8">
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

        <div>
            <div class="flex items-center gap-2 mb-4">
                <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
                <h3 class="font-bold text-gray-800">Top 5 Users</h3>
            </div>

            <div class="bg-white rounded-2xl shadow-sm divide-y divide-gray-100">
                @forelse ($topUsers as $user)
                    <div class="flex items-center justify-between px-6 py-4">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-full bg-blue-50 text-blue-600 text-sm font-bold flex items-center justify-center">
                                {{ $loop->iteration }}
                            </span>
                            <span class="font-semibold text-gray-800">{{ $user->name }}</span>
                        </div>
                        <span class="text-sm font-bold text-blue-600">{{ $user->quotes_count }} Quotes</span>
                    </div>
                @empty
                    <div class="px-6 py-10 text-center text-gray-500">No user data with quotes available yet.</div>
                @endforelse
            </div>
        </div>
    </div>
</x-app-layout>
