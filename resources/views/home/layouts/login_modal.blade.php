<div class="modal" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="#modal-label">登录</h4>
            </div>
            <div class="modal-body">
                <div class="row mb20 login-modal">
                    <div class="col-md-4 col-md-push-7">
                        <h4>用户登录</h4>
                        <form role="form" id="loginFormModal" class="mt30" method="post" action="{{url('login')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label" for="username_login_modal">手机号 或 Email</label>
                                <input type="text" class="form-control" id="username__login_modal" name="username" placeholder="11位手机号或Email">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password_login_modal">密码</label>
                                <input type="password" class="form-control" id="password_login_modal" name="password" placeholder="密码(不少于6位数)">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group clearfix">
                                <div class="checkbox pull-left">
                                    <label>
                                        <input type="checkbox" name="remember"> 记住登录状态
                                    </label>
                                </div>
                                <input type="submit" class="btn btn-success pull-right" value="登录">
                            </div>
                        </form>
                    </div>
                    <div class="login-vline hidden-xs hidden-sm"></div>
                    <div class="col-md-4 col-md-pull-3">
                        <h4>注册新账户</h4>
                        <form role="form" class="mt30" id="registerFormModal" method="post" action="{{url('/register')}}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="control-label" for="nickname_register_modal">名字</label>
                                <input type="text" class="form-control" id="nickname_register_modal" name="nickname" placeholder="真实姓名或常用昵称">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">
                                    <label class="radio-inline">
                                        <input type="radio" name="register_type" value="mobile" checked onchange="$('.spe-email').hide();$('.spe-mobile').show();"> 用手机号注册
                                    </label>
                                    <label class="radio-inline">
                                        <input type="radio" name="register_type" value="email" onchange="$('.spe-email').show();$('.spe-mobile').hide();"> 用Email注册
                                    </label>
                                </label>
                                <div class="spe-mobile">
                                    <input type="text" class="form-control" id="mobile_register_modal" name="mobile" placeholder="仅支持大陆手机号">
                                </div>
                                <div class="spe-email" style="display: none">
                                    <input type="text" class="form-control" id="email_register_modal" name="email" placeholder="hello@segementfault.com">
                                </div>
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group spe-mobile">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="code_register_modal" name="code" placeholder="短信验证码">
                                    <span class="input-group-btn" style="min-width: 100px;">
                                        <button type="button" class="btn btn-default btn-block" onclick="register.sendCode(this);">获取验证码</button>
                                    </span>
                                </div>
                                <span class="help-block"></span>
                            </div>

                            <div class="form-group">
                                <label for="password_register_modal">密码</label>
                                <input type="password" class="form-control" id="password_register_modal" name="password" placeholder="密码(不少于6位)">
                                <span class="help-block"></span>
                            </div>
                            <div class="form-group clearfix">
                                <div class="checkbox pull-left">
                                    同意并接受<a href="#" class="text-success">《服务条款》</a>
                                </div>
                                <input type="submit" class="btn btn-success pull-right" value="注册">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function () {
        var _timer;
        var _seconds;
        var _isFirst = false;
        function timedSeconds(){
            if(!_isFirst){
                _timer = setInterval(timedSeconds,1000);
                _isFirst = true;
            }
            $('#seconds').html(_seconds);
            if(_seconds == 0){
                clearInterval(_timer);
                $('#seconds').parents('.form-group').removeClass('has-error').find('.help-block').html('');
                _isFirst = false;
            }
            _seconds -= 1;
        }

        $('#loginFormModal').submit(function () {
            var _this = $(this);
            var _method = _this.attr('method');
            var _url = _this.attr('action');
            var _data = _this.serialize();
            $.ajax({
                url:_url,
                type:_method,
                data:_data,
                dataType:"json",
                success: function (data) {
                    if(data.status == 200){
                        location.reload();
                    }else{
                        var _data = data.data;
                        _this.find('.form-group').removeClass('has-error');
                        $.each(_data, function (name, value) {
                            var _form_group = _this.find('input[name="'+name+'"]').parents('.form-group');
                            _form_group.addClass('has-error');
                            _form_group.find('.help-block').first().html(value);
                        });
                        if(data.status == 1){
                            console.log(data.seconds);
                            _seconds = data.seconds;
                            timedSeconds();
                        }
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.readyState == 4 && XMLHttpRequest.status == 422) {
                        var _data = XMLHttpRequest.responseJSON;
                        _this.find('.form-group').removeClass('has-error');
                        $.each(_data, function (name, value) {
                            var _form_group = _this.find('input[name="'+name+'"]').parents('.form-group');
                            _form_group.addClass('has-error');
                            _form_group.find('.help-block').first().html(value);
                        });
                    }
                }
            });
            return false;
        });

        $('#registerFormModal').submit(function () {
            var _this = $(this);
            var _method = _this.attr('method');
            var _url = _this.attr('action');
            var _data = _this.serialize();
            $.ajax({
                url:_url,
                type:_method,
                data:_data,
                dataType:"json",
                success: function (data) {
                    if(data.status == 200){
                        location.reload();
                    }else{
                        var _data = data.data;
                        _this.find('.form-group').removeClass('has-error');
                        $.each(_data, function (name, value) {
                            var _form_group = _this.find('input[name="'+name+'"]').parents('.form-group');
                            _form_group.addClass('has-error');
                            _form_group.find('.help-block').first().html(value);
                        });
                        if(data.status == 1){
                            console.log(data.seconds);
                            _seconds = data.seconds;
                            timedSeconds();
                        }
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.readyState == 4 && XMLHttpRequest.status == 422) {
                        var _data = XMLHttpRequest.responseJSON;
                        _this.find('.form-group').removeClass('has-error');
                        $.each(_data, function (name, value) {
                            var _form_group = _this.find('input[name="'+name+'"]').parents('.form-group');
                            _form_group.addClass('has-error');
                            _form_group.find('.help-block').first().html(value);
                        });
                    }
                }
            });
            return false;
        });

        $(document).on('focus','#loginModal input[name]', function () {
            var _form_group = $(this).parents('.form-group');
            if(_form_group.hasClass('has-error')){
                _form_group.removeClass('has-error');
                _form_group.find('.help-block').first().html('');
            }
        });
    });
</script>