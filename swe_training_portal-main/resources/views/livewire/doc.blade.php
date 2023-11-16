@extends('layouts.app')

@section('content')
    <!-- Start gallery  -->
    <section id="mu-gallery">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-gallery-area">
                        <!-- start title -->
                        <div class="mu-title">
                            <h2>All Documents</h2>

                        </div>
                        <!-- end title -->
                        <!-- start gallery content -->
                        <div class="mu-gallery-content">
                            <div class="mu-gallery-body">
                                <ul id="mixit-container" class="row">
                                    <!-- start single gallery image -->
                                    <div style="overflow-x:auto;">
  <table>
    <tr>
      <th><center>Title</center></th>
      <th><center>Date</center></th>
      <th><center>Read</center></th>
    </tr>
     @foreach($events as $event)
    <tr>
      <td><center>{{$event->name}}</center></td>
      <td><center>{{$event->date}}</center></td>
      <td>
<center>
<a class="image-link" target="_blank" href="/images/{{$event->filename}}"><img src="/images/pdf.png" class="img-responsive" loading="lazy" height="75px" width="75px">
</center>

    </tr>
   @endforeach
  </table>


</div>
                                </ul>
                                <br>
                                {{ $events->links('pagination::bootstrap-4')}}

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

