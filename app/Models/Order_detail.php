<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    use HasFactory;

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
