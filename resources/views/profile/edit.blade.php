<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-600 min-h-screen">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Update Profile -->
            <div class="p-8 bg-white/20 backdrop-blur-lg rounded-xl border border-white/30 shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-4 text-white">Update Profile</h3>
                @include('profile.partials.update-profile-information-form')
            </div>

            <!-- Update Password -->
            <div class="p-8 bg-white/20 backdrop-blur-lg rounded-xl border border-white/30 shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-4 text-white">Ganti Password</h3>
                @include('profile.partials.update-password-form')
            </div>

            <!-- Delete User -->
            <div class="p-8 bg-red-600/20 backdrop-blur-lg rounded-xl border border-red-400/30 shadow-lg hover:scale-105 transition">
                <h3 class="text-xl font-semibold mb-4 text-white">Hapus Akun</h3>
                @include('profile.partials.delete-user-form')
            </div>

        </div>
    </div>
</x-app-layout>
