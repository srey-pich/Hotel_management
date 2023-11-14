@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add staff
                    <a href="{{url('/admin/staff')}}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{ url('admin/staff') }}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Full_Name</th>
                                <td><input name="full_name" type="text" class="form-control">
                            </tr>
                            <tr>
                                <th>Select Department </th>
                                <td>
                                    <select name="department_id" class="form_control">
                                        <option value="0">----Select ----</option>
                                        @foreach ($departs as $dp)
                                            <option value="{{ $dp->id }}">{{ $dp->title }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Photo</th>
                                <td>
                                    <input name="photo" type="file">
                            </tr>
                            <tr>
                            <th>Bio</th>
                            <td><textarea name="bio" class="form-control"></textarea></td>
                            </tr>
                            <tr>
                                <th>Salary type</th>
                                <td>
                                    <input type="radio" name="salary_type" value="daily">Daily
                                    <input type="radio" name="salary_type" value="monthly">Monthly
                                </td>
                                </tr>
                                <tr>
                                    <th>Salary amount</th>
                                    <td><input name="salary_amt" type="text" class="form-control" type="number ">
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
