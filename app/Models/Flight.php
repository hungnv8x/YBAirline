<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'departure_date',
        'travel_time',
        'from',
        'to',
        'quantity_seat',
    ];
    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }
}
