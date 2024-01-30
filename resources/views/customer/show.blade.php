@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">View customer
                    <a href="{{url('/admin/customer') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ url('admin/customer') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>FullName</th>
                                <td>{{ $data->full_name }}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><img width="100" src={{asset('storage/'.$data->photo)}}></td>
                                {{-- D:\wamp64\www\hotel\storage\app\public\imgs\t9Y7Hqnc9jcx0yRwnfRBkbgy5mUgcgeVHKPy0BIQ.jpg --}}
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $data->email}}</td>
                            </tr>
                            <tr>
                                <th>Mobile</th>
                                <td>{{ $data->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td>{{ $data->address}}</td>
                            </tr>
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