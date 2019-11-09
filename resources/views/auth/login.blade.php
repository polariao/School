<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>报名系统</title>
    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/style.css')}}" rel="stylesheet">
</head>
<style>
    body{
        background-image: url("{{asset('static/img/bg.jpg')}}")  ;
        background-size:cover;
    }
</style>
<body class="gray-bg" >
<div class="middle-box text-center loginscreen animated fadeInDown">
    <div>
        <div style="font-size: 30px;margin-top: 50px;text-align: center">报名后台管理系统</div>
        <div style="font-size: 20px;margin-top: 30px;text-align: center">登&nbsp;&nbsp;&nbsp;&nbsp;录</div>

        <form class="m-t" role="form" method="POST" action="{{ route('login') }}">

            <div class="form-group">
                <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="邮箱" required autofocus>
            </div>

            @csrf
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="密码" required>
            </div>
            <button type="submit" class="btn btn-primary block full-width m-b">登录</button>
        </form>
        <p class="m-t"> <small>we app framework base on Bootstrap 3 &copy; 2019</small> </p>
    </div>
</div>
<!-- Mainly scripts -->
<script src="{{asset('static/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
</body>
</html>


