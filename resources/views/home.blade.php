 @extends('frontlayout')
 @section('content')
     <style>
         body{
             padding: 25px;
             background-color: hsl(333, 51%, 90%);
             color: rgb(31, 29, 29);
           font-size: 15px;
         }
         .dark-mode {
             background-color: black;
             color: rgb(237, 90, 90);
         }
         #border {
             border: 2px solid rgb(38, 37, 37);
             border-radius: 5px;
             /* width: 500px; */
         }
         .mySlides
         {
             display: flex;
             width: 1500px;
             height: 400px;
             animation-duration: 0.02s;
             max-width: 120%;
             max-height: 400px;
         }
     </style>
     <div class="container my-4">
         <div align="right">
             <button onclick="myFunction()">
                 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                     <path
                         d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
                     <path
                         d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
                 </svg>
             </button>
             <script>
                 function myFunction() {
                     var element = document.body;
                     element.classList.toggle("dark-mode");
                 }

             </script>
         </div>
         <h2 class="text-center border-bottom" id="gallery">Service & Gallery</h2>
     </div>
     <html>

     <head>
         <title>W3.CSS</title>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
         <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     </head>

     <body>
         <div class="w3-content w3-section">
             <img class="mySlides"
                 src="https://th.bing.com/th/id/R.a1aeb0914a53f4a8dc9ae8a669c62ade?rik=kkzH4qduPkOA%2fw&pid=ImgRaw&r=0">
             <img class="mySlides" src="https://travelji.com/wp-content/uploads/Hotel-Tips.jpg">
             <img class="mySlides"
                 src="https://media-api.xogrp.com/images/cfbd393b-c5a3-4687-a32a-ff6e1e91473d~rs_2001.480.fit.jpg">
         </div>
         <script>
              var myIndex = 0;
             carousel();

             function carousel() {
                 var i;
                 var x = document.getElementsByClassName("mySlides");
                 for (i = 0; i < x.length; i++) {
                     x[i].style.display = "none";
                 }
                 myIndex++;
                 if (myIndex > x.length) {
                     myIndex = 1
                 }
                 x[myIndex - 1].style.display = "block";
                 setTimeout(carousel, 2000); // Change image every 2 seconds
             }
         </script>

     </body>

     </html>
     &nbsp;
     </body>

     </html>
     <div class="card-group">
         <div class="card">
             <img src="https://www.sokhahotels.com.kh/angkor/img/rooms/deluxe-city-view/SAR---DELUXE-CITY-VIEW.jpg"
                 class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title">Room</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                     content. This card has even longer content than the first to show that equal height action.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="http://127.0.0.1:8000/booking" type="button" class="btn btn-outline-success">Booking</a>
             </div>
         </div>
         &nbsp;
         <div class="card">
             <img src="https://www.sokhahotels.com.kh/angkor/img/rooms/deluxe-city-view/SAR---DELUXE-CITY-VIEW.jpg"
                 class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title">Room</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                     content. This card has even longer content than the first to show that equal height action.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="http://127.0.0.1:8000/booking" type="button" class="btn btn-outline-success">Booking</a>
             </div>
         </div>
         &nbsp;
         <div class="card">
             <img src="https://www.sokhahotels.com.kh/angkor/img/dinings/chanthou/gallery/NEW---LE-CHANTHOU.jpg"
                 class="card-img-top" alt="...">
             <div class="card-body">
                 <h5 class="card-title">Dinning</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                     content. This card has even longer content than the first to show that equal height action</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="http://127.0.0.1:8000/booking" type="button" class="btn btn-outline-success">Booking</a>
             </div>
         </div>
         &nbsp;
         <div class="card">
             <img src="https://www.sokhahotels.com.kh/angkor/img/dinings/takezono/SAR021Tappayaki.jpg" class="card-img-top"
                 alt="...">
             <div class="card-body">
                 <h5 class="card-title">Meeting Room</h5>
                 <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                     content. This card has even longer content than the first to show that equal height action.</p>
                 <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                 <a href="http://127.0.0.1:8000/booking" type="submit" class="btn btn-outline-success">Booking</a>
             </div>
         </div>
     </div>
     &nbsp;
     <div class="card-group">
         <div class="card">
             <h4> Resturant </h4>
             <img src="https://s3.ap-south-1.amazonaws.com/buzz.hotel-images/sokha-beach-resort-club-suite-0.jpg?_cache=1664612821"
                 class="card-img-top" alt="...">
             <div class="card-body">
                 <img src="https://www.sokhahotels.com.kh/angkor/img/rooms/deluxe-city-view/SAR---DELUXE-CITY-VIEW.jpg"
                     class="card-img-top" alt="...">
                 &nbsp;
             </div>
         </div>
         &nbsp;
         <div class="card">
             <h4> Spa Room</h4>
             <img src="https://www.sokhahotels.com.kh/sihanoukville/img/wellness/jasmine-spa/Spa4.jpg" class="card-img-top"
                 alt="...">
             <div class="card-body">
                 <img src="https://www.sokhahotels.com.kh/sihanoukville/img/weddings/venue/Seaside-Garden.jpg"
                     class="card-img-top" alt="...">
             </div>
         </div>
         &nbsp;
         <div class="card">
             <h4> Swimming Pool </h4>
             <img src="https://www.sokhahotels.com.kh/phnompenh/img/wellness/swimming-pool/swimming-pool-at-night2.jpg"
                 class="card-img-top" alt="...">
             <h4> Honeymoon </h4>
             <div class="card-body">
                 <img src="https://www.sokhahotels.com.kh/phnompenh/img/dinings/lotus/DSC_4129.jpg" class="card-img-top"
                     height="100px">
             </div>
         </div>
         &nbsp;
         <div class="card">
             <h4>Dinner</h4>
             <img src="https://www.sokhahotels.com.kh/phnompenh/img/dinings/tonle-sap-bar/Tonlesap-Bar-3.jpg"
                 class="card-img-top" alt="...">
             <h4> Honeymoon Travel</h4>
             <div class="card-body">
                 <img src="https://www.sokhahotels.com.kh/angkor/img/dinings/chanthou/gallery/NEW---LE-CHANTHOU.jpg"
                     class="card-img-top" alt="...">
             </div>
         </div>
     </div>
     &nbsp;
     <b>Attractions​​ in Cambodia</b>
     {{-- &nbsp; --}}
     <table class="table table-borderless">
         <thead>
             <tr>
                 <th scope="col">#</th>
                 <th scope="col">Attractions Temple</th>
                 <th scope="col">Social media</th>
                 <th scope="col">Branch </th>
                 <th scope="col">Safe Zone</th>
             </tr>
         </thead>
         <tbody>
             <tr>
                 <th scope="row"></th>
                 <td>Takeo</td>
                 <td>Blog</td>
                 <td>Phnom penh</td>
                 <td>Koh norea</td>
             </tr>
             <tr>
                 <th scope="row"></th>
                 <td>Siem reap</td>
                 <td>youtube</td>
                 <td>koh kong</td>
                 <td>Telegram</td>
             </tr>
             <tr>
                 <th scope="col"></th>
                 <td>Siem reap</td>
                 <td>youtube</td>
                 <td>koh kong</td>
                 <td>What</td>
             </tr>
             <tr>
                 <th scope="row"></th>
                 <td>Kompong thom</td>
                 <td>Vlog</td>
                 <td>Koh kong</td>
                 <td>Chat</td>
             </tr>
             <tr>
                 <th scope="row"></th>
                 <td>Kompong thom</td>
                 <td>Vlog</td>
                 <td>Koh kong</td>
                 <td>tiktok</td>
             </tr>
         </tbody>
     </table>
     {{-- <div class="row my-4">
        @foreach ($service as $services)
            <div class="col-md-3">
            <a href="{{url('service/'.$service->id)}}"><img class="img-thumbnail" style="width:100%;" src={{asset('storage/'.$service->photo)}}></a>
                    </div>
                <div class="col-md-8">
                    <h3>{{$service->title}}</h3>
                    <p>{{$service->small_dec}}</p>
                    <p>
                        <a href="{{url('service/'.$service->id)}}" class="btn btn-primary">Read more</a>
                    </p>
                </div>
            </div>
    @endforeach --}}
     {{-- </div> --}}
     {{-- <div id="testimoials" class="carousel slide p-5 bg-secondary text-white border mb-5" data-bs-ride="carousel">
    <div class="carousel-inner">
    @foreach ($testimonial as $index => $testi)
        <div class="carousel-item @if ($index == 0) active @endif">
            <figure class="text-center">
                <blockquote class="blockquote">
                    <img src="https://th.bing.com/th/id/OIP.Bteb8DJZu5O-bKUXSZF2fAHaE9?w=300&h=201&c=7&r=0&o=5&dpr=1.3&pid=1.7" width="800px" height="500px">
                </blockquote>
            </figure>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#testimoials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#testimoials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div> --}}
     {{--
        <div class="container my-4">
            <h1 class="text-center border-bottom" id="gallery">Galary</h1>
            <div class="row my-4">
                @foreach ($roomtypes as $rptype)
                    <div class="col-md-3">
                        <div class="card">
                            <h5 class="card-header">{{ $rptype->titles }}</h5>
                            <div class="card-body">
                                @foreach ($rptype->Roomtypeimage as $index => $imgs)
                                <a href="{{asset('storage/app/'.$img->img_src)}}" data-lightbox="galllery"></a>
                                 @endforeach
                            </div>

                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div> --}}

     {{-- <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
        <div class="flex-shrink-0">
          <img class="h-12 w12" src="https://img.icons8.com/?size=64&id=42782&format=png"
         width="100px" height="150px" alt="ChitChat Logo">
        </div>
        <div>
          <div class="text-xl font-medium text-black">ChitChat</div>
          <p class="text-gray-500">You have a new message!</p>
        </div>
      </div> --}}

     <h1 class="text-center mt-5" id="gallery">Testimoail</h1>
     <div id="testimoials" class="carousel slide p-5 bg-secondary text-yellow border mb-5" data-bs-ride="carousel">
         <div class="carousel-inner">
             @foreach ($testimonial as $index => $testi)
                 <div class="carousel-item @if ($index == 0) active @endif">
                     <figure class="text-center">
                         <blockquote class="blockquote">

                             <p>{{ $testi->testi_cont }}</p>
                         </blockquote>

                     </figure>
                 </div>
             @endforeach
         </div>
         <button class="carousel-control-prev" type="button" data-bs-target="#testimoials" data-bs-slide="prev">
             <span class="carousel-control-prev-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Previous</span>
         </button>
         <button class="carousel-control-next" type="button" data-bs-target="#testimoials" data-bs-slide="next">
             <span class="carousel-control-next-icon" aria-hidden="true"></span>
             <span class="visually-hidden">Next</span>
         </button>
     </div>

     <link rel="stylesheet" type="text/css" href="{{ asset('vendor') }}/lightbox2-2.11.3/dist/css/lightbox.min.css">
     <script type="text/javascript" src="{{ asset('vendor') }}/lightbox2-2.11.3/dist/js/lightbox.min.js"></script>
     <style type="text/css">
         .hide {
             display: none;
         }
     </style>
 @endsection
