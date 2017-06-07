@extends('home.layouts.base')

@section('title','首页')

@section('body_css','spe-ask')

@section('navbar')
    @include('home.layouts.navbar_ask')
@stop
@section('tabbar')
@stop
@section('wrap')
    <div class="wrap">
        <div class="ask ask-container">
            <form role="form" method="post" action="">
                <div class="form-group">
                    <label class="sr-only">标题</label>
                    <input type="text" class="form-control input-lg" placeholder="标题：一句话说清问题，用问号结尾">
                </div>
                <div class="form-group">
                    <label class="sr-only">标题</label>
                    <input type="text" class="form-control" placeholder="标签，如：php 可使用逗号,分号;分隔">
                </div>
                <div class="form-group">
                    <label class="sr-only">标题</label>
                    <div class="editor">
                    <textarea id="myEditor"></textarea>
                        </div>
                </div>
            </form>

        </div>
    </div>
@stop
@section('footer')
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('static/libs/BachEditor/build/build.css')}}">
@stop
@section('script')
    <script src="{{asset('static/libs/BachEditor/build/build.js')}}"></script>
@stop