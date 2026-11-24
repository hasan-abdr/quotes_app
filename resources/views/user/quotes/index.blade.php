<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-3xl text-gray-900 leading-tight">
            Good morning, <span class="text-blue-600">{{ explode(' ', Auth::user()->name)[0] }}</span>
        </h2>
    </x-slot>

    <div class="w-full">
        <div class="flex items-center gap-2 mb-6">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h3 class="font-bold text-gray-800">All Quotes</h3>
        </div>

        <div class="space-y-4">
            @forelse ($quotes as $quote)
                <div class="w-full bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm hover:shadow-md transition-shadow p-6 flex items-start justify-between gap-4">
                    <div class="flex-1 min-w-0">
                        <p class="text-blue-600 font-bold italic mb-2 break-words">
                            "{{ $quote->content }}"
                        </p>
                        <span class="text-gray-400 text-sm">{{ $quote->user->name }}</span>
                    </div>

                    <div class="shrink-0 pt-1">
                        @if ($quote->isLikedBy(auth()->user()))
                            <form method="POST" action="{{ route('quotes.unlike', $quote->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-pink-500 hover:scale-110 transition-transform">
                                    <i data-lucide="heart" class="w-5 h-5" fill="currentColor"></i>
                                </button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('quotes.like', $quote->id) }}">
                                @csrf
                                <button type="submit" class="text-gray-300 hover:text-pink-400 transition-colors">
                                    <i data-lucide="heart" class="w-5 h-5"></i>
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            @empty
                <div class="w-full bg-white rounded-2xl shadow-sm p-12 text-center">
                    <i data-lucide="quote" class="w-10 h-10 text-gray-300 mx-auto mb-4"></i>
                    <p class="text-gray-500">No quotes available yet.</p>
                </div>
            @endforelse
        </div>

        <div class="mt-8 pb-6">
            {{ $quotes->links() }}
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            @if (session('success'))
                Swal.fire({
                    icon: "success",
                    title: "Success!",
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @elseif(session('error'))
                Swal.fire({
                    icon: "error",
                    title: "Error!",
                    text: "{{ session('error') }}",
                    showConfirmButton: false,
                    timer: 2000
                });
            @endif
        </script>
    @endpush
</x-app-layout>
