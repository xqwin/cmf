<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
?>
<html lang="en" class="default-style layout-navbar-fixed layout-fixed" dir="ltr">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>xqwin::cmf.cmf.author</title>
    @include('xqwin::layouts.header')
    <script>
        XQWIN = {
            "CSRF-TOKEN":"{{csrf_token()}}",
            'AccessToken':"Bearer {{auth()->user()->api_token}}"
        }
    </script>
    @yield('style')
</head>
<body class="pace-done">
<div class="page-loader">
    <div class="bg-primary"></div>
</div>
<div class="layout-wrapper layout-2">
    <div class="layout-inner">
        @include('xqwin::layouts.side')
        <div class="layout-container">
            @include('xqwin::layouts.navbar')
            <!-- Layout content -->
            <div class="layout-content">
                <!-- Content -->

                @yield('content')

                @include('xqwin::layouts.footer')
            </div>
        </div>
    </div>

    <div class="layout-overlay layout-sidenav-toggle"></div>
</div>

<script src="https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js"></script>
<script src="{{asset('static/js/popper.min.js')}}"></script>
<script src="{{asset('static/cmf/js/layout-helpers.js')}}"></script>
<script src="{{asset('static/cmf/js/perfect-scrollbar.js')}}"></script>
<script src="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('static/cmf/js/sidenav.js')}}"></script>
<script src="{{asset('static/cmf/js/cmf.js')}}"></script>
<script src="{{asset('static/js/waves.min.js')}}"></script>
<script>
    $(function(){
        Waves.init();
        Waves.attach('.btn');
        //Waves.ripple('body')
    })
</script>
@yield('javascript')
</body>
</html>
