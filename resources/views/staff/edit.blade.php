@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add
                    <a href="{{ url('/admin/staff') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{ url('/admin/staff/'. $data->id) }}" method="POST" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Full name</th>
                                <td><input type="text" value="{{ $data->full_name }}" name="full_name" type="text"
                                        class="form-control"></td>
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
                                <th>Phone</th>
                                <td>
                                    <input name="photo" type="file" />
                                    <input type="hidden" value="{{ $data->photo }}" name="prav_photo" />
                                    <img width="80" src="{{ asset('storage/app/' . $data->photo) }}">
                                </td>
                            <tr>
                                <th>Bio</th>
                                <td>
                                    <textarea name="bio" class="form-control"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th>Salary type</th>
                                <td>
                                    <input @if ($data->salary_type == 'daily') checked @endif type="radio"
                                        name="salary_type" value="daily">Daily
                                    <input @if ($data->salary_type == 'monthly') checked @endif type="radio"
                                        name="salary_type" value="monthly">Monthly
                                </td>
                            </tr>
                            <tr>
                                <th>Salary amount</th>
                                <td><input name="salary_amt" value="{{ $data->salary_amt }}" class="form-control"
                                        type="number ">
                            </tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-success btn-sm" value="Update">
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
