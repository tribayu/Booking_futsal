<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    /**
     * Tampilkan daftar booking user login.
     */
    public function index()
    {
        // Ambil semua booking milik user login
        $bookings = Auth::user()->bookings;

        return view('bookings.index', compact('bookings'));
    }

    /**
     * Tampilkan form untuk membuat booking baru.
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Simpan booking baru ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'lapangan'   => 'required|string',
            'tanggal'    => 'required|date',
            'jam_mulai'  => 'required',
            'jam_selesai'=> 'required|after:jam_mulai',
        ]);

        // Gunakan Auth Facade agar Intelephense ngerti
        $user = Auth::user();
        Auth::user()->bookings()->create($validated);

        return redirect()->route('bookings.index')->with('success', 'Booking berhasil diajukan.');
    }

    /**
     * Hapus booking.
     */
    public function destroy(Booking $booking)
    {
        // Pastikan hanya user pemilik yang bisa hapus
        if ($booking->user_id !== Auth::id()) {
            abort(403);
        }

        $booking->delete();

        return redirect()->route('bookings.index')->with('success', 'Booking dihapus.');
    }
}
