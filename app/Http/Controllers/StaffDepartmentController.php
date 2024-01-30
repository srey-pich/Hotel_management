<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Department;
use App\Http\Controllers\StaffController;
class StaffDepartmentController extends Controller
{
    public function index()
    {
        return view('department.create');
    }
    public function create()
    {
        $data=Department::all();
        return view('department.index',['data'=>$data]);
    }
    public function store(Request $request)
    {
        $data=new Department;
        $data->title=$request->title;
        $data->detail=$request->detail;
        $data->save();
        return redirect('admin/department')->with('success','You has been add department sucess');
    }
    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data=Department::find($id);
        return view('department.show',['data'=>$data]);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data=Department::find($id);
        return view('department.edit',['data'=>$data]);

    }
    public function update(Request $request, string $id)
    {
        $data =Department::find($id);
        $data->title  = $request->title;
        $data->detail = $request->detail;
        $data->save();
        return redirect('admin/department/create'.$id.'/edit')->with('success','You has been edit department sucess');
    }
    public function destroy($id)
    {
        Department::where('id',$id)->delete();
        return redirect('admin/department')->with('success','You has been delete staff!!');
    }
}
