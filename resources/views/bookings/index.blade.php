<!-- resources/views/bookings/index.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>Daftar Booking</h1>

    @if (session('success'))
        <div>{{ session('success') }}</div>
    @endif

    <table border="1">
        <thead>
            <tr>
                <th>Lapangan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($bookings as $booking)
                <tr>
                    <td>{{ $booking->lapangan }}</td>
                    <td>{{ $booking->tanggal }}</td>
                    <td>{{ $booking->jam_mulai }} - {{ $booking->jam_selesai }}</td>
                    <td>{{ $booking->status }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="4">Belum ada booking.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
