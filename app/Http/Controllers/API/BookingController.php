<?php
namespace App\Http\Controllers\API;
use App\Models\Room;
use App\Models\booking;
use App\Models\Customer;
use App\Models\RoomType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\bookingCollection;
class BookingController extends Controller
{
    public function index()
    {
       $bookings=booking::all();
       return new bookingCollection(booking::all());

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customer=Customer::all();
        $roomtype=Roomtype::all();
       // return view('Booking.create',['data'=>$customer,'roomtype'=> $roomtype]);
       return new bookingCollection(booking::all());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'room_id'=>'required'
         ]);
        $data = booking::create($request);
        return new bookingResource($data);
    }
    public function show($id)
    {
        $data = booking::find($id);
        return new bookingResource($data);
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
