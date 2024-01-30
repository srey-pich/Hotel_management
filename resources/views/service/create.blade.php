@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Service
                    <a href="{{url('/admin/service') }}" class="float-right btn-primary btn-sm">View All</a>
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
                    <form action="{{url('admin/service')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input type="text" name="title" class="form-control"></td>
                            </tr>
                           <th>Small Description</th>
                                <td><input type="text" name="small_dec" class="form-control"></td>
                             </tr>
                            <th>Detail Description</th>
                            <td>
                                <textarea name="detail_dec"  class="form-control"></textarea>
                                </tr>
                                <tr>
                                    <th>Photo </th>
                                     <td><input multiple type="file" name="photo"/></td>
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

