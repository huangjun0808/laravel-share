<div class="alert alert-warning">
    <div class="slider-login">
        <p><strong>SegmentFault</strong></p>
        <p>一个能提高开发技能的社区</p>
        <form class="form-horizontal" id="registerSidebarForm" role="form" method="post" action="{{url('register')}}">
            {{csrf_field()}}
            <input type="hidden" name="register_type" value="mobile">
            <div class="form-group">
                <label for="nickname_row_right" class="sr-only control-label">名字</label>
                <div class="col-sm-12">
                    <input type="text" id="nickname_row_right" class="form-control" name="nickname" placeholder="真实姓名或常用昵称">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="mobile_row_right" class="sr-only control-label">手机</label>
                <div class="col-sm-12">
                    <input type="text" id="mobile_row_right" class="form-control" name="mobile" placeholder="手机号(仅支持大陆手机号)">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="code_row_right" class="sr-only control-label">短信验证码</label>
                <div class="col-sm-12">
                    <div class="input-group">
                        <input type="text" id="code_row_right" name="code" class="form-control" placeholder="短信验证码">
                            <span class="input-group-btn" style="min-width: 100px;">
                                <button class="btn btn-default btn-block" type="button" onclick="register.sendCode(this);">短信验证码</button>
                            </span>
                    </div>
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <label for="password_row_right" class="sr-only control-label">密码</label>
                <div class="col-sm-12">
                    <input type="password" id="password_row_right" class="form-control" name="password" placeholder="密码(不少于6位)">
                    <span class="help-block"></span>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <input type="submit" class="form-control btn btn-success" value="注册">
                </div>
            </div>
        </form>
        <div class="text-center ft13">
            已有账号?<a class="text-success" href="#loginModal" data-toggle="modal">立即登录</a>
        </div>
    </div>
</div>
<script>
    $(function () {

        $('#registerSidebarForm').submit(function () {
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
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.readyState == 4 && XMLHttpRequest.status == 422) {
                        var _data = XMLHttpRequest.responseJSON
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

        $(document).on('focus','#registerSidebarForm input[name]', function () {
            var _form_group = $(this).parents('.form-group');
            if(_form_group.hasClass('has-error')){
                _form_group.removeClass('has-error');
                _form_group.find('.help-block').first().html('');
            }
        });

    });

    var timer = {
        options:{
            _this:'',
            _seconds: 60,
            _isFirst: true,
        },
        code: function (e, _seconds) {
            timer.options._seconds = _seconds
            e.attr('disabled','').html(_seconds+'s').css('cursor','default');
            var _timer = setInterval(timedSeconds,1000);
            function timedSeconds(){
                timer.options._seconds -= 1;
                if(timer.options._seconds == 0){
                    clearInterval(_timer);
                    e.html('短信验证码').css('cursor','pointer').removeAttr('disabled').parents('.form-group').removeClass('has-error');
                    return true;
                }
                e.html(timer.options._seconds+'s');
            }
        },
    }

    var register = {
        'sendCode': function (e) {
            var _this = $(e);
            var _form_group = _this.parents('.form-group');
            var _method = 'post';
            var _url = '{{url('register/send')}}';
            var _input_data = {mobile:_this.parents('form').find('input[name="mobile"]').val()};
            $.ajax({
                url:_url,
                type:_method,
                data:_input_data,
                dataType:"json",
                success: function (data) {
                    if(data.status == 200){
                        timer.code(_this,data.seconds);
                    }
                    if(data.status == 2){
                        $.each(data.data, function (name, value) {
                            _form_group.addClass('has-error');
                            _form_group.find('.help-block').first().html(value[0]);
                        });
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    if(XMLHttpRequest.readyState == 4 && XMLHttpRequest.status == 422) {
                        var _output_data = XMLHttpRequest.responseJSON;
                        _this.parents('form').find('.form-group').removeClass('has-error');
                        $.each(_output_data, function (name, value) {
                            var _form_group_ = _this.parents('form').find('input[name="'+name+'"]').parents('.form-group');
                            _form_group_.addClass('has-error');
                            _form_group_.find('.help-block').first().html(value[0]);
                        });
                    }
                }
            });
        },
    }
</script>