<div class="font-sans">

    <!-- Mobile top bar -->
    <div class="sm:hidden flex items-center justify-between bg-white border-b border-gray-100 px-4 h-16">
        <a href="{{ route('dashboard') }}" class="text-xl font-extrabold text-blue-600">Quotes App</a>
        <button @click="mobileOpen = ! mobileOpen" class="p-2 rounded-md text-gray-500 hover:bg-gray-100">
            <i data-lucide="menu" class="w-6 h-6"></i>
        </button>
    </div>

    <!-- Sidebar -->
    <aside
        :class="{'translate-x-0': mobileOpen, '-translate-x-full': !mobileOpen}"
        class="fixed sm:translate-x-0 top-0 left-0 z-40 h-screen w-64 bg-white border-r border-gray-100 flex flex-col transition-transform duration-300 ease-in-out">

        <!-- Logo -->
        <div class="h-20 flex items-center px-6 border-b border-gray-100">
            <a href="{{ route('dashboard') }}" class="text-2xl font-extrabold text-blue-600 tracking-tight">
                Quotes App
            </a>
        </div>

        <!-- Nav Links -->
        <nav class="flex-1 px-4 py-6 space-y-1 overflow-y-auto">

            <a href="{{ Auth::user()->usertype === 'admin' ? route('admin.dashboard') : route('quotes.index') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                      {{ request()->routeIs(Auth::user()->usertype === 'admin' ? 'admin.dashboard' : 'quotes.index')
                            ? 'bg-blue-50 text-blue-600'
                            : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                <i data-lucide="layout-dashboard" class="w-5 h-5"></i>
                {{ __('Dashboard') }}
            </a>

            {{-- Admin Links --}}
            @if (Auth::user()->usertype === 'admin')
                <a href="{{ route('admin.quotes.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                          {{ request()->routeIs('admin.quotes.index') ? 'bg-blue-50 text-blue-600' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                    <i data-lucide="book-text" class="w-5 h-5"></i>
                    {{ __('Manage Quotes') }}
                </a>

                <a href="{{ route('admin.users.index') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                          {{ request()->routeIs('admin.users.index') ? 'bg-blue-50 text-blue-600' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                    <i data-lucide="users" class="w-5 h-5"></i>
                    {{ __('Users Login') }}
                </a>

                <a href="{{ route('admin.stats') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                          {{ request()->routeIs('admin.stats') ? 'bg-blue-50 text-blue-600' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                    <i data-lucide="bar-chart-3" class="w-5 h-5"></i>
                    {{ __('Statistics') }}
                </a>
            @endif

            {{-- User Links --}}
            @if (Auth::user()->usertype === 'user')
                <a href="{{ route('quotes.mine') }}"
                   class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                          {{ request()->routeIs('quotes.mine') ? 'bg-blue-50 text-blue-600' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                    <i data-lucide="bookmark" class="w-5 h-5"></i>
                    {{ __('My Quotes') }}
                </a>
            @endif
        </nav>

        <!-- Bottom Links -->
        <div class="px-4 py-6 border-t border-gray-100 space-y-1">
            <a href="{{ route('profile.edit') }}"
               class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm transition-colors
                      {{ request()->routeIs('profile.edit') ? 'bg-blue-50 text-blue-600' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-700' }}">
                <i data-lucide="settings" class="w-5 h-5"></i>
                {{ __('Settings') }}
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-xl font-semibold text-sm text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-colors">
                    <i data-lucide="log-out" class="w-5 h-5"></i>
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </aside>

    <!-- Mobile overlay -->
    <div x-show="mobileOpen" @click="mobileOpen = false" class="fixed inset-0 z-30 bg-black/30 sm:hidden" x-cloak></div>

    <!-- Top User Bar (desktop) -->
    <div class="hidden sm:flex items-center justify-end gap-3 h-20 pl-64 pr-8 bg-[#F5F7F9] border-b border-gray-100">
        <x-dropdown align="right" width="48">
            <x-slot name="trigger">
                <button class="flex items-center gap-3 focus:outline-none">
                    <div class="text-right">
                        <div class="text-sm font-semibold text-gray-800">{{ Auth::user()->name }}</div>
                        <div class="text-xs text-gray-400">{{ Auth::user()->usertype === 'admin' ? 'Admin' : 'User' }}</div>
                    </div>
                    <div class="w-9 h-9 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>
                </button>
            </x-slot>

            <x-slot name="content">
                <x-dropdown-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-dropdown-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </x-slot>
        </x-dropdown>
    </div>
</div>