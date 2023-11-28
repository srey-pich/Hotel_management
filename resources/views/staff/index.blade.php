
@extends('layout')
@section('content')
 <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Staff</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Stafff</h6>
            <a href="{{url('/admin/staff/create')}}" class="float-right btn-primary btn-sm">Add new</a>
            <button type="button" class="float-right btn btn-info"onclick="window.print()"> Print </button>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Photo</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Fullname</th>
                            <th>Photo</th>
                            <th>Department</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if($data)
                        @foreach($data as $d)
                        <tr>
                            <td>{{$d->id}}</td>
                             <td>{{$d->full_name}}</td>
                             <td>{{$d->photo}}</td>
                             <td>{{$d->department_id}}</td>
                            <td>
                                <a href="{{url('/admin/staff/'.$d->id)}}" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
                                <a href="{{url('/admin/staff/'.$d->id.'/edit')}}" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
                                <a href="{{url('admin/staff/payment/'.$d->id)}}" class="btn btn-dark btn-sm"><i class="fa fa-credit-card"></i></a>
                                <a onclick="return confirm('Are you sure delete data?')" href="{{url('/admin/staff/'.$d->id.'/delete')}}" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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

