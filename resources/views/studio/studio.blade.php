@extends('layouts.app')

@section('content')
@include('navigations.english')
    <div class="container">
    <h1 style="text-align: left; font-weight: 700;">STUDIO 4A</h1><br/>
        <div id="studioImg" class="row">
        <div class="col-xs-12 col-lg-8">
            <img style="width: 100%;" src="{{asset('img/4a.jpg')}}">
        </div>

        <div class="col-xs-12 col-lg-4">
        <h2>TEAM</h2>
            <ul>
                <li>Enes Hamidovic <em>Bachelor of Architecture</em></li>
                <li>Muhamed Ljajic <em>Bachelor of Architecture</em></li>
                <li>Dragana Jolovic <em>Bachelor of Architecture</em></li>
                <li>Mithad Spahic <em>Bachelor of Architecture</em></li>
            </ul>
        </div>
        </div>
        <div class="studioContact row">
            <div class="col-xs-12 col-lg-8"></div>
            <div class="col-xs-12 col-lg-4 ">  
            <h2>CONTACT</h2>
                <ul>
                    <li><em>+39878330848</em></li>
                    <li><em>+38971550284</em></li>
                    <li><em>4astudiomk@gmail.com</em></li>
                    <li><em>1000, Skopje</em></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
