<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Service::all();
        return view('service.index',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('service.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'small_dec'=>'required',
            'detail_dec'=>'required',
            ]);

            $imgPath=$request->file('photo')->store('public/imgs');
           $data = new Service();
           $data->title = $request->title;
           $data->small_dec = $request->small_dec;
           $data->detail_dec = $request->detail_dec;
           $data->photo = $imgPath;
           $data->save();
           return redirect('admin/service/create')->with('success','You has been add sucess');
        }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Service::find($id);
        return view('service.show',['data' => $data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Service::find($id);
        return view('service.edit',['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'small_dec'=>'required',
            'detail_dec'=>'required',
            ]);
            $imgPath=$request->file('photo')->store('public/imgs');
           $data =Service::find($id);
           $data->title = $request->title;
           $data->small_dec = $request->small_dec;
           $data->detail_dec = $request->detail_dec;
           $data->photo = $imgPath;
           $data->save();

           return redirect('admin/service/'.$id.'/edit')->with('success','You has been edit sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Service::where('id',$id)->delete();
        return redirect('admin/service/')->with('success','You has been delete service sucess');
    }
}
