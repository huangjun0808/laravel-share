@extends('home.layouts.base')

@section('title','首页')

@section('wrap_left')
    <div class="panel panel-default">
        <div class="panel-heading label-info">
            <div class="label-title">
                @if($label['icon'])
                <img class="l-img avatar-20" src="{{$label['icon']}}">
                @endif
                <span class="l-n">{{$label['name']}}</span>
                <a class="btn btn-default btn-xs">加关注</a>
            </div>
            <p class="label-p">
                {{$label['content']}}<a class="text-success" href="#">[百科]</a>
            </p>
        </div>
    </div>
    <ul class="nav nav-tabs nav-tabs-spe nav-tabs-spe-t mb10 ft18">
        <li class="active">
            <a href="#"><i class="fa fa-question-circle"></i>问答</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-file-text"></i>文章</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-black-tie"></i>职位</a>
        </li>
        <li>
            <a href="#"><i class="fa fa-wikipedia-w"></i>百科</a>
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
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                <div class="answers solved">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                <div class="answers">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                <div class="answers solved">
                    0
                    <small>回答</small>
                </div>
                <div class="views hidden-xs">
                    0
                    <small>浏览</small>
                </div>
            </div>
            <div class="summary">
                <ul class="author">
                    <li>
                        <a href="#">我叫huang</a>
                        <span class="split"></span>
                        <a href="#">刚刚回答</a>
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
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
                <li>
                    <img class="avatar-24" src="../../../../static/images/108108.png">
                    <a class="ellipsis text-success" href="#">miccres</a>
                    <span class="text-muted pull-right">+1000</span>
                </li>
            </ol>
        </div>
    </div>
@stop