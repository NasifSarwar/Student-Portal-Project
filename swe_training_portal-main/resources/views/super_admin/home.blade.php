@extends('layouts.super_admin')

@section('content')

<div class="container-fluid" id="container-wrapper">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">অ্যাডমিন ড্যাশবোর্ড </h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="./">হোম</a></li>
        <li class="breadcrumb-item active" aria-current="page">ড্যাশবোর্ড</li>
      </ol>
    </div>

    <div class="row mb-3">
      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">মোট ভিউয়ার  </div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$training}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
               
                 
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-calendar fa-2x text-primary"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Earnings (Annual) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">পেন্ডিং আবেদন</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$pending}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                 
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-envelope fa-2x text-success"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- New User Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">মোট শিক্ষার্থী</div>
                <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$students}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                  
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-users fa-2x text-info"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Pending Requests Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-uppercase mb-1">পেন্ডিং প্রশ্নোত্তর</div>
                <div class="h5 mb-0 font-weight-bold text-gray-800">{{$questions}}</div>
                <div class="mt-2 mb-0 text-muted text-xs">
                 
                </div>
              </div>
              <div class="col-auto">
                <i class="fas fa-comments fa-2x text-warning"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>















@endsection
