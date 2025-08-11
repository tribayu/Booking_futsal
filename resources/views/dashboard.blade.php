<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-white">
            Selamat Datang, futsal! 👋
        </h2>
        <p class="text-white/80">Kamu berhasil login ke sistem booking futsal.</p>
    </x-slot>

    <div class="py-8 bg-gradient-to-br from-indigo-600 via-purple-600 to-blue-600 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            <!-- Info Cards -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                <!-- Total Booking -->
                <div class="p-6 rounded-xl bg-gradient-to-r from-purple-500 to-pink-500 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="bg-white/30 p-3 rounded-full">
                            📅
                        </div>
                        <div>
                            <p class="text-white text-lg">Total Booking</p>
                            <p class="text-4xl font-bold text-green-300">{{ $totalBooking }}</p>
                        </div>
                    </div>
                </div>

                <!-- Lapangan Tersedia -->
                <div class="p-6 rounded-xl bg-gradient-to-r from-blue-500 to-cyan-500 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="bg-white/30 p-3 rounded-full">
                            🏟️
                        </div>
                        <div>
                            <p class="text-white text-lg">Lapangan Tersedia</p>
                            <p class="text-4xl font-bold text-yellow-300">{{ $lapanganTersedia }}</p>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="p-6 rounded-xl bg-gradient-to-r from-green-500 to-emerald-500 shadow-lg transform hover:-translate-y-1 transition-all">
                    <div class="flex items-center gap-4">
                        <div class="bg-white/30 p-3 rounded-full">
                            ✅
                        </div>
                        <div>
                            <p class="text-white text-lg">Status</p>
                            <p class="text-4xl font-bold text-cyan-200">Aktif</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Booking Terbaru -->
            <div class="bg-white/20 backdrop-blur-lg p-6 rounded-xl shadow-xl">
                <h3 class="text-white text-xl font-semibold mb-4">Booking Terbaru</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-left text-white">
                        <thead>
                            <tr class="border-b border-white/30">
                                <th class="py-2 px-4">Lapangan</th>
                                <th class="py-2 px-4">Tanggal</th>
                                <th class="py-2 px-4">Jam</th>
                                <th class="py-2 px-4">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookingTerbaru as $booking)
                                <tr class="border-b border-white/10 hover:bg-white/10 transition">
                                    <td class="py-2 px-4">{{ $booking->lapangan }}</td>
                                    <td class="py-2 px-4">{{ $booking->tanggal }}</td>
                                    <td class="py-2 px-4">{{ $booking->jam }}</td>
                                    <td class="py-2 px-4">
                                        @if ($booking->status == 'Diterima')
                                            <span class="px-3 py-1 rounded-full bg-green-500/70 text-white text-sm">Diterima</span>
                                        @elseif ($booking->status == 'Pending')
                                            <span class="px-3 py-1 rounded-full bg-yellow-500/70 text-white text-sm">Pending</span>
                                        @else
                                            <span class="px-3 py-1 rounded-full bg-red-500/70 text-white text-sm">{{ $booking->status }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
