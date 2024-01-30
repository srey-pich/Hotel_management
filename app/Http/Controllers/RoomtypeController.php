<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Roomtypeimage;
class RoomtypeController extends Controller
{
    public function index()
    {
        $data = RoomType::all();
        return view('roomtype.index',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roomtype.create');
    }
    public function store(Request $request)
    {
    //   dd($request);
        $request->validate([
        'titles'=>'required',
        'price'=>'required',
        'detail'=>'required',
        ]);
       $imgPath=$request->file('photo')->store('public/imgs');
       $data = new RoomType();
       $data->titles  = $request->titles;
       $data->price  = $request->price;
       $data->detail = $request->detail;
       $data->photo=$imgPath;
       $data->save();
    //    foreach($request->file('imgs')as $img)
    //    {
    //         $imgPath=$img->store('public/imgs');
    //         $imgData=new Roomtypeimage;
    //         $imgData->RoomTypeId=$data->id;
    //         $imgData->img_src=$imgPath;
    //         $imgData->img_alt=$request->title;
    //         $imgData->save();
    //    }
       return redirect('admin/roomtype/')->with('success','You has been add sucess');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = RoomType::find($id);
        return view('roomtype.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        $data = RoomType::find($id);
        return view('roomtype.edit',['data' => $data]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = RoomType::find($id);
        $data->titles  = $request->titles;
        $data->price  = $request->price;
        $data->detail = $request->detail;
        $data->save();
        return redirect('admin/roomtype/create')->with('success','You has been edit sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        RoomType::where('id',$id)->delete();
        return redirect('admin/roomtype/')->with('success','You has been delete sucess');
    }
}
