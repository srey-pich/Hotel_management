@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Booking room
                    <a href="{{ url('/admin/booking') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">

                @if ($errors->any)
                    @foreach ($errors->all as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/booking') }}">
                        @csrf
                        <table class="table-responsive">
                            <tr>
                                <th>Select Customer <span class="text-danger"></span></th>
                                <td>
                                    <select class="form-control" name="customer_id">
                                        <option>Select customer</option>
                                        @foreach ($data as $customer)
                                            <option value="{{$customer->id }}">{{ $customer->full_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>checkIn date <span class="text-danger">*</span> </th>
                                <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                            </tr>
                            <tr>
                                <th>checkOut date <span class="text-danger">*</span> </th>
                                <td><input name="checkout_date" type="date" class="form-control" /></td>
                            </tr>
                            <tr>
                                <th>Avaiable Rooms <span class="text-danger">*</span></th>
                                <td>
                                    <select class="form-control room-list" name="room_id">
                                        {{-- <option>------Select room------</option>
                                        @foreach ($data as $roomtype)
                                        <option value="{{$roomtype->id}}">{{$roomtype->price}}</option>
                                        @endforeach --}}

                                        <option>Select Room</option>
                                        @foreach ($roomtype as $roomtypes)
                                            <option value="{{$roomtypes->id }}">{{$roomtypes->titles}}</option>
                                        @endforeach

                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Total adults<span class="text-danger">*</span> </th>
                                <td><input name="total adults" type="text" class="form-control"/></td>
                            </tr>
                            <tr>
                                <th>Total Children</th>
                                <td><input name="total_children" type="text" class="form-control"/></td>
                            </tr>
                            <td colspan="4">
                                <input type="hidden" name="roomprice" class="room-price" value=""/>
                                <input type="submit" class="btn btn-primary"/>
                                <input class="btn btn-danger btn-sm" type="reset" value="Reset">
                            </td>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@section('script')
    <!-- Custom styles for this page -->
    <link href="{{ asset('vendor') }}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="{{ asset('vendor') }}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('vendor') }}/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="{{ asset('js') }}/demo/datatables-demo.js"></script>
@endsection
@endsection
