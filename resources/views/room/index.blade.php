
@extends('layout')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Room</h6>
            <a href="{{url('/admin/room/create')}}" class="float-right btn-primary btn-sm">Add new</a>
        </div>
        <div class="card-body">
            @if(Session::has('success'))
                    <p class="text-success">{{session('success') }}</p>
                @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>RoomID</th>
                           <th>RoomytpeID</th>
                            <th>Description</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>RoomID</th>
                            <th>RoomytpeID</th>
                            <th>Description</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                       @if ($data)
                        @foreach ($data as $d)
                            <tr>
                               <td>{{$d->id}}</td>
                               <td>{{$d->RoomTypeId}}</td>
                                <td>{{$d->Description}}</td>
                            <td>
                                <a href="{{url('/admin/room/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{url('/admin/room/'.$d->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a onclick="return confirm('Are you sure delete data?')" href="{{url('/admin/room/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                            </td>
                            </tr>
                        @endforeach
                       @endif
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





 {{-- @extends('layout')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">RoomType</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">RoomType</h6>
            <a href="{{url('/admin/room/create')}}" class="float-right btn-primary btn-sm">Add new</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Prjhice</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($data)
                        @foreach ($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                            <td>{{$d->titles}}</td>
                            <td>{{$d->price}}</td>
                        <td>
                            <a href="{{url('/admin/room/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="{{url('/admin/room/'.$d->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                            <a onclick="confirm('Are you sure delete data?')" href="{{url('/admin/room/delete'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                        @endforeach
                        @endif
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
 --}}
