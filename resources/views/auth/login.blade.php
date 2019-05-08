<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{__('xqwin.login.page')}}</title>
    <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body,html{margin:0;padding:0}
        body{background-color:#f5f5f5}
        .cmf-login{
            width:26%;
            margin: auto;
            border:0;
            border-radius: 0;
            position: absolute;
            top: 50%; left: 50%;
            -webkit-transform: translate(-50%,-50%);
            -ms-transform: translate(-50%,-50%);
            transform: translate(-50%,-50%);
        }
        .cmf-login .card-header{width:100%;padding:10px 0;text-align: center;background-color: #fff;border:0}
        .cmf-login .card-body label{font-size: 1rem}
        .cmf-login .card-body input{font-size: .8rem}
        .cmf-login .form-check{display: inline;}
        .cmf-login .login-btn{float: right }
    </style>
</head>
<body>

<div class="card cmf-login">
    <div class="card-header"><img class="cmf-logo" src="{{asset('static/images/xqwincmf.png')}}" width="200" alt="xqwin"></div>

    <div class="card-body">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
             <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>错误:</strong> {{ $error }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endforeach
        @endif
        <form action="" method="post">
            <div class="form-group">
                <label for="username">{{__('xqwin.login.username')}}</label>
                <input type="text" name="username" class="form-control" id="username" placeholder="{{__('xqwin.login.username')}}" required >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="password">{{__('xqwin.login.password')}}</label>
                <input type="password" name="password" class="form-control" id="paswword" placeholder="{{__('xqwin.login.password')}}" required >
            </div>
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="remember">
                <label class="form-check-label" name="remember" for="remember">{{__('xqwin.rememberme')}}</label>
            </div>
            <button type="submit" class="btn btn-primary login-btn">{{__('xqwin.signin')}}</button>
            @csrf
        </form>
    </div>
</div>

<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('static/js/waves.min.js')}}"></script>
<script>
    $(function(){
        Waves.init();
        Waves.attach('.btn');
        //Waves.ripple('body')
    })
</script>
</body>
</html>
