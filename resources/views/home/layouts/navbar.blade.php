<nav class="navbar navbar-default spe-navbar" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle spe-toggle" data-toggle="collapse"
                    data-target="#navbar-collapse">
                <span class="sr-only">切换导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}">技术分享社区</a>
            <a class="navbar-brand pull-right visible-xs" href="#"><i class="fa fa-user-o"></i></a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="{{url('/')}}">问答</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right hidden-xs">
                @if(auth('web')->guest())
                    <li><a href="#loginModal" data-toggle="modal">注册 · 登录</a></li>
                @else
                    <li>
                        <a class="avatar nav-avatar dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" aria-expanded="false" href="javascript:;" style="background-image: url('../../../../static/images/user-64.png');"></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">我的主页</a></li>
                            <li><a href="#">我的档案</a></li>
                            <li><a href="#">我的资产</a></li>
                            <li><a href="#">账号设置</a></li>
                            <li>
                                <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">退出</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">返回主页</a></li>
                            <li><a href="#">建议反馈</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
            <form class="navbar-form navbar-right hidden-xs mr20" role="search">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="输入关键字搜索" value="{{ auth('web')->check()?auth('web')->user()->nickname:'...' }}">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                        </span>
                </div>
            </form>
        </div>
    </div>
</nav>