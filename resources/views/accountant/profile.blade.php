@extends('accountant.layouts.default')

@section('content')
<!-- Container fluid -->
<div class="container-fluid px-6 py-4">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <!-- Page header -->
      <div>
        <div class="border-bottom pb-4 mb-4 ">
          <div class="mb-2 mb-lg-0">
            <h3 class="mb-0 fw-bold">Profile</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row align-items-center">
    <div class="col-xl-12 col-lg-12 col-md-12 col-12">
      <!-- Bg -->
      <div class="pt-20 rounded-top" style="background:
          url({{asset('assets/images/background/profile-cover.jpg')}}) no-repeat;
          background-size: cover;">
      </div>
      <div class="bg-white rounded-bottom smooth-shadow-sm ">
        <div class="d-flex align-items-center justify-content-between
            pt-4 pb-6 px-4">
          <div class="d-flex align-items-center">
            <!-- avatar -->
            <div class="avatar-xxl avatar-indicators avatar-online me-2
                position-relative d-flex justify-content-end
                align-items-end mt-n10">
              <img
                src="{{Auth::guard('accountant')->user()->avatar != null ? asset(Auth::guard('accountant')->user()->avatar) : asset('defaultAvatar.png')}}"
                class="avatar-xxl
                  rounded-circle border border-4 border-white-color-40" alt="">
            </div>
            <!-- text -->
            <div class="lh-1">
              <h2 class="mb-0">{{Auth::guard('accountant')->user()->fname}}
                <a href="#!" class="text-decoration-none" data-bs-toggle="tooltip" data-placement="top" title=""
                  data-original-title="Beginner">

                </a>
              </h2>
              <p class="mb-0 d-block">{{Auth::guard('accountant')->user()->email}}</p>
            </div>
          </div>
          <div>
            <a href="{{route('accountant.edit.profile')}}" class="btn btn-outline-primary
                d-none d-md-block">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content -->
  <div class="py-6">
    <!-- row -->
    <div class="row">
      <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-6">
        <!-- card -->
        <div class="card">
          <!-- card body -->
          <div class="card-body">
            <!-- card title -->
            {{-- <h4 class="card-title mb-4">About Me</h4> --}}
            <!-- row -->
            <div class="row">
              <div class="col-12 mb-5">
                <!-- text -->
                <h6 class="text-uppercase fs-5 ls-2">Position/Role </h6>
                <p class="mb-0">Accountant {{Auth::guard('accountant')->user()->id}}</p>
              </div>
              <div class="col-6 mb-5">
                <h6 class="text-uppercase fs-5 ls-2">Username </h6>
                <p class="mb-0">{{Auth::guard('accountant')->user()->username ?
                  Auth::guard('accountant')->user()->username :'xxxx' }}</p>
              </div>
              <div class="col-6 mb-5">
                <h6 class="text-uppercase fs-5 ls-2">Gender </h6>
                <p class="mb-0">{{Auth::guard('accountant')->user()->gender ? Auth::guard('accountant')->user()->gender
                  :'xxxx' }}</p>
              </div>
              <div class="col-6 mb-5">
                <h6 class="text-uppercase fs-5 ls-2">Phone </h6>
                <p class="mb-0">{{Auth::guard('accountant')->user()->tel ? Auth::guard('accountant')->user()->tel
                  :'xxx-xxxx-xxxx' }}</p>
              </div>
              <div class="col-6">
                <h6 class="text-uppercase fs-5 ls-2">Email </h6>
                <p class="mb-0">{{Auth::guard('accountant')->user()->email}}</p>
              </div>
              <div class="col-12">
                <h6 class="text-uppercase fs-5 ls-2">Location
                </h6>
                <p class="mb-0">{{Auth::guard('accountant')->user()->address ?
                  Auth::guard('accountant')->user()->address :'xxx-xxxx-xxxx' }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection