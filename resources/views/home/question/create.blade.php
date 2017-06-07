@extends('home.layouts.base')

@section('title','首页')

@section('body_css','spe-ask')

@section('navbar')
    @include('home.layouts.navbar',['container'=>'ask-15 ask-container'])
@stop
@section('tabbar')
@stop
@section('wrap')
    <div class="wrap">
        <div class="ask ask-container">
            <form role="form" method="post" action="{{url('question')}}">
                {{csrf_field()}}
                <div class="form-group">
                    <label class="sr-only">标题</label>
                    <input type="text" class="form-control input-lg" name="title" placeholder="标题：一句话说清问题，用问号结尾">
                </div>
                <div class="form-group">
                    <label class="sr-only">标签</label>
                    <input type="text" class="form-control" name="tags" placeholder="标签，如：php 可使用逗号,分号;分隔">
                </div>
                <div class="form-group">
                    <label class="sr-only">内容</label>
                    <textarea id="myEditor" style="min-height: 550px;" name="content"></textarea>
                </div>
                <nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
                    <div class="ask ask-container clearfix">
                        <div style="float: right;margin: 15px 0;">
                            <input class="btn btn-primary" type="submit" value="发布问题">
                        </div>
                    </div>
                </nav>
            </form>
        </div>
    </div>
@stop
@section('footer')
@stop
@section('link')
    <link rel="stylesheet" href="{{asset('static/libs/wangEditor/2.1.23/css/wangEditor.min.css')}}">
@stop
@section('script')
    <script src="{{asset('static/libs/wangEditor/2.1.23/js/wangEditor.min.js')}}"></script>
    <script>
//        wangEditor.config.printLog = false;
        var editor = new wangEditor('myEditor');
        editor.config.menus = [
            'source',
            '|',
            'bold',
            'underline',
            'italic',
            'strikethrough',
            'eraser',
            'forecolor',
            'bgcolor',
            '|',
            'quote',
//            'fontfamily',
//            'fontsize',
//            'head',
            'unorderlist',
            'orderlist',
//            'alignleft',
//            'aligncenter',
//            'alignright',
            '|',
            'link',
            'unlink',
            'table',
//            'emotion',
            '|',
            'img',
//            'video',
//            'location',
            'insertcode',
            '|',
            'undo',
            'redo',
            'fullscreen'
        ];
        editor.config.uploadImgFileName = 'image';
        editor.config.uploadImgUrl = "{{url('upload/image')}}";
        // 设置 headers（举例）
        editor.config.uploadHeaders = {
            'X-CSRF-TOKEN': '{{csrf_token()}}'
        };
        editor.create();
    </script>
@stop