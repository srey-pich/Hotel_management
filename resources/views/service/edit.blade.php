
@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update serivce
                    <a href="{{url('/admin/service') }}" class="float-right btn-primary btn-sm">View All</a>
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
                    <form method="POST" enctype="multipart/form-data" action="{{url('admin/service/'.$data->id)}}">
                        @csrf
                        @method('PUT')
                        <table class="table-responsive">
                            <tr>
                                <th>Title <span class="text-danger" $error = "Name is required";>*</span> </th>
                                <td><input value="{{$data->title}}" name="title" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Small description <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->small_dec}}" name="small" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Detail description <span class="text-danger">*</span> </th>
                                <td><input value="{{$data->detail_dec}}" name="detail_dec" type="text" class="form-control"></td>
                            </tr>
                            <tr>
                                <th>Photo </th>
                                 <td><input type="file" name="photo"/>
                                    <input type="hidden" name="prev_photo" value="{{$data->photo}}"/>
                                    <img width="100" src={{asset('storage/app/'.$data->photo)}}/>
                                </td>
                            </tr>

                            <td colspan="4">
                                <input type="submit" class="btn btn-success btn-sm">
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
