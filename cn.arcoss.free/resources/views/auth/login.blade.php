<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>登录 - 后台管理</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
    <style type="text/css" media="screen">
      .modal-footer {   border-top: 0px; }
    </style>
	</head>
	<body>
<!--login modal-->
<div id="loginModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --}}
          <h1 class="text-center">后台管理</h1>
      </div>
      <div class="modal-body">
        @include('errors.list')
          <form class="form col-md-12 center-block" method="post" action="{{ URL('admin') }}">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="账号" name="account">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="密码" name="password">
            </div>
            <div class="row">
              <div class="col-xs-12 col-md-8">
                <input type="text" class="form-control input-lg" placeholder="验证码" name="captcha">
              </div>
              <div class="col-xs-6 col-md-4">
                <img src="{{ Captcha::src('flat') }}" alt="captcha" id="captcha" title="点击刷新" style="cursor:pointer;">
              </div>
            </div>
            <br>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg btn-block">登	录</button>
              {{-- <span class="pull-right"><a href="#">Register</a></span><span><a href="#">Need help?</a></span> --}}
            </div>
          </form>
      </div>
      <div class="modal-footer">
          {{-- <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
		  </div> --}}
      </div>
  </div>
  </div>
</div>
	<!-- script references -->
		<script src="{{ asset('plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
		<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript">
      $('#captcha').on('click', function(){
        $('img').attr('src', "{{ Captcha::src('flat') }}" + Math.floor(Math.random()*10000+1));
      });

      $(function(){
        $('div.alert').delay(2500).slideUp(400);
        $("input[name='account']").focus();
      });
    </script>
	</body>
</html>