<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{
    use HasFactory;
    protected $casts=[
        'is_done' => 'boolean'
    ];
    protected $hidden = [
        'updated_at',
        'created_at'
    ];
    protected $fillable =[
        'room_id'
    ];
    function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    function room()
    {
        return $this->belongsTo(Room::class);
    }
}
