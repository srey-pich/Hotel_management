@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add service
                    <a href="{{ url('/admin/service/') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ url('admin/service/') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td>{{ $data->title }}</td>
                            </tr>
                            <tr>
                                <th>Small description</th>
                                <td>{{ $data->small_dec }}</td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>{{ $data->detail_dec }}</td>
                            </tr>
                            <tr>
                            <th>Photo</th>
                            <td><img width="100" src={{ asset('storage/' . $data->photo) }}></td>
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
