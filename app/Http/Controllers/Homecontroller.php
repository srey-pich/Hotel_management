<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Testimoials;
class Homecontroller extends Controller
{
    public function home()
    {
        $roomtype=RoomType::all();
        $service=Service::all();
        $testimonial=Testimoials::all();
        return view('home',['roomtypes'=>$roomtype,'service'=>$service,'testimonial'=>$testimonial]);
    }
    public function Service_detail()
    {
        $service=Service::find($id);
        return view('servicedetail',['service'=>$service]);
    }
    public function add_testimonial()
    {
        return view('add_testimonial');
    }
    public function save_testimonial(Request $request)
    {
        $customerID=session('data')[1]->id;
        $data=new testimoials;
        $data->customer_id= $customerID;
        $data->testi_cont=$request->testi_cont;
        $data->save();
        return redirect('customer/add-testimonial')->with('success','Data has been add');
    }
}
