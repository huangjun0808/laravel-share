<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>@yield('title','segmentFault') - 开发者社区</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{asset('static/libs/bootstrap/3.3.5/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/libs/font-awesome/4.7.0/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/libs/ionicons/2.0.1/css/ionicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/global.css')}}" rel="stylesheet">
    @yield('link')

    <script src="{{asset('static/libs/jquery/2.1.4/jquery.min.js')}}"></script>
    <script src="{{asset('static/libs/bootstrap/3.3.5/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('static/libs/bootstrap-hover-dropdown/2.2.1/js/bootstrap-hover-dropdown.min.js')}}"></script>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        $(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });
    </script>
</head>
<body>
@if(count($errors)>0)
    {{dump($errors->getMessages())}}
@endif
    @section('navbar')
        @include('home.layouts.navbar')
    @show
    @section('tabbar')
        @include('home.layouts.tabbar')
    @show
    <div class="wrap">
        <div class="container">
            @section('wrap')
            @yield('wrap_header')
            <div class="row">
                <div class="col-md-9">
                    @yield('wrap_left')
                </div>
                <div class="col-md-3">
                    @yield('wrap_right')
                </div>
            </div>
            @show
        </div>
    </div>
    @section('footer')
        @include('home.layouts.footer')
    @show
    @include('home.layouts.login_modal')
    @yield('script')
</body>
</html>