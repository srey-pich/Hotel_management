<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\RoomType;
use App\Models\booking;
use App\Models\Room;
class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookings=booking::all();
        return view('Booking.index',['data'=>$bookings]);
        // dd("hi");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::all();
        $roomtype=Roomtype::all();
        return view('Booking.create',['data'=>$customer,'roomtype'=> $roomtype]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=new booking;
        $data->customer_id= $request->customer_id;
        $data->room_id= $request->room_id;
        $data->checkin_date= $request->checkin_date;
        $data->checkout_date= $request->checkout_date;
        $data->total_adults= $request->total_adults;
        $data->total_children= $request->total_children;
        if($request->ref=='front')
        {
            $data->ref='front';
        }else{
            $data->ref='admin';
        }
        $data->save();
        return redirect('admin/booking')->with('success','Your booking has been add ');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = booking::find($id);
        return view('booking.show',['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Booking::where('id',$id)->delete();
        return redirect('admin/booking')->with('success','You has been delete boking sucess');
    }
    public function available_rooms(Request $request,$check_date)
    {

        return response()->json(['data'=>$arooms]);
    }
    public function front_booking()
    {
        $customer=Customer::all();
        $roomtype=Roomtype::all();
        return view('front_booking',['customer'=>$customer,'roomtype'=>$roomtype]);
    }
}
