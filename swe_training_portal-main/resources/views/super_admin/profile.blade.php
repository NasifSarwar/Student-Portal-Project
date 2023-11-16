@extends('layouts.super_admin')

@section('content')


<div class="col-lg-12">
@if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
         Profile Updated Successfully
        </div>
@endif
              <div class="card mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"></h6>
                </div>
                <div class="card-body">
                @foreach($users as $user)
               <center><b><img src="{{ asset('/images/' .$user->image) }}" height="120px" width="120px"></b></center><br><hr>
               <center><b><h5>Name:{{$user->name}}</h5></b></center><hr>
               <center><b><h5>Phone:{{$user->phone}}</h5></b></center><hr>
               <center><b><h5>Email:{{$user->email}}</h5></b></center><hr>
               <a href="{{ URL::to('/profile/'.$user->id.'/edit') }}" class="btn btn-primary mb-1" style="position: absolute; right: 0;">Edit</a>
                <hr>
            
               @endforeach
                </div>
              </div>
            </div>


@endsection