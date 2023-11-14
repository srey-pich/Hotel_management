<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\admin;
use App\Models\Booking;
use Cookie;
class AdminController extends Controller
{
   function login()
   {
        return view('login');
   }
   function check_login(Request $request)
   {
    $request->validate([
        'username'=>'required',
        'password'=>'required',
    ]);
        $admin=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->count();
        if($admin>0)
        {
            $adminData=Admin::where(['username'=>$request->username,'password'=>sha1($request->password)])->get();
            session(['adminData'=>$adminData]);

            if($request->has('rememberme'))
            {
                Cookie::queue('adminuser',$request->username,1440);
                Cookie::queue('adminpwd',$request->password,1440);
            }

             return redirect('admin');
        }else{
            return redirect('admin/login')->with('msg','Invalid username or password!!');
        }
    }
   function logout()
   {
     session()->forget(['adminData']);
     return redirect('admin/login');
   }
   function deshbord()
   {
//     dd("hi");
     $bookings=Booking::selectRaw('count(id) as total_bookings,checkin_date')->groupBy('checkin_date')->get();
     $labels=[];
     $data=[];
     foreach($bookings as $booking)
     {
    //    dd("hu");
        $labels[]=$booking['checkin_date'];
      $data[]=$booking['total_bookings'];
     }
    //  dd("dddd");
     return view('deshbord',['_labels'=> $labels,'_data'=>$data]);
   }
   public function testimonial()
   {
     $data=Testimonial::all();
     return view('admin_testimonial',['data'=>$data]);
   }
   public function destroy_testimonial()
   {
     testimoials::where('id',$id)->delete();
     return redirect('admin/testimonial')->with('success','You has been delete tezt sucess');

   }

}

