<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-gray-800 dark:text-white leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-10 bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Welcome Card -->
            <div class="bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl p-8">
                <h3 class="text-2xl font-semibold mb-2 text-white">
                    Selamat Datang, {{ Auth::user()->name }}!
                </h3>
                <p class="text-indigo-100">
                    Kamu berhasil login ke sistem booking futsal.
                </p>
            </div>

            <!-- Statistic Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl p-8 text-center">
                    <h4 class="text-lg font-bold text-white mb-1">Total Booking</h4>
                    <p class="text-4xl font-extrabold text-green-300">12</p>
                </div>
                <div class="bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl p-8 text-center">
                    <h4 class="text-lg font-bold text-white mb-1">Lapangan Tersedia</h4>
                    <p class="text-4xl font-extrabold text-yellow-300">3</p>
                </div>
                <div class="bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl p-8 text-center">
                    <h4 class="text-lg font-bold text-white mb-1">Status</h4>
                    <p class="text-4xl font-extrabold text-cyan-300">Aktif</p>
                </div>
            </div>

            <!-- Booking Table -->
            <div class="bg-white/20 backdrop-blur-lg border border-white/30 shadow-xl rounded-xl p-8">
                <h4 class="text-xl font-bold mb-4 text-white">Booking Terbaru</h4>
                <div class="overflow-x-auto">
                    <table class="min-w-full text-left text-white">
                        <thead class="border-b border-white/30">
                            <tr>
                                <th class="px-6 py-3">Lapangan</th>
                                <th class="px-6 py-3">Tanggal</th>
                                <th class="px-6 py-3">Jam</th>
                                <th class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-white/20">
                            <tr>
                                <td class="px-6 py-4">Lapangan A</td>
                                <td class="px-6 py-4">2025-08-04</td>
                                <td class="px-6 py-4">10:00 - 12:00</td>
                                <td class="px-6 py-4 text-green-200">Diterima</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4">Lapangan B</td>
                                <td class="px-6 py-4">2025-08-05</td>
                                <td class="px-6 py-4">14:00 - 16:00</td>
                                <td class="px-6 py-4 text-yellow-200">Pending</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
