<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Banner;
class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Banner::all();
        return view('banner.index',['data' => $data]);
    }
    public function create()
    {
        return view('banner.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'alt_text'=>'required',
            'public_status'=>'required'
        ]);
        $imgPath=$request->file('photo')->store('public/imgs');
        $data = new Banner();
        $data->banner_src=$imgPath;
        $data->alt_text = $request->alt_text;
        $data->public_status = $request->public_status;
        $data->save();
        return redirect('admin/banner')->with('success','Your banner has been add sucess');
    }
    public function show(string $id)
    {
        $data=Banner::find($id);
        return view('banner.show',['data'=>$data]);
    }
    public function edit(string $id)
    {
        $data=Banner::find($id);
        return view('banner.edit',['data'=>$data]);
    }
    public function update(Request $request, string $id)
    {
        $imgPath=$request->file('photo')->store('public/imgs');
        $data = Banner::find($id);
        $data->banner_src  =$request->$imgPath;
        $data->alt_text  = $request->alt_text;
        $data->public_status = $request->public_status;
        $data->save();
        return redirect('admin/banner/create')->with('success','You has been edit sucess');
    }
    public function destroy(string $id)
    {
        Banner::where('id',$id)->delete();
        return redirect('admin/banner')->with('success','You has been delete banner sucess');
    }
}
