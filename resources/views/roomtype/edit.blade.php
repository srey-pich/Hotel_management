@extends('layout')
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Add Room
                    <a href="{{ url('/admin/roomtype') }}" class="float-right btn-primary btn-sm">View All</a>
                </h6>
            </div>
            <div class="card-body">
                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
                <div class="table-responsive">

                    <form action="{{ url('admin/roomtype/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <table class="table table-bordered">
                            <tr>
                                <th>Title</th>
                                <td><input type="text" value="{{ $data->titles }}" name="title" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Price</th>
                                <td><input type="text" value="{{ $data->price}}" name="price" class="form-control">
                                </td>
                            </tr>
                            <tr>
                                <th>Detail</th>
                                <td>
                                    <textarea name="detail" type="text" value="{{ $data->price}}" cols="30" rows="10" class="form-control"></textarea>
                                </td>
                            </tr>
                            {{-- <tr>
                                <th>Gallary Image</th>
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <td><input type="file" multiple name="imgs[]" /></td> --}}
                                        {{-- @dd('$request');
                                         @foreach ($data->Roomtypeimage as $imgs)
                                            <td class="imgcol{{ $img->id }}">
                                                <img width="150" src="{{ asset('storage/app' . $img->img_src) }}" />
                                                <p class="mt-2">
                                                    <button type="button"
                                                        onclick="return confirm('Are sure want to delete img?')"
                                                        class="btn btn-danger btn-sm delete-image"
                                                        data-image-id="{{ $img->id }}"><i
                                                            class="fa fa-trash"></i></button>
                                                </p>
                                            </td>
                                        @endforeach
                                    </tr>
                                </table> --}}

                                <th>Galary Imgae</th>
                                <td><input type="file" multiple name="imgs[]" /></td>

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
