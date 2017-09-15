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
                    <span class="help-block"></span>
                </div>
                <div class="form-group">
                    <label class="sr-only">标签</label>
                    <div class="form-control">
                        <span class="form-control-label">jhjkh<span>&times;</span></span>
                        <input type="text" id="label" class="form-control-spe" placeholder="标签，如：php 可使用逗号,分号;分隔">
                    </div>
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
    <script src="{{asset('static/libs/typeahead/0.11.0/typeahead.bundle.min.js')}}"></script>
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
            'unorderlist',
            'orderlist',
            '|',
            'link',
            'unlink',
            'table',
            '|',
            'img',
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
    <script>
//        远程数据源
        var remote_labels = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            // 在文本框输入字符时才发起请求
            remote: "{{asset('static/libs/typeahead/data.json')}}?q=12"
        });
        remote_labels.initialize();
        $('#label').typeahead({
            hint: false,
            highlight: true,
            minLength: 1,
                    items:6,
        },
        {
            name: 'labels',
            displayKey: 'value',
            source: remote_labels.ttAdapter(),
        });
    </script>
    <script>
//        $(function () {
//            /*** 1.基本示例 ***/
//            var provinces = ["广东省","1", "海南省", "山西省", "山东省","湖北省", "湖南省", "陕西省", "上海市", "北京市", "广西省"];
//
//            var substringMatcher = function (strs) {
//                return function findMatches(q, cb) {
//                    var matches, substrRegex;
//                    matches = [];//定义字符串数组
//                    substrRegex = new RegExp(q, 'i');
//                    //用正则表达式来确定哪些字符串包含子串的'q'
//                    $.each(strs, function (i, str) {
//                        //遍历字符串池中的任何字符串
//                        if (substrRegex.test(str)) {
//                            matches.push({ value: str });
//                        }
//                        //包含子串的'q',将它添加到'match'
//                    });
//                    cb(matches);
//                };
//            };
//
//            $('#label').typeahead({
//                        highlight: true,
//                        minLength: 1
//                    },
//                    {
//                        name: 'provinces',
//                        displayKey: 'value',
//                        source: substringMatcher(provinces)
//                    });
//
//        });

    </script>
@stop