<!-- resources/views/profile/edit.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="text-2xl font-bold text-gray-800">
            Profil Saya
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <!-- Card Profil -->
            <div class="bg-white shadow-lg rounded-2xl overflow-hidden transform hover:scale-[1.01] transition-all duration-300">
                <div class="flex flex-col md:flex-row">
                    <!-- Foto Profil -->
                    <div class="flex justify-center items-center bg-gradient-to-br from-blue-500 to-indigo-500 p-6">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=random"
                             alt="Foto Profil"
                             class="w-28 h-28 rounded-full border-4 border-white shadow-md">
                    </div>

                    <!-- Detail Profil -->
                    <div class="flex-1 p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Nama Lengkap</h3>
                            <p class="text-gray-500">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Email</h3>
                            <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Tanggal Dibuat</h3>
                            <p class="text-gray-500">{{ Auth::user()->created_at->format('d M Y') }}</p>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-700">Terakhir Diperbarui</h3>
                            <p class="text-gray-500">{{ Auth::user()->updated_at->diffForHumans() }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tombol Edit -->
            <div class="mt-6 text-right">
                <a href="{{ route('profile.edit') }}"
                   class="px-6 py-2 bg-indigo-600 text-white font-semibold rounded-lg shadow-md hover:bg-indigo-700 transition">
                    ✏️ Edit Profil
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
