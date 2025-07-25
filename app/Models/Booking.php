<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['lapangan', 'tanggal', 'jam_mulai', 'jam_selesai', 'status'];

public function user()
{
    return $this->belongsTo(User::class);
}

}
