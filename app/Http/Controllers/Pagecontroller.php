<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;
class Pagecontroller extends Controller
{
    function about_us()
    {
        return view('about_us');
    }
    function contact_us()
    {
        return view('contact_us');
    }
    function save_contactus(Request $request)
    {
        $request->validate([
            'full_name'=>'required',
            'email'=>'required',
            'subject'=>'required',
            'msg'=>'required',
        ]);
        $data = array(
            'name'=> $request->full_name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'msg'=>$request->msg,

        );
        Mail::send('mail',$data,function($message){
            $message->to('pichgii624@gmail.com','pich gii')->subject('Contact us Query');
            $message->from('jesssii524@gmail.com','pich');
    });
        return redirect('page/contact-us')->with('success','Mail has been sent');
    }
}
