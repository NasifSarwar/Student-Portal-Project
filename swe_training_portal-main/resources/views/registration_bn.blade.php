@extends('layouts.master')
@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Registration</h2>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End breadcrumb -->

    <!-- Start contact  -->
    <section id="mu-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-contact-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>Registration</h2>
                        </div>

                        <br> <br><br> <br>
                          
                        @if (session()->has('success'))

<div class="alert alert-success alert-dismissible" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          
          You will receive an mail within 48 hours if you are approved by admin

        </div>
@endif



                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-offset-2 col-md-8">
                                    <div class="mu-contact-left">
                                        <form class="contactform" action="/registration" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <p class="comment-form-author">
                                                <label for="author">Name[নাম]: <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" name="name" placeholder="Your name..">
                                                @if ($errors->first('name'))<div class="alert alert-danger">{!! $errors->first('name') !!}</div> @endif
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">Email[ইমেইল]:<span class="required">*</span></label>
                                                <input type="email" name="email" placeholder="Your Email..">
                                                @if ($errors->first('email'))<div class="alert alert-danger">{!! $errors->first('email') !!}</div> @endif
                                            </p>
                                            <p class="comment-form-email">
                                                <label for="email">phone[ফোন]:<span class="required">*</span></label>
                                                <input type="number" name="phone" style="width: 100%;height: 36px" placeholder="Your Phone..">
                                                @if ($errors->first('phone'))<div class="alert alert-danger">{!! $errors->first('phone') !!}</div> @endif
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="email">District[জেলা]:
                            <span class="required">*</span></label>
                                                <select id="country" name="district" style="width: 100%;height: 36px;">
                                                   <option value="">Choose yours district</option>
                                                   @foreach($districts as $district)
                                                    <option value="{{$district->name_english}}">{{$district->name_english}}</option>
                                                    @endforeach
                                                    <option value="Cumilla">Cumilla</option>
                                                    <option value="Khulna">Khulna</option>
                                                </select>
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Institution[শিক্ষা প্রতিষ্ঠান]: <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" name="institution" placeholder="Your institution..">
                                                @if ($errors->first('institution'))<div class="alert alert-danger">{!! $errors->first('institution') !!}</div> @endif
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Class[শ্রেণী]: <span class="required">*</span></label>
                                                <input type="text" required="required" size="30" name="class" placeholder="Your class..">
                                                @if ($errors->first('class'))<div class="alert alert-danger">{!! $errors->first('class') !!}</div> @endif
                                            </p>
                                            <p class="comment-form-author">
                                                <label for="author">Image[ছবি][optional]:</label>
                                                <input type="file" name="photo">
                                            </p>
                                            <p class="form-submit">
                                                <input type="submit" value="Submit" class="mu-post-btn" name="submit">
                                            </p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end contact content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End contact  -->

@endsection

