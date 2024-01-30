@extends('frontlayout')
@section('content')
<div class="container py-5">
    <style>
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
<section class="bg-light py-5 py-xl-6">
  <div class="container mb-5 mb-md-6">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
        <h2 class="mb-4 display-5">Testimonials</h2>
        <p class="text-secondary mb-4 mb-md-5">Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Pellentesque et neque id ligula mattis commodo.</p>
        <hr class="w-50 mx-auto mb-0 text-secondary">
      </div>
    </div>
  </div>
  <div class="container overflow-hidden">
    <div class="row justify-content-lg-around gy-5 gy-md-6">
      <div class="col-12 col-sm-6 col-lg-5">
        <div class="col-xl-11 col-xxl-10 mx-auto text-center">
          <img class="img-fluid rounded rounded-circle mb-4" loading="lazy" src="https://th.bing.com/th/id/OIP.GwJ2LMBDJDU--aCqKFs1rgHaE8?rs=1&pid=ImgDetMain" alt="">
          <p class="mb-2">Phasellus sem justo, <a href="#!">pretium eu lacus ut</a>, aliquet diam. Morbi sit amet dolor eu erat ornare viverra.</p>
          <p class="m-0 fw-bold">Luna John - Marketer</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-5">
        <div class="col-xl-11 col-xxl-10 mx-auto text-center">
          <img class="img-fluid rounded rounded-circle mb-4" loading="lazy" src="./assets/img/testimonials/testimonial-1/img-2.jpg" alt="">
          <p class="mb-2">Phasellus sem justo, <a href="#!">pretium eu lacus ut</a>, aliquet diam. Morbi sit amet dolor eu erat ornare viverra.</p>
          <p class="m-0 fw-bold">Mark Smith - Designer</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-5">
        <div class="col-xl-11 col-xxl-10 mx-auto text-center">
          <img class="img-fluid rounded rounded-circle mb-4" loading="lazy" src="./assets/img/testimonials/testimonial-1/img-3.jpg" alt="">
          <p class="mb-2">Phasellus sem justo, <a href="#!">pretium eu lacus ut</a>, aliquet diam. Morbi sit amet dolor eu erat ornare viverra.</p>
          <p class="m-0 fw-bold">Michael Wilson - SEO</p>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-5">
        <div class="col-xl-11 col-xxl-10 mx-auto text-center">
          <img class="img-fluid rounded rounded-circle mb-4" loading="lazy" src="./assets/img/testimonials/testimonial-1/img-4.jpg" alt="">
          <p class="mb-2">Phasellus sem justo, <a href="#!">pretium eu lacus ut</a>, aliquet diam. Morbi sit amet dolor eu erat ornare viverra.</p>
          <p class="m-0 fw-bold">Luke Reeves - Sales</p>
        </div>
      </div>
    </div>
  </div>
</section>
    @endsection
