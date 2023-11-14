@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Room
                    <a href="{{url('/admin/room') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if(Session::has('success'))
                    <p class="text-success">{{session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{url('admin/room')}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Select RoomType</th>
                                    <td>
                                    <select name="rt_id" class="form_control">
                                        <option value="0">--- Select ----</option>
                                        @foreach ($roomtype as $rt)
                                        <option value="{{$rt->id}}">{{$rt->titles}}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <th>Description</th>
                            <td>
                                <input name="des" type="text" class="form-control" >
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
