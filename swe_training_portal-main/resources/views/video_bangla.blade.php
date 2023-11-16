@extends('layouts.master')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>বিভিন্ন অনুষ্ঠান ও প্রোগ্রামের ভিডিও </h2>

                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <!-- start single gallery image -->
                                    <div style="overflow-x:auto;">


                                    @foreach($vidos as $vido)

                                    {!! $vido->source !!}

                                    &nbsp   &nbsp    &nbsp

                                    @endforeach



</div>
                                </ul>
                                <br>
                               
                                {{ $vidos->links('pagination::bootstrap-4')}}

                            </div>
                        </div>
                        <!-- end gallery content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End gallery  -->

@endsection

