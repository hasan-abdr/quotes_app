<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <div class="flex items-center gap-2">
                <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
                <h2 class="font-bold text-gray-800">My Quote</h2>
            </div>

            <a href="{{ route('quotes.create') }}"
               class="inline-flex items-center gap-2 bg-blue-600 hover:bg-blue-700 text-white font-bold px-5 py-2.5 rounded-xl shadow-sm transition-colors">
                <i data-lucide="plus" class="w-4 h-4"></i>
                Add Quote
            </a>
        </div>
    </x-slot>

    <div class="w-full">
        @if ($quotes->count() > 0)
            <div class="space-y-4">
                @foreach ($quotes as $quote)
                    <div class="w-full bg-white border-l-4 border-blue-600 rounded-2xl shadow-sm hover:shadow-md transition-shadow p-6 flex items-start justify-between gap-4">
                        <p class="flex-1 min-w-0 text-blue-600 font-bold italic break-words">
                            "{{ $quote->content }}"
                        </p>

                        <div class="shrink-0 flex items-center gap-2">
                            <a href="{{ route('quotes.edit', $quote->id) }}"
                               class="inline-flex items-center gap-1.5 bg-[#FFD700] hover:bg-yellow-400 text-[#0f2c59] font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                                <i data-lucide="pencil" class="w-3.5 h-3.5"></i>
                                Edit
                            </a>
                            <form method="POST" action="{{ route('quotes.destroy', $quote->id) }}"
                                  onsubmit="return confirm('Are you sure you want to delete this quote?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="inline-flex items-center gap-1.5 bg-red-500 hover:bg-red-600 text-white font-bold text-sm px-4 py-2 rounded-lg transition-colors">
                                    <i data-lucide="trash-2" class="w-3.5 h-3.5"></i>
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 pb-6">
                {{ $quotes->links() }}
            </div>
        @else
            <div class="bg-white rounded-2xl shadow-sm p-12 text-center">
                <i data-lucide="quote" class="w-10 h-10 text-gray-300 mx-auto mb-4"></i>
                <p class="text-gray-500 mb-4">You haven't added any quotes yet.</p>
                <a href="{{ route('quotes.create') }}"
                   class="inline-flex items-center gap-2 text-[#0f2c59] font-bold hover:underline">
                    <i data-lucide="plus" class="w-4 h-4"></i>
                    Add now
                </a>
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