@extends('layouts.app')

@section('content')
@include('navigations.english')

<!-- Page Content -->
        <div class="page-content-wrapper">
            <div class="container" style="padding: 0;">
                <div class="row-fluid">
                    <div class="span6 offset3">
                        <div id="myCarousel" class="carousel slide vertical">
                            <!-- Carousel items -->
                            <div class="carousel-inner">
                                <div class="active item">
                                    <img src="{{ asset('img/c1.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('img/c2.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('img/c3.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('img/c4.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
@endsection