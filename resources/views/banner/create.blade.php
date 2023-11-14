@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add banner
                    <a href="{{url('/admin/banner') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>

            </div>
            <div class="card-body">

                @if ($errors->any())
                @foreach($errors->all() as $error)
                    <p class="text-danger">{{$error}}</p>
                @endforeach
            @endif

                @if(Session::has('success'))
                    <p class="text-success">{{session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{url('admin/banner')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>

                                <th>Banner Image</th>
                                <td><input type="file" multiple name="photo"/></td>
                            </tr>

                            <th>Alt text</th>
                            <td>
                                <textarea name="alt_text" id="" cols="20" rows="2" class="form-control"></textarea>
                                </tr>
                                <tr>
                                    <th>Public status</th>
                                    <td>
                                        <input type="radio" class="class-input-label" name="public_status" value="status-online">status-online
                                        <input type="radio" class="class-input-label" name="public_status" value="status_offline">status_offline

                                    </td>
                                    </tr>

                            <td colspan="2">
                                <input type="submit" class="btn btn-success btn-sm">
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
