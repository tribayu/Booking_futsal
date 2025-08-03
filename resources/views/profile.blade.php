<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Update Profile Info -->
            <div class="p-8 bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-white">Update Profile</h3>
                    <livewire:profile.update-profile-information-form />
                </div>
            </div>

            <!-- Update Password -->
            <div class="p-8 bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-white">Ganti Password</h3>
                    <livewire:profile.update-password-form />
                </div>
            </div>

            <!-- Delete User -->
            <div class="p-8 bg-red-600/20 backdrop-blur-lg border border-red-400/30 shadow-xl rounded-xl">
                <div class="max-w-2xl mx-auto">
                    <h3 class="text-2xl font-semibold mb-4 text-white">Hapus Akun</h3>
                    <livewire:profile.delete-user-form />
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
