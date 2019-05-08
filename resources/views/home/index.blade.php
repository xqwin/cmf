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

        <div class="alert bg-google text-white alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>

        <h4 class="font-weight-bold py-3 mb-4">
            Dashboard
            <div class="text-muted text-tiny mt-1"><small class="font-weight-normal">Today is Tuesday, 8 February 2018</small></div>
        </h4>

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
            <div class="card-body text-center">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-twitter text-white p-4">.bg-twitter</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-twitter">.text-twitter</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-twitter  waves-effect">.btn-twitter</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-twitter waves-effect">.btn-outline-twitter</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-google text-white p-4">.bg-google</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-google">.text-google</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-google waves-effect">.btn-google</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-google waves-effect">.btn-outline-google</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-facebook text-white p-4">.bg-facebook</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-facebook">.text-facebook</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-facebook waves-effect">.btn-facebook</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-facebook waves-effect">.btn-outline-facebook</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-pinterest text-white p-4">.bg-pinterest</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-pinterest">.text-pinterest</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-pinterest waves-effect">.btn-pinterest</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-pinterest waves-effect">.btn-outline-pinterest</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-instagram text-white p-4">.bg-instagram</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-instagram">.text-instagram</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-instagram waves-effect">.btn-instagram</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-instagram waves-effect">.btn-outline-instagram</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-flickr text-white p-4">.bg-flickr</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-flickr">.text-flickr</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-flickr waves-effect">.btn-flickr</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-flickr waves-effect">.btn-outline-flickr</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-linkedin text-white p-4">.bg-linkedin</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-linkedin">.text-linkedin</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-linkedin waves-effect">.btn-linkedin</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-linkedin waves-effect">.btn-outline-linkedin</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-periscope text-white p-4">.bg-periscope</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-periscope">.text-periscope</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-periscope waves-effect">.btn-periscope</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-periscope waves-effect">.btn-outline-periscope</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-tumblr text-white p-4">.bg-tumblr</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-tumblr">.text-tumblr</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-tumblr waves-effect">.btn-tumblr</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-tumblr waves-effect">.btn-outline-tumblr</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-vimeo text-white p-4">.bg-vimeo</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-vimeo">.text-vimeo</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-vimeo waves-effect">.btn-vimeo</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-vimeo waves-effect">.btn-outline-vimeo</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-youtube text-white p-4">.bg-youtube</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-youtube">.text-youtube</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-youtube waves-effect">.btn-youtube</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-youtube waves-effect">.btn-outline-youtube</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-windows text-white p-4">.bg-windows</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-windows">.text-windows</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-windows waves-effect">.btn-windows</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-windows waves-effect">.btn-outline-windows</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-macos text-white p-4">.bg-macos</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-macos">.text-macos</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-macos waves-effect">.btn-macos</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-macos waves-effect">.btn-outline-macos</button>
                    </div>
                </div>

                <hr class="mx-n4 my-4">

                <div class="row align-items-center">
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <div class="bg-linux text-white p-4">.bg-linux</div>
                    </div>
                    <div class="col-6 col-md-3 mb-4 mb-md-0">
                        <a href="javascript:void(0)" class="text-linux">.text-linux</a>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-linux waves-effect">.btn-linux</button>
                    </div>
                    <div class="col-6 col-md-3">
                        <button type="button" class="btn btn-outline-linux waves-effect">.btn-outline-linux</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

@stop
