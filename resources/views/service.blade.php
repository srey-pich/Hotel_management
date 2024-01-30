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
    #icon{
        text-align: left;
    }
    CSS.g-6,
.gx-6 {
  --bs-gutter-x: 4.5rem;
}
.g-6,
.gy-6 {
  --bs-gutter-y: 4.5rem;
}
@media (min-width: 576px) {
  .g-sm-6,
  .gx-sm-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-sm-6,
  .gy-sm-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 768px) {
  .g-md-6,
  .gx-md-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-md-6,
  .gy-md-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 992px) {
  .g-lg-6,
  .gx-lg-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-lg-6,
  .gy-lg-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 1200px) {
  .g-xl-6,
  .gx-xl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xl-6,
  .gy-xl-6 {
    --bs-gutter-y: 4.5rem;
  }
}
@media (min-width: 1400px) {
  .g-xxl-6,
  .gx-xxl-6 {
    --bs-gutter-x: 4.5rem;
  }
  .g-xxl-6,
  .gy-xxl-6 {
    --bs-gutter-y: 4.5rem;
  }
}
.mb-6 {
  margin-bottom: 4.5rem !important;
}
.py-6 {
  padding-top: 4.5rem !important;
  padding-bottom: 4.5rem !important;
}
@media (min-width: 576px) {
  .mb-sm-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-sm-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 768px) {
  .mb-md-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-md-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 992px) {
  .mb-lg-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-lg-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 1200px) {
  .mb-xl-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-xl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
@media (min-width: 1400px) {
  .mb-xxl-6 {
    margin-bottom: 4.5rem !important;
  }
  .py-xxl-6 {
    padding-top: 4.5rem !important;
    padding-bottom: 4.5rem !important;
  }
}
    </style>
<div class="container my-4">
    {{-- <div align="right">
        <button onclick="myFunction()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-stars-fill" viewBox="0 0 16 16">
                <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
                <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
              </svg>
        </button> --}}
        {{-- <script>
        function myFunction() {
           var element = document.body;
           element.classList.toggle("dark-mode");
        }
        </script> --}}
    </div>

</div>
    {{-- <h3 class="mb-3">Contac US</h3> --}}
    @if ($errors->any)
                    @foreach ($errors->all as $error)
                        <p class="text-danger">{{ $error }}</p>
                    @endforeach
                @endif
    @if(Session::has('success'))
    <p class="text-success">{{session('success') }}</p>
@endif
<section class="bg-light py-5 py-xl-6">
  <div class="container mb-5 mb-md-6">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
        <h2 class="mb-4 display-5">Services</h2>
        <p class="text-secondary mb-4 mb-md-5">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et neque id ligula mattis commodo.</p>
        <hr class="w-50 mx-auto mb-0 text-secondary">
      </div>
    </div>
  </div>
  <div class="container overflow-hidden">
    <div class="row gy-5 gy-md-6 gx-xl-6">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-1-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM9.283 4.002V12H7.971V5.338h-.065L6.072 6.656V5.385l1.899-1.383h1.312Z" />
          </svg>
          <h5 class="m-2">SEO Consulting</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-2-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM6.646 6.24c0-.691.493-1.306 1.336-1.306.756 0 1.313.492 1.313 1.236 0 .697-.469 1.23-.902 1.705l-2.971 3.293V12h5.344v-1.107H7.268v-.077l1.974-2.22.096-.107c.688-.763 1.287-1.428 1.287-2.43 0-1.266-1.031-2.215-2.613-2.215-1.758 0-2.637 1.19-2.637 2.402v.065h1.271v-.07Z" />
          </svg>
          <h5 class="m-2">Web Development</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-3-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.082.414c.92 0 1.535.54 1.541 1.318.012.791-.615 1.36-1.588 1.354-.861-.006-1.482-.469-1.54-1.066H5.104c.047 1.177 1.05 2.144 2.754 2.144 1.653 0 2.954-.937 2.93-2.396-.023-1.278-1.031-1.846-1.734-1.916v-.07c.597-.1 1.505-.739 1.482-1.876-.03-1.177-1.043-2.074-2.637-2.062-1.675.006-2.59.984-2.625 2.12h1.248c.036-.556.557-1.054 1.348-1.054.785 0 1.348.486 1.348 1.195.006.715-.563 1.237-1.342 1.237h-.838v1.072h.879Z" />
          </svg>
          <h5 class="m-2">Digital Strategy</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-4-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM7.519 5.057c-.886 1.418-1.772 2.838-2.542 4.265v1.12H8.85V12h1.26v-1.559h1.007V9.334H10.11V4.002H8.176c-.218.352-.438.703-.657 1.055ZM6.225 9.281v.053H8.85V5.063h-.065c-.867 1.33-1.787 2.806-2.56 4.218Z" />
          </svg>
          <h5 class="m-2">Web Design</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-5-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0Zm-8.006 4.158c1.74 0 2.924-1.119 2.924-2.806 0-1.641-1.178-2.584-2.56-2.584-.897 0-1.442.421-1.612.68h-.064l.193-2.344h3.621V4.002H5.791L5.445 8.63h1.149c.193-.358.668-.809 1.435-.809.85 0 1.582.604 1.582 1.57 0 1.085-.779 1.682-1.57 1.682-.697 0-1.389-.31-1.53-1.031H5.276c.065 1.213 1.149 2.115 2.72 2.115Z" />
          </svg>
          <h5 class="m-2">Digital Marketing</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="text-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-6-circle-fill text-primary mb-4" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0ZM8.21 3.855c-1.868 0-3.116 1.395-3.116 4.407 0 1.183.228 2.039.597 2.642.569.926 1.477 1.254 2.409 1.254 1.629 0 2.847-1.013 2.847-2.783 0-1.676-1.254-2.555-2.508-2.555-1.125 0-1.752.61-1.98 1.155h-.082c-.012-1.946.727-3.036 1.805-3.036.802 0 1.213.457 1.312.815h1.29c-.06-.908-.962-1.899-2.573-1.899Zm-.099 4.008c-.92 0-1.564.65-1.564 1.576 0 1.032.703 1.635 1.558 1.635.868 0 1.553-.533 1.553-1.629 0-1.06-.744-1.582-1.547-1.582Z" />
          </svg>
          <h5 class="m-2">Media Production</h5>
          <p class="m-0 text-secondary">Vestibulum bibendum, lorem a blandit lacinia, nisi velit posuere nisl, vel placerat magna mauris mollis maximus est.</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
