<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Customer::all();
        return view('customer.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customer.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
           'full_name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
            'mobile'=>'required'
        ]);
        // if($request->hash_file('photo')){
        //     $imgPath=$request->file('photo')->store('public/imgs');
        // }
        // else{
        //     $imgPath=null;
        // }
        $imgPath=$request->file('photo')->store('public/imgs');
        $data=new Customer;
        $data->full_name=$request->full_name;
        $data->email=$request->email;
        $data->password=sha1($request->password);
        $data->mobile=$request->mobile;
        $data->address=$request->address;
        $data->photo=$imgPath;
        $data->save();

        $ref=$request->ref;
        if($ref=='front')
        {
            return redirect('register')->with('success','data has been saved.');
        }
        return redirect('admin/customer')->with('success','Your customer has been add ');

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Customer::find($id);
        return view('customer.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $data = Customer::find($id);
        return view('customer.edit',['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'full_name'=>'required',
             'email'=>'required|email',
             'mobile'=>'required'
         ]);

        //  if($request->hash_file('photo')){
        //     $imgPath=$request->file('photo')->store('public/imgs');
        // }
        // else{
        //     $imgPath=$request->prev_photo;
        // }
        // $imgPath=$request->file('photo')->store('public/imgs');
         $data=Customer::find($id);
         $data->full_name=$request->full_name;
         $data->email=$request->email;
         $data->mobile=$request->mobile;
         $data->address=$request->address;
        //  $data->photo=$imgPath;
         $data->save();

         return redirect('admin/customer/create'.$id.'/edit')->with('success','Your customer has been update ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::where('id',$id)->delete();
        return redirect('admin/customer/')->with('success','You has been delete customer!!');
    }
    function login()
    {
        return view('frontlogin');
    }
    function register()
    {
        return view('register');
    }
    function customer_login(Request $request)
    {
        $email=$request->email;
        $pwd=sha1($request->password);
        $detail= Customer::where(['email'=>$email,'password'=>$pwd])->count();
        if($detail>0)
        {
            $detail= Customer::where(['email'=>$email,'password'=>$pwd])->get();
            session(['customerlogin'=>true,'data'=>$detail]);
            return redirect('/');
        }else
        {
            return redirect('logout')->with('error','Invalid email/password!!');
        }
    }
    function logout()
    {
        session()->forget(['customerlogin','data']);
        return view('login');
    }
}
