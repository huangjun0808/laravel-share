@extends('home.layouts.base')

@section('title','首页')

@section('wrap_left')
    <ul class="nav nav-tabs nav-tabs-spe mb10">
        <li>
            <a href="#">最新动态</a>
        </li>
        <li class="active">
            <a href="{{url('questions')}}">最新回答</a>
        </li>
        <li>
            <a href="{{url('questions/hottest')}}">热门回答</a>
        </li>
        <li>
            <a href="{{url('questions/unanswered')}}">等待回答</a>
        </li>
    </ul>
    <div class="list-group list-group-spe">
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">jahdji</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">api 使用session替代token 的利弊在哪？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">laravel</a>
                    </li>
                    <li>
                        <a class="tag" href="#">php</a>
                    </li>
                    <li>
                        <a class="tag" href="#">session</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">卡机双开门</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">JS如何判断当前时间 是否在 每个月的 一号 到 十号之内？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">javascript</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">无UI你就按</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">excel 以文本格式保存的数字有什么区别？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">excel</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">绝了框架</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">关于thinkphp在阿里云服务器上部署的问题？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">thinkphp</a>
                    </li>
                    <li>
                        <a class="tag" href="#">centos</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">laklkwo</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">Memcache的使用方法和场景？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">redis</a>
                    </li>
                    <li>
                        <a class="tag" href="#">memcache</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    2
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">PHP如何正确的判断客户访问使用的浏览器？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">php</a>
                    </li>
                    <li>
                        <a class="tag" href="#">java</a>
                    </li>

                </ul>
            </div>
        </li>

        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers answered">
                    2
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    4
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我spe</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">mysql innodb 锁机制问题请教</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">mysql</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers solved">
                    6
                    <small>解决</small>
                </div>
                <div class="views hidden-xs">
                    16
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">Vom</a>
                        <span class="split"></span>
                        <a href="#">5分钟前回答</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">table表头固定，tbody的内容超出固定高度出现滚动条这个怎么弄？只是tbody上下滚动</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">javascript</a>
                    </li>
                    <li>
                        <a class="tag" href="#">css</a>
                    </li>
                    <li>
                        <a class="tag" href="#">html</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    5
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我GB啊啊就少了</a>
                        <span class="split"></span>
                        <a href="#">9分钟前提问</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">jquery weui的picker插件多列如何取消空格？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">jquery</a>
                    </li>
                    <li>
                        <a class="tag" href="#">weui</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    0
                    <small>得票</small>
                </div>
                <div class="answers answered">
                    3
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    20
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">进口红酒</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">ASP.NET .NET ASP MVC这四个东西是什么关系？什么意思？</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">asp.net</a>
                    </li>
                    <li>
                        <a class="tag" href="#">c#</a>
                    </li>

                </ul>
            </div>
        </li>
        <li class="list-group-item">
            <div class="qr-rank">
                <div class="votes hidden-xs">
                    1
                    <small>得票</small>
                </div>
                <div class="answers solved">
                    9
                    <small>解决</small>
                </div>
                <div class="views hidden-xs">
                    33
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">ahjkli</a>
                        <span class="split"></span>
                        <a href="#">10分钟前回答</a>
                    </li>
                </ul>
                <h2 class="title">
                    <a href="#">php输出乱码</a>
                </h2>
                <ul class="taglist">
                    <li>
                        <a class="tag" href="#">php</a>
                    </li>
                    <li>
                        <a class="tag" href="#">mysql</a>
                    </li>

                </ul>
            </div>
        </li>
    </div>
@stop
@section('wrap_right')
    @if(Auth::guard('web')->guest())
        @include('home.layouts.register_sidebar_right')
    @endif
    <div class="panel panel-spe pt20">
        <div class="panel-heading">
            <div class="panel-title">
                排行榜
                <div class="pull-right spe-data">
                    <a href="#" class="text-success">今天</a>·
                    <a href="#" class="text-success">本周</a>·
                    <a href="#" class="text-success">更多</a>
                </div>
            </div>
        </div>
        <div class="panel-body">
            <ol class="spe-widget">
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+676</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">jahdkhak</a>
                    <span class="text-muted pull-right">+454</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">afafa</a>
                    <span class="text-muted pull-right">+432</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">afafaf</a>
                    <span class="text-muted pull-right">+421</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">无UI你就按</a>
                    <span class="text-muted pull-right">+336</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">ad222</a>
                    <span class="text-muted pull-right">+333</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">uahdiuhwi</a>
                    <span class="text-muted pull-right">+234</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">afafaf</a>
                    <span class="text-muted pull-right">+222</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">fafa</a>
                    <span class="text-muted pull-right">+189</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">fa1f33</a>
                    <span class="text-muted pull-right">+99</span>
                </li>
            </ol>
        </div>
    </div>
@stop