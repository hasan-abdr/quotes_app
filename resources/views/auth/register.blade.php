<x-guest-layout>
    <div class="flex items-center justify-center min-h-[90vh]">
        <div class="bg-white p-10 md:p-14 rounded-[20px] shadow-sm w-full max-w-lg border border-gray-50">
            
            <div class="text-center mb-10">
                <h1 class="text-4xl font-bold text-gray-900 mb-3">Create Account</h1>
                <p class="text-gray-400 font-medium text-sm">Join and share your best quotes on <strong>Quotes App</strong>!</p>
            </div>

            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <div class="text-left">
                    <label for="name" class="block text-gray-900 font-medium mb-3 text-sm">Full Name</label>
                    <input 
                        id="name" 
                        type="text" 
                        name="name" 
                        value="{{ old('name') }}" 
                        placeholder="John Doe"
                        required 
                        autofocus
                        class="w-full px-6 py-4 bg-[#DFE3E6]/50 border-none rounded-[5px] focus:ring-2 focus:ring-blue-500 transition outline-none text-gray-600 placeholder:text-gray-400 font-regular"
                    >
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="text-left">
                    <label for="email" class="block text-gray-900 font-medium mb-3 text-sm">Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        name="email" 
                        value="{{ old('email') }}" 
                        placeholder="name@example.com"
                        required 
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
                        placeholder="••••••••"
                        required 
                        class="w-full px-6 py-4 bg-[#DFE3E6]/50 border-none rounded-[5px] focus:ring-2 focus:ring-blue-500 transition outline-none text-gray-600 placeholder:text-gray-400 font-regular"
                    >
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <div class="text-left">
                    <label for="password_confirmation" class="block text-gray-900 font-medium mb-3 text-sm">Confirm Password</label>
                    <input 
                        id="password_confirmation" 
                        type="password" 
                        name="password_confirmation" 
                        placeholder="••••••••"
                        required 
                        class="w-full px-6 py-4 bg-[#DFE3E6]/50 border-none rounded-[5px] focus:ring-2 focus:ring-blue-500 transition outline-none text-gray-600 placeholder:text-gray-400 font-regular"
                    >
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <div class="pt-4">
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-5 rounded-[10px] transition shadow-lg shadow-blue-100 text-lg">
                        Register
                    </button>
                </div>

                <div class="text-center text-sm font-medium text-gray-400 mt-8">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-blue-600 font-bold hover:underline ml-1">Login</a>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>