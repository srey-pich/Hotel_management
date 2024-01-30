<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    function bookings()
    {
        return $this->hasMany(booking::class);
    }
    function Banner()
    {
        return $this->hasMany(banner::class);
    }
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
    protected $fillable=[
        'full_name',
        'email',
        'password',
        'address',
        'mobile'

    ];
}
