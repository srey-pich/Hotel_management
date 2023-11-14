@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add customer
                    <a href="{{url('/admin/customer') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                 @if ($errors->any)
                 @foreach ( $errors->all as $error)
                 <p class="text-danger">{{$error}}</p>
                 @endforeach
                 @endif

                 @if(Session::has('success'))
                <p class="text-success">{{session('success') }}</p>
                 @endif
                <div class="table-responsive">
                    <form method="POST" enctype="multipart/form-data" action="{{url('admin/customer')}}">
                        @csrf
                        <table class="table-responsive">
                            <tr>
                                <th>Full_Name <span class="text-danger" $error = "Name is required";>*</span> </th>
                                <td><input name="full_name" type="text" class="form-control">
                                    @error('full_name')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Email <span class="text-danger">*</span> </th>
                                <td><input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Password <span class="text-danger">*</span> </th>
                                <td><input name="password" type="password" class="form-control">
                                    @error('password')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Mobile <span class="text-danger">*</span> </th>
                                <td><input name="mobile" type="interger" class="form-control">
                                    @error('mobile')
                                    {{$message}}
                                    @enderror
                                </td>
                            </tr>
                            <tr>
                                <th>Photo </th>
                                 <td><input multiple type="file" name="photo"/></td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><input name="address" type="text" class="form-control"></td>
                            </tr>
                            <td colspan="4">
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
