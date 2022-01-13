@extends('layouts/contentLayoutMaster')

@section('title', 'Toasts')

@section('content')
<!-- Start of Bootstrap Toasts -->
<section id="bootstrap-toasts">
  <!-- Translucent toast and basic toasts starts  -->
  <div class="row match-height">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Toast</h4>
        </div>
        <div class="card-body">
          <p class="card-text">
            Toasts are as flexible as you need and have very little required markup. At a minimum, we require a single
            element to contain your “toasted” content and strongly encourage a dismiss button.
          </p>
          <button class="btn btn-outline-primary toast-basic-toggler mt-2">Toast</button>
          <!-- Basic toast -->
          <div class="toast-container">
            <div
              class="toast basic-toast position-fixed top-0 end-0 m-2"
              role="alert"
              aria-live="assertive"
              aria-atomic="true"
            >
              <div class="toast-header">
                <img
                  src="{{asset('images/logo/logo.png')}}"
                  class="me-1"
                  alt="Toast image"
                  height="18"
                  width="25"
                />
                <strong class="me-auto">Vue Admin</strong>
                <small class="text-muted">11 mins ago</small>
                <button type="button" class="ms-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
              </div>
              <div class="toast-body">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
            </div>
          </div>
          <!-- <div class="position-fixed top-0 end-0 p-2">
          </div> -->
          <!-- Basic toast ends -->
        </div>
      </div>
    </div>
    <!-- Translucent toast  -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Translucent</h4>
          <p class="card-text mt-1">
            Toasts are slightly translucent, too, so they blend over whatever they might appear over. For browsers that
            support the backdrop-filter CSS property, we’ll also attempt to blur the elements under a toast.
          </p>
        </div>
        <div class="card-body bg-primary rounded-bottom">
          <div class="toast show fade mt-1" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
              <img
                src="{{asset('images/logo/logo.png')}}"
                class="me-1"
                alt="Toast image"
                height="18"
                width="25"
              />
              <strong class="me-auto">Bootstrap</strong>
              <small class="text-muted">11 mins ago</small>
              <button type="button" class="ms-1 btn-close" aria-label="Close"></button>
            </div>
            <div class="toast-body">Hello, world! This is a toast message. Hope you're doing well.. :)</div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Translucent toast  -->

    <!--/ toast stacking -->
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Stacking</h4>
        </div>
        <div class="card-body">
          <p class="card-text mb-0">
            When you have multiple toasts, it will vertically stack them in a readable manner.
          </p>
          <div class="demo-inline-spacing">
            <button class="btn btn-outline-primary toast-autohide-toggler">Auto Hide Off</button>
            <button class="btn btn-outline-primary toast-stacked-toggler">Staked Toast</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ toast stacking -->
</section>
<!-- End of Bootstrap Toasts -->

<div class="toast-container position-fixed top-0 end-0 p-2" style="z-index: 15">
  <div class="toast toast-autohide hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="{{asset('images/logo/logo.png')}}" class="me-1" alt="Toast Image" height="18" width="25" />
      <strong class="me-auto">Vue Admin</strong>
      <small class="text-muted">just now</small>
      <button type="button" class="ms-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">See? Just like this. Fruitcake chocolate bar tootsie jelly beans cake.</div>
  </div>

  <div class="toast toast-stacked hide" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="{{asset('images/logo/logo.png')}}" class="me-1" alt="Toast Image" height="18" width="25" />
      <strong class="me-auto">Vue Admin</strong>
      <small class="text-muted">2 seconds ago</small>
      <button type="button" class="ms-1 btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">Heads up, toasts will stack automatically.</div>
  </div>
</div>
@endsection

@section('page-script')
  <script src="{{ asset(mix('js/scripts/components/components-bs-toast.js')) }}"></script>
@endsection
