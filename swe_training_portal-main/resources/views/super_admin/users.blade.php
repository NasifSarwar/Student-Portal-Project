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
                
               <center><b><img src="/public/images/{{$user->filename}}" height="120px" width="120px"></b></center><br><hr>
               <center><b><h5>Name:{{$user->name}}</h5></b></center><hr>
               @if($user->organization_id==1)
               <center><b><h5>Organization:BayBD</h5></b></center><hr>
               @elseif($user->organization_id==3)
               <center><b><h5>Organization:Waste Health And Education Foundation</h5></b></center><hr>
               @elseif($user->organization_id==4)
               <center><b><h5>Organization:Association To Assist the Under Privileged</h5></b></center><hr>
               @endif

               <center><b><h5>Designation:{{$user->designation}}</h5></b></center><hr>
               <center><b><h5>Phone:{{$user->phone}}</h5></b></center><hr>
               <center><b><h5>Address:{{$user->address}}</h5></b></center><hr>
                
           
              
               @endforeach
                </div>
              </div>
            </div>


@endsection