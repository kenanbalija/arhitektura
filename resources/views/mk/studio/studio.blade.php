@extends('layouts.app')

@section('content')
@include('navigations.macedonian')
    <div class="container">
    <h1 style="text-align: left; font-weight: 700;">СТУДИО 4А</h1><br/>
        <div id="studioImg" class="row">
        <div class="col-xs-12 col-lg-8">
            <img style="width: 100%;" src="{{asset('img/4a.jpg')}}">
        </div>

        <div class="col-xs-12 col-lg-4">
        <h2>ТИМ</h2>
            <ul>
                <li>Енес Хамидовиќ <em>дипл.арх.</em></li>
                <li>Мухамед Љајиќ <em>дипл.арх.</em></li>
                <li>Драгана Јоловиќ <em>дипл.арх.</em></li>
                <li>Митхад Спахиќ  <em>дипл.арх.</em></li>
            </ul>
        </div>
        </div>
        <div class="studioContact row">
            <div class="col-xs-12 col-lg-8"></div>
            <div class="col-xs-12 col-lg-4 ">  
            <h2>КОНТАКТ</h2>
                <ul>
                    <li><em>+39878330848</em></li>
                    <li><em>+38971550284</em></li>
                    <li><em>4astudiomk@gmail.com</em></li>
                    <li><em>1000, Скопје</em></li>
                </ul>
            </div>
        </div>
    </div>

@endsection
