<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Service;
use App\Models\Testimoials;
class HomeController extends Controller
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
       // $service=Service::find();
       // return view('service',['service'=>$service]);
       return view('service');
    }
    public function add_testimonial()
    {
        return view('add_testimonial');
    }
    public function payment()
    {
      return view('payment');
    }
    public function gallary()
    {
      return view('gallary');
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
