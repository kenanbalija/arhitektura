@extends('layouts.app')
@section('content')
@include('navigations.macedonian')
 
 <br><br>
<section class="container">
    <div class="row">
      <div class="col-xs-12">
          <div class="newsTitle">
           <h2 style="text-align: center;">{{ $novosti->novost_title_mk }}</h2>
          </div><br/>
          @if($novosti->novost_img)
            <img class="col-xs-12 col-md-6 " src="{{ url('/img/news/'.$novosti->novost_img)}}">
          @endif
          <div class="col-xs-12 col-md-6 " style="font-size: 14px">
            {!!$novosti->novost_body_mk !!}
              <div class="col-xs-12">
          </div>
      </div>


    </div>
</section>
<br>
@if(Auth::user())
<div class="container">
  <h3 style="text-align: center;"><strong>промена Вести</strong></h3>
  <form class="" role="form" method="POST" action="{{ url('/news/update/save', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <h4>Here you write title & text on english</h4>
    <input class="form-control" type="text" name="novost_title" value="{{ $novosti->novost_title }}"><br/><br/>
    <textarea type="text" name="novost_body" value="">{{ $novosti->novost_body }}</textarea><br/><br>
    <h4>Еве што пишува насловот и текстот на македонски</h4>
    <input class="form-control" type="text" name="novost_title" value="{{ $novosti->novost_title_mk }}"><br/><br/>
    <textarea type="text" name="novost_body_mk" value="">{{ $novosti->novost_body_mk }}</textarea><br/><br>

    <input  class="" size="60" type="file" placeholder="Slika" name="novost_img"><br/>

    <input class="btn btn-warning" type="submit" value="UPDATE">
  </form>
    <br>

</div>
<section class="container">
  <form role="form" method="POST" action="{{ url('/news/update/delete', $novosti->id) }}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input class="btn btn-danger" type="submit" value="DELETE">
  </form>
</section>
@endif
<br><br>
@stop
