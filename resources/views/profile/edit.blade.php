<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-2">
            <span class="w-1 h-5 bg-blue-600 rounded-full"></span>
            <h2 class="font-bold text-gray-800">Settings</h2>
        </div>
    </x-slot>

    <div class="w-full space-y-6">
        <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
            @include('profile.partials.update-profile-information-form')
        </div>

        <div class="bg-white rounded-2xl shadow-sm p-6 sm:p-8">
            @include('profile.partials.update-password-form')
        </div>

        <div class="bg-white border-l-4 border-red-500 rounded-2xl shadow-sm p-6 sm:p-8">
            @include('profile.partials.delete-user-form')
        </div>
    </div>
</x-app-layout>
