@extends('layouts.app')
@section('content')
@include('navigations.english')

@if(Auth::user())
<br/>
<div class="container">
  <form id="writeStory" class="form-group" role="form" method="POST" action="{{ url('/news/save') }}" enctype="multipart/form-data">
    <input  type="hidden" name="_token" value="{{ csrf_token() }}">
    <h4>Here you write title & text on english</h4>
    <input class="form-control" type="text" name="novost_title" placeholder="Title" required=""><br>
      <textarea class="form-control" type="text" name="novost_body" placeholder="English Text" required=""></textarea><br>
    <h4>Еве што пишува насловот и текстот на македонски</h4>
      <input class="form-control" type="text" name="novost_title_mk" placeholder="Наслов
" required=""><br>
      <textarea class="form-control" type="text" name="novost_body_mk" placeholder="Mакедонски текст" required=""></textarea><br>
    <input  class="" size="60" type="file" placeholder="Slika" name="novost_img"><br/>
    <input class="btn btn-warning" type="submit" value="Save">
  </form>
</div>
<br>
  @endif
@stop
