@extends('layout')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Customer</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Booking room</h6>
            <a href="{{url('/admin/booking/create')}}" class="float-right btn-primary btn-sm">New Booking</a>
            <button type="button" class="float-right btn btn-info"onclick="window.print()"> Print </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>CheckIn date</th>
                            <th>CheckOut date</th>
                            <th>Ref</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>Customer</th>
                            <th>CheckIn date</th>
                            <th>CheckOut date</th>
                            <th>Ref</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($data as $booking)
                            <tr>
                                <td>{{$booking->id}}</td>
                                <td>{{$booking->customer_id}}</td>
                                <td>{{$booking->checkin_date}}</td>
                                <td>{{$booking->checkout_date}}</td>
                                <td>{{$booking->ref}}</td>
                                <td><a href="{{url('/admin/booking/'.$booking->id.'/delete')}}" class="text-danger"
                                    onclick="return confirm('Are you sure delete book?')"><i class="fa fa-trash">
                                        </i></a>
                            </tr>
                        @endforeach
                        {{-- @endif --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@section('script')
<!-- Custom styles for this page -->
<link href="{{asset('vendor')}}/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="{{asset('vendor')}}/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('vendor')}}/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="{{asset('js')}}/demo/datatables-demo.js"></script>
    @endsection
@endsection

