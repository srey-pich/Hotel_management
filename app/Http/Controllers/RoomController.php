<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\RoomType;
class RoomController extends Controller
{
    public function index()
    {
        $data = Room::all();
        return view('room.index',['data' => $data]);
    }

    public function create()
    {
        $roomtype=Roomtype::all();
        return view('room.create',['roomtype'=>$roomtype]);
    }

    public function store(Request $request)
    {
        $data = new Room();
        $data->RoomTypeId= $request->rt_id;
       // dd($data);
        $data->Description = $request->Description;
        $data->save();
        // dd($data);
        return redirect('admin/room')->with('success','Your room has been add sucess');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Room::find($id);
        return view('room.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $roomtype = Roomtype::all();
        $data = Room::find($id);
        return view('room.edit',['data'=>$data,'roomtype' => $roomtype]);
    }

    public function update(Request $request,$id)
    {
        $data = Room::find($id);
        $data->RoomTypeId= $request->rt_id;
        $data->Description = $request->Description;
        $data->save();
        return redirect('admin/room/'.$id.'/edit')->with('success','You has been update sucess');
    }

    public function destroy(string $id)
    {
        Room::where('id',$id)->delete();
        return redirect('admin/room/')->with('success','You has been delete room sucess');
    }
}
