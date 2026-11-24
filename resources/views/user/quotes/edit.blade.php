<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h2 class="font-bold text-gray-800">Edit Quote</h2>
        </div>
    </x-slot>

    <div class="w-full">
        <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
            <form method="POST" action="{{ route('quotes.update', $quote->id) }}">
                @csrf
                @method('PUT')

                <label for="content" class="block mb-1.5 font-semibold text-sm text-gray-700">Quote content</label>
                <textarea name="content" id="content" rows="5" required
                          class="w-full rounded-xl border-gray-200 bg-gray-50/60 p-4 text-gray-800 placeholder:text-gray-400 shadow-sm focus:border-blue-500 focus:ring-2 focus:ring-blue-500 transition @error('content') border-red-400 @enderror">{{ old('content', $quote->content) }}</textarea>
                @error('content')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror

                <div class="mt-6 flex items-center justify-end gap-3">
                    <a href="{{ route('quotes.mine') }}"
                       class="inline-flex items-center justify-center px-5 py-2.5 bg-gray-100 hover:bg-gray-200 text-gray-600 font-bold text-sm rounded-xl transition-colors">
                        Cancel
                    </a>
                    <button type="submit"
                            class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-blue-600 hover:bg-blue-700 text-white font-bold text-sm rounded-xl shadow-sm transition-colors">
                        <i data-lucide="save" class="w-4 h-4"></i>
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
