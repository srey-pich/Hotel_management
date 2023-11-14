@extends('frontlayout')
@section('content')
<style>
    body {
      padding: 25px;
      background-color: hsla(330, 17%, 91%, 0.969);
      color: black;
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
            box-sizing:100px;
            text-align:right;
        }
        #text{
            text-align: center;
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
    <h3 class="mb-3">Room Booking</h3>
    <div class="clearfix" id="text">
        <img src="https://s3.ap-south-1.amazonaws.com/buzz.hotel-images/sokha-beach-resort-executive-suite-1.jpg?_cache=1664606718" align="left" width="600px">
        &nbsp;
        <p>
          A paragraph of placeholder text. We're using it here to show the use of the clearfix class. We're adding quite a few meaningless phrases here to demonstrate how the columns interact here with the floated image.
        </p>
        <p>
          As you can see the paragraphs gracefully wrap around the floated image. Now imagine how this would look with some actual content in here, rather than just this boring placeholder text that goes on and on, but actually conveys no tangible information at. It simply takes up space and should not really be read.
        </p>

        <p>
          And yet, here you are, still persevering in reading this placeholder text, hoping for some more insights, or some hidden easter egg of content. A joke, perhaps. Unfortunately, there's none of that here.
        </p>
      </div>
      &nbsp;
@if ($errors->any)
                    @foreach ($errors->all as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif

                @if (Session::has('success'))
                    <p class="text-success">{{ session('success') }}</p>
                @endif
<div class="table-responsive">
    <form method="POST" enctype="multipart/form-data" action="{{ url('/admin/booking') }}">
        @csrf
        <table class="table table-success table-striped">
            <thead>
              <tr>
                <h1>Travel information</h1>
                <th scope="col">ID</th>
                <th scope="col">Customer Name</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
              </tr>
            </tbody>
          </table>
        <table class="table-responsive">
            <tr>
                <th>Select Customer <span class="text-danger"></span></th>
                <td>
                    <select class="form-control" name="customer_id">
                        <option>Select customer</option>
                        @foreach ( $customer as $customers)
                            <option value="{{$customers->id }}">{{ $customers->full_name }}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>checkIn date <span class="text-danger">*</span> </th>
                <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
            </tr>
            <tr>
                <th>checkOut date <span class="text-danger">*</span> </th>
                <td><input name="checkout_date" type="date" class="form-control" /></td>
            </tr>
            <tr>
                <th>Avaiable Rooms <span class="text-danger">*</span></th>
                <td>
                    <select class="form-control room-list" name="room_id">
                        <option>Select Room</option>
                                        @foreach ($roomtype as $roomtypes)
                                            <option value="{{$roomtypes->id }}">{{$roomtypes->titles}}</option>
                                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th>Total adults<span class="text-danger">*</span> </th>
                <td><input name="total adults" type="text" class="form-control"/></td>
            </tr>
            <tr>
                <th>Total Children</th>
                <td><input name="total_children" type="text" class="form-control"/></td>
            </tr>
            <td colspan="4">
                <input type="hidden" name="roomprice" class="room-price" value=""/>
                <input type="submit" class="btn btn-primary"/>
            </td>
        </table>
    </form>
</div>
@endsection
