@extends('frontlayout')
@section('content')
<style>
    body {
      padding: 25px;
      background-color: rgb(238, 200, 217);
      color: rgb(31, 29, 29);
      font-size: 15px;
      /* text-align: right; */
    }
    .dark-mode {
      background-color: black;
      color: rgb(230, 157, 157);
    }
    #border{
            border: 2px solid rgb(38, 37, 37);
            border-radius: 5px;
            /* width: 500px; */
        }
    </style>
<div class="container my-4">
    <div align="right">
        <button onclick="myFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
              </svg>
        </button>
        <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>
    </div>
 </div>
    <h3 class="mb-3">Register</h3>
<div id="border">
    @if(Session::has('success'))
    <p class="text-success">{{session('success') }}</p>
@endif
    <form method="POST" enctype="multipart/form-data" action="{{url('admin/customer')}}">
        @csrf
        <table class="table table-bordered">
            <tr>
                <th>Full_Name <span class="text-danger" $error = "Name is required";>*</span> </th>
                <td><input name="full_name" type="text" class="form-control"></td>
            </tr>
            <tr>
                <th>Email <span class="text-danger">*</span> </th>
                <td><input name="email" type="text" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com">
                </td>
            </tr>
            <tr>
                <th>Password <span class="text-danger">*</span> </th>
                <td><input name="password" type="password" class="form-control"></td>
            </tr>
            <tr>
                <th>Mobile <span class="text-danger">*</span> </th>
                <td><input name="mobile" type="interger" class="form-control"></td>
            </tr>
            <tr>
                <th>Photo </th>
                 <td><input multiple type="file" name="photo"/></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><input name="address" type="text" class="form-control"></td>
            </tr>

            <tr>
                <input type="hidden" name="ref" value="front"/>
                <td colspan="2"><input type="submit" class="btn btn-success btn-sm"/></td>
            </tr>
        </table>
    </form>
</div>

@endsection
