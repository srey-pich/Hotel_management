<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $table = 'rooms';
    function Roomtype()
    {
        return $this->belongsTo(RoomType::class,'RoomTypeId');
    }
}
