<?php
/**
 * xqwin cmf.
 * Author: xcwmoon <386431471@qq.com>
 * Copyright (c) 2019 https://xcwmoon.com All rights reserved.
 */
?>
@extends('xqwin::layouts.cmf')
@section('content')

    <div class="container-fluid flex-grow-1 container-p-y">
        <!-- Counters -->
        <div class="row">
            <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="lnr lnr-cart display-4 text-success"></div>
                            <div class="ml-3">
                                <div class="text-muted small">Monthly sales</div>
                                <div class="text-large">2362</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="lnr lnr-earth display-4 text-info"></div>
                            <div class="ml-3">
                                <div class="text-muted small">Monthly visits</div>
                                <div class="text-large">687,123</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="lnr lnr-gift display-4 text-danger"></div>
                            <div class="ml-3">
                                <div class="text-muted small">Products</div>
                                <div class="text-large">985</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-sm-6 col-xl-3">

                <div class="card mb-4">
                    <div class="card-body">
                        <div class="d-flex align-items-center">
                            <div class="lnr lnr-users display-4 text-warning"></div>
                            <div class="ml-3">
                                <div class="text-muted small">Users</div>
                                <div class="text-large">105,652</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- / Counters -->


        <div class="card">
            <div class="card-body text-center" id="app">
                <passport-clients></passport-clients>
                <passport-authorized-clients></passport-authorized-clients>
                <passport-personal-access-tokens></passport-personal-access-tokens>

            </div>
        </div>
    </div>

@stop
@section('style')
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
@stop
@section('javascript')

    <script src="{{asset('js/app.js')}}"></script>
    <script>
        /*
        var app = new Vue({
            el: '#app',
            data: {
                message: 'Hello Vue!'
            }
        })
        */
    </script>
@stop
