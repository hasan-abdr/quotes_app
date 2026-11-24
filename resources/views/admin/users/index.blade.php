<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h2 class="font-bold text-gray-800">Users</h2>
        </div>
    </x-slot>

    <div class="w-full">
        <div class="bg-white rounded-2xl shadow-sm overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left">
                    <thead class="bg-gray-50 text-gray-400 uppercase text-xs tracking-wider">
                        <tr>
                            <th class="px-6 py-4 font-semibold">No</th>
                            <th class="px-6 py-4 font-semibold">Name</th>
                            <th class="px-6 py-4 font-semibold">Email</th>
                            <th class="px-6 py-4 font-semibold">Role</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @forelse ($users as $akuns)
                            @if ($akuns->usertype === 'user')
                                <tr class="hover:bg-gray-50/70 transition-colors">
                                    <td class="px-6 py-4 text-gray-400">{{ $loop->iteration }}</td>
                                    <td class="px-6 py-4 font-semibold text-gray-800">{{ $akuns->name }}</td>
                                    <td class="px-6 py-4 text-gray-500">{{ $akuns->email }}</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-block bg-blue-50 text-blue-600 text-xs font-semibold px-2.5 py-1 rounded-md">
                                            {{ ucfirst($akuns->usertype) }}
                                        </span>
                                    </td>
                                </tr>
                            @endif
                        @empty
                            <tr>
                                <td colspan="4" class="text-center px-6 py-10 text-gray-500">No users found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
