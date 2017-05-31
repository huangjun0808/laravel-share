<div class="spe-nav">
    <div class="container">
        <nav class="nav">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="{{!Request::route()->label?'active':''}}" href="{{url('/')}}">
                        <i class="fa fa-home"></i>
                        首页
                    </a>
                </li>
                <li class="nav-item">
                    <a>
                        <span class="split"></span>
                    </a>
                </li>
                @foreach(Request::get('labelMenus') as $label)
                    <li class="nav-item">
                        <a class="{{ Request::route()->label == $label['name'] ? 'active' : '' }}" href="{{url('t/'.$label['name'])}}">{{$label['name']}}</a>
                    </li>
                @endforeach
                <li class="nav-item nav-item-more">
                    <a class="nav-item-ellipsis-h" href="#">
                        <i class="fa fa-ellipsis-h"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>