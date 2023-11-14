
@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update customer
                    <a href="{{url('admin/customer/') }}" class="float-right btn-primary btn-sm">View All</a>
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
                    <form method="POST" enctype="multipart/form-data" action="{{url('admin/customer/'.$data->id)}}">
                        @csrf
                        @method('PUT')
                        <table class="table-responsive">
                            <tr>
                                <th>Full_Name <span class="text-danger" $error = "Name is required";>*</span> </th>
                                <td><input value="{{$data->full_name}}" name="full_name" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Email <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->email}}" name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com"></td>
                            </tr>
                            <tr>
                                <th>Password <span class="text-danger">*</span> </th>
                                <td><input  value="{{$data->password}}" name="password" type="password" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Mobile <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->mobile}}" name="mobile" type="interger" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Photo </th>
                                 <td><input type="file" name="photo"/>
                                    <input type="hidden" name="prev_photo" value="{{$data->photo}}"/>
                                    <img width="100" src={{asset('storage/app/'.$data->photo)}}/>
                                </td>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <td><input value="{{$data->mobile}}" name="address" type="text" class="form-control"></td>
                            </tr>
                            <td colspan="4">
                                <input type="submit" class="btn btn-success btn-sm" value="Update">
                            </td>
                        </table>
                        {{-- @method('PATCH') --}}
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
