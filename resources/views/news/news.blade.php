@extends('layouts.app')

@section('content')
@include('navigations.english')

<br>

      <div class="container">
          <div class="row">
              <!-- <div class="col-md-6">
                  <img src="img/02.png" class="img-responsive">
              </div> -->
              <div class="col-xs-12">
                  <div class="about-text">
                      <div class="section-title">
                          <!-- <h4></h4> -->
                          <h2 style="text-align: center;"><strong>News</strong></h2>

                          <div style="width: 60px; margin: 0 auto;" class="clearfix"><hr></div>
                      </div>
                      <div>
                          @if(Auth::user())
                            <a class="btn btn-warning col-xs-12" href="{{url('/news/write')}}">Create new</a>
                              <br>
                          @endif
                      </div>
                      <div class="row">
                      @foreach ($novosti as $news)
                          <div class="col-xs-12 col-sm-6">
                              <a href="{{ url('/news/update/'.$news->id )}}">
                              <h3 style="text-align: center;">{{ $news->novost_title }}</h3>

                              @if($news->novost_img)
                                    <div  class="albumImageCont">
                                      <img class="albumImage" src="{{ url('/img/news/'.$news->novost_img)}}">
                                    </div> 
                              @endif
                              <div class="col-xs-12" style="padding: 10px 20px; font-size: 14px;">
                              {!! $news->novost_body !!}
                              </div>
                          </div>
                            </a><br>
                          @endforeach
                      </div>
                  </div>
                  <section style="margin: 0 auto; position: relative; width: 100%; text-align:center;">
                    {{ $novosti->links() }}
                  </section>
                  </div>

              </div>
          </div><br>

@endsection
