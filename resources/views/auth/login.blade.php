<x-guest-layout>
    <div class="flex items-center justify-center min-h-[80vh]">
        <div class="bg-white p-10 md:p-14 rounded-[20px] shadow-sm w-full max-w-lg border border-gray-50">
            
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-900 mb-3">Welcome Back</h1>
                <p class="text-gray-400 font-medium text-sm">Log in to your <strong>Quotes App</strong> account</p>
            </div>

            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <div class="text-left">
                    <label for="email" class="block text-gray-900 font-medium mb-3 text-sm">Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="name@archive.com"
                        required 
                        autofocus
                        class="w-full px-6 py-4 bg-[#DFE3E6]/50 border-none rounded-[5px] focus:ring-2 focus:ring-blue-500 transition outline-none text-gray-600 placeholder:text-gray-400 font-regular"
                    >
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="text-left">
                    <label for="password" class="block text-gray-900 font-medium mb-3 text-sm">Password</label>
                    <input 
                        id="password" 
                        type="password" 
                        name="password" 
                        placeholder="********"
                        required 
                        class="w-full px-6 py-4 bg-[#DFE3E6]/50 border-none rounded-[5px] focus:ring-2 focus:ring-blue-500 transition outline-none text-gray-600 placeholder:text-gray-400 font-regular"
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="flex items-center justify-between text-xs px-1">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-blue-600 shadow-sm focus:ring-blue-500" name="remember">
                        <span class="ml-2 text-gray-400 font-medium">Remember me</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="text-blue-600 hover:underline font-medium" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-5 rounded-[10px] transition shadow-lg shadow-blue-100 text-lg">
                        Login
                    </button>
                </div>

                <div class="text-center text-sm font-medium text-gray-400 mt-8">
                    Don't have an account? 
                    <a href="{{ route('register') }}" class="text-blue-600 font-bold hover:underline ml-1">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>