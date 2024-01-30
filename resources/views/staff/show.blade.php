@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">{{ $data->full_name }} Detail
                    <a href="{{ url('/admin/staff') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ url('admin/staff') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Full Name</th>
                                <td>{{ $data->full_name }} </td>
                            </tr>
                            <tr>
                                <th>Department</th>
                                <td>{{ $data->department->title }}</td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td><img width="80" src="{{asset('storage/app/'.$data->photo)}}"></td>
                            </tr>
                            <tr>
                                <th>Bio</th>
                                <td>{{ $data->bio}}</td>
                            </tr>
                            <tr>
                                <th>Salary Type</th>
                                <td>{{ $data->salary_type}}</td>
                            </tr>
                            <tr>
                                <th>Salary Amount</th>
                                <td>{{ $data->salary_amt}}</td>
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
