<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h2 class="font-bold text-gray-800">Manage Quotes</h2>
        </div>
    </x-slot>

    <div class="w-full">
        @if ($quotes->count() > 0)
            <div class="space-y-4">
                @foreach ($quotes as $quote)
                    <div class="w-full bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm hover:shadow-md transition-shadow p-6 flex items-start justify-between gap-4">
                        <div class="flex-1 min-w-0">
                            <p class="text-blue-600 font-bold italic mb-2 break-words">
                                "{{ $quote->content }}"
                            </p>
                            <span class="text-gray-400 text-sm">{{ $quote->user->name }}</span>
                        </div>

                        <form method="POST" action="{{ route('admin.quotes.destroy', $quote->id) }}" class="shrink-0">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    onclick="return confirm('Are you sure you want to delete this quote?')"
                                    class="inline-flex items-center gap-1.5 bg-red-500 hover:bg-red-600 text-white font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                                <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                Delete
                            </button>
                        </form>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 pb-6">
                {{ $quotes->links() }}
            </div>
        @else
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <i data-lucide="quote" class="w-10 h-10 text-gray-300 mx-auto mb-4"></i>
                <p class="text-gray-500">No quotes available yet.</p>
            </div>
        @endif
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
            @endif
        </script>
    @endpush
</x-app-layout>
