<?php
namespace App\Http\Controllers\API;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Models\Roomtypeimage;
use App\Http\Controllers\Controller;
use App\Http\Resources\RoomtypeCollection;
class RoomtypeController extends Controller
{
    public function index()
    {
        $data = RoomType::all();
        return new RoomtypeCollection(roomtype::all());
    }
}
