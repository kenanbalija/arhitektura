@extends('layouts.app')

@section('content')
@include('navigations.english')
    <div class="container">
        <div class="row">
            @foreach ($albums as $album)
                <div class="col-xs-12 col-sm-6">
                    <a style="text-align:center;" href="{{ url('/projects/view/'.$album->id) }}"><h3>{{ $album->name }}</h3>
                        <div class="row">
                            @if (count($album->images) > 0)
                                @for ($i = 0; $i < 1; $i++)
                                    <div class="albumImageCont">
                                        <img  class="albumImage"  src="{{ url($album->images[$i]->file_path)}}" alt="">
                                    </div>
                                @endfor
                            @endif
                        </div>
                    </a>

            </div>
        @endforeach
        </div>
        @if(Auth::user())
            <br/>
            <section class="">
              <form class="project_form form" action="{{ url('/projects/create') }}" method="post" enctype="multipart/form-data">
                <input  type="hidden" name="_token" value="{{ csrf_token() }}">
                <h4>Here you write project name on english</h4>
                <input class="form-control"  type="text" name="name" placeholder="Project name" required=""><br>
                <h4>Еве што пишува името на проектот за Македонски</h4>
                <input class="form-control"  type="text" name="name_mk" placeholder="Име на проектот" required=""><br>
                <input class="btn btn-warning" type="submit" name="" value="Create">
              </form>
            </section>
         @endif
    </div>


@endsection

