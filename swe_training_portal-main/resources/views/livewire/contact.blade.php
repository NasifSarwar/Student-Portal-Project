@extends('layouts.app')

@section('content')
    <!-- Page breadcrumb -->
    <section id="mu-page-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area">
                        <h2>Contact</h2>
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
                            <h2>Our Office</h2>
                      
                        </div>
                        <!-- end title -->
                        <!-- start contact content -->
                        <div class="mu-contact-content">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mu-contact-left">
                                    <p>   {!! $contact->description !!} </p>
                                </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mu-contact-right">
                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1201461995884!2d90.37235401421137!3d23.77873559361198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c0b3340c1c91%3A0xfec009b60808d80a!2sICT%20Tower!5e0!3m2!1sen!2sbd!4v1624219153272!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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

