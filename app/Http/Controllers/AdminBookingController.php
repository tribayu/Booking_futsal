<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
      public function index()
    {
        $bookings = Booking::latest()->get();
        return view('admin.bookings.index', compact('bookings'));
    }

    public function updateStatus(Booking $booking, Request $request)
    {
        $request->validate([
            'status' => 'required|in:approved,rejected',
        ]);

        $booking->status = $request->status;
        $booking->save();

        return back()->with('success', 'Status booking diperbarui.');
    }
}
