<?php
namespace App\Http\Controllers;
use App\Models\Department;
use App\Models\Staff;
use App\Models\StaffPayments;
use Illuminate\Http\Request;
class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Staff::all();
        return view('staff.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $departs=Department::all();
        return view('staff.create',['departs'=>$departs]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new Staff();
        $data->full_name=$request->full_name;
        $data->department_id=$request->department_id;
        $data->photo=$request->photo;
        $data->bio = $request->bio;
        $data-> salary_type= $request->salary_type;
        $data->salary_amt = $request->salary_amt;
        $data->save();
        return redirect('admin/staff')->with('success','Your staff has been add sucess');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data=Staff::find($id);
        return view('staff.show',['data'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $departs=Department::all();
        $data=Staff::find($id);
        return view('staff.edit',['data'=>$data,'departs'=>$departs]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $data = Department::find($id);
        // $data->title= $request->title;
        $data->save();
        return redirect('admin/staff/'.$id.'/edit')->with('success','You has been update Staff sucess');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Staff::where('id',$id)->delete();
        return redirect('admin/staff/')->with('success','You has been delete Staff sucess');
    }
    function add_payment($staff_id)
    {
        Staff::where('id',$id)->delete($staff_id);

        return view('staffpayment.create',['staff_id'=>$staff_id]);
    }
    function save_payment(Request $request,$staff_id)
    {
        $data=new staff_payments;
        $data->staff_id=$staff_id;
        $data->amount=$request->amount;
        $data->payment_date=$request->amount_date;
        $data->save();
        return view('staffpayment.create',['staff_id'=>$staff_id]);
        return redirect('admin/staff/payment/'.$staff_id.'/add')->with('success','Your staffpayment has been add sucess');
    }

    function all_payment(Request $reques,$staff_id)
    {
        $data=staff_payments::where('staff_id',$staff_id)->get();
        $data=Staff::find($id);
        return view('staffpayment.index',['staff_id'=>$staff_id,'data'=>$data,'staff'=>$staff]);
    }
}
