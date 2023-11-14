 @extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add staff payment
                    <a href="{{url('admin/staff')}}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form action="{{ url('admin/staff/payment/'.$staff_id)}}" method="POST">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <th>Amount</th>
                                <td><input name="amount" type="text" class="form-control">
                            </tr>
                            <tr>
                                <th>Date</th>
                                <td>
                                    <input name="amount_date" type="date" class="form-control">
                            </tr>
                            <td colspan="2">
                                <input type="submit" class="btn btn-success btn-sm">
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

