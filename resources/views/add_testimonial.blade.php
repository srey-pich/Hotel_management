@extends('frontlayout')
@section('content')
<div class="container my-4">
    <h3 class="mb-3">Add testimonial</h3>
    @if (Session::has('success'))
    <p class="text-success">{{ session('success') }}</p>
@endif
    <form method="POST" action="{{url('customer/add-testimonial')}}">
        @csrf
        <table class="table table-bordered">
            <tr>
                <th> testimondial<span class="text-danger">*</span> </th>
                <td><textarea name="testi_cont" type="text" class="form-control" rows="8"></textarea></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" class="btn btn-success btn-sm"/></td>
            </tr>
        </table>
    </form>
</div>
@endsection
