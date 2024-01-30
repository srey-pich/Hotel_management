@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Update customer
                    <a href="{{ url('admin/banner/') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if ($errors->any)
                    @foreach ($errors->all as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">
                    <form method="POST" enctype="multipart/form-data" action="{{ url('admin/banner/' . $data->id) }}">
                        @csrf
                        @method('PUT')
                        <table class="table-responsive">
                            <tr>
                                <th>Banner Image</th>
                                <td><input type="file" name="photo" />
                                    {{-- <input type="hidden" name="prev_photo" value="{{ $data->banner_src }}" /> --}}
                                    <img width="100" src={{ asset('storage/app/' . $data->banner_src) }} />
                                </td>
                            </tr>
                            <tr>
                                <th>Alt_text</th>
                                <td><input value="{{ $data->alt_text}}" name="alt_text" type="text" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Public Status :</th> &nbsp;
                                <td>
                                    <input type="radio" class="class-check-input" name="public_status"
                                    value="{{$data->public_status  == $data? 'checked' : ''}}">
                                    <label>status-online</label>
                                    <input type="radio" class="class-check-input" name="public_status"
                                    value="status_offline"><label>status_offline</label>
                                </td>
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
