<?php
namespace App\Http\Controllers\API;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerCollection;
class CustomerController extends Controller
{
    public function index()
    {
         return new CustomerCollection(Customer::all());
    }

    public function create()
    {

      return response($customer);
    }
    public function store(Request $request)
    {

            $validated =$request->validate([
                'full_name'=>'required',
                 'email'=>'required',
                 'password'=>'required',
                 'mobile'=>'required'
             ]);
            $customer = Customer::create($request->all());
           // dd($customer);
          return response()->json($customer);
    }
    public function show($customer)
    {
        $customer =Customer::find($customer);
        return response ($customer);
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
         $customer=Customer::find($id);
         if($customer){
            $customer->update($request->all());
            $updated = Customer::find($id);
            return response (['data'=>$updated ]);
         }
         return response ('your data has no updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Customer::where('id',$id)->delete();
        return response('has been delete');
    }
}
