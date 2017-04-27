<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Studio 4a') }}</title>
    <!-- Dropzone -->
    <link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
    <!-- Styles -->
    <link href="{{ asset('css/simple-sidebar.css') }}" rel="stylesheet">
    <!-- Lightbox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.css">
        <!--  Boostrap css file  -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Scripts -->
        <!--  Boostrap js file  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>
<button class="btn btn-default" id="toggle_button" style="width: 100%; z-index: 2200; background-color: black; color: white; ">Menu</button>
    <div id="app">

        <div class="wrapper">   
            @yield('content')

        </div>
    </div>
    <!-- Dropzone -->
    <script src="https://rawgit.com/enyo/dropzone/master/dist/dropzone.js"></script>
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <!-- Menu Toggle Script -->
    <script>
    $(".menu-toggle").click(function(e) {
        e.preventDefault();
        $(".wrapper").toggleClass("toggled");
    });
        $('.carousel').carousel({
       interval: 3000
    })
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.1.1/ekko-lightbox.min.js.map"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
    <script>
        $(document).ready(function(){
            $(".flash_message").delay(3000).fadeOut(500);
        });
    </script>
    <script src="//cdn.ckeditor.com/4.6.2/full/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'novost_body' );
    </script>
    <script>
        CKEDITOR.replace( 'novost_body_mk' );
    </script>
    <script type="">
        $(document).ready(function(){
            $('#toggle_button').click(function() {
                $('.sidebar-wrapper').toggleClass('sidebarToggle');
            });
        });
    </script>
</body>
</html>
