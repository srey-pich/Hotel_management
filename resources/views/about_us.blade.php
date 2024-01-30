@extends('frontlayout')
@section('content')
<style>
    body {
      padding: 25px;
      background-color: hsl(333, 23%, 92%);
      color: rgb(31, 29, 29);
      font-size: 15px;
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
        #text{
                text-align:justify;
                font-family:Roboto Condensed;
                font-style:normal;
                line-height:28px;
        }

    </style>
<div class="container my-4">
    <div align="right">
        {{-- <button onclick="myFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
              </svg>
        </button> --}}
        <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script>
    </div>
    <section class="bg-light py-5 py-xl-6">
      <div class="container mb-4 mb-md-5 mb-xl-6">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-xxl-8">
            <img class="img-fluid rounded shadow" loading="lazy" src="https://media.architecturaldigest.com/photos/57e42deafe422b3e29b7e790/master/pass/JW_LosCabos_2015_MainExterior.jpg" width="500" height="350">
          </div>
        </div>
      </div>
      <div class="container overflow-hidden">
        <div class="row gy-2 gy-md-0 justify-content-xxl-center">
          <div class="col-12 order-md-1 col-md-8 col-xxl-6">
            <div class="text-center text-md-start">
              <h2 class="display-3 fw-bold lh-1">Hotel</h2>
              <p class="text-secondary fs-4 mb-2"></p>
              <hr class="w-25 mx-auto ms-md-0 mb-4 text-secondary">
              <p>Nam sit amet condimentum arcu. Vestibulum non convallis elit, nec finibus purus. Morbi a tortor vitae mauris volutpat lacinia in vel leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aliquam vel dictum nisi.</p>
              <p>Duis bibendum lectus vitae posuere euismod. Nunc semper mauris sed justo consequat mollis. Suspendisse eu lectus ornare, pulvinar tortor eget, iaculis libero. Nullam non metus sed lacus luctus posuere. Morbi semper pharetra tortor sit amet mollis.</p>
            </div>
          </div>
          <div class="col-12 order-md-0 col-md-4 col-xxl-4">
            <div class="text-center text-md-start me-md-3 me-xl-5">
              <p class="mb-4">
                <span class="d-block display-6 lh-1">Rate 100</span>
                <span class="fs-4 text-secondary">years of Pending</span>
              </p>
              <div class="d-grid">
                <button class="btn btn-primary btn-lg" type="button">More View</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
