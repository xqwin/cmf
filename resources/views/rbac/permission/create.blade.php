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
                                <div class="text-muted small">路由总数</div>
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
        <div class="card route">
            <div class="card-header">
                <h6>{{__('xqwin.route.add')}}</h6><button type="button" class="btn btn-flickr waves-effect" id="getrouteall">获取所有路由</button>
            </div>
            <div class="card-body ">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="inputPassword6">Password</label>
                        <input type="password" id="inputPassword6" class="form-control mx-sm-3" aria-describedby="passwordHelpInline">
                        <small id="passwordHelpInline" class="text-muted">
                            Must be 8-20 characters long.
                        </small>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="routeall" tabindex="-1" role="dialog" aria-labelledby="routeall" aria-hidden="true" >
        <div class="modal-dialog" role="document" style="max-width:800px">
            <div class="modal-content" style="width:800px">
                <div class="modal-header">
                    <h5 class="modal-title" id="addroute">添加路由</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body route-form">
                    <div id="accordion">

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary">确定</button>
                </div>
            </div>
        </div>
    </div>
@stop
@section('style')
<style>
    .route .card-header h6{width:10%;float:left;padding-top:.5rem;font-weight: bold;color: #777;font-size: 1rem;}
    .route-form .card .card-header{padding: .1rem .5rem;line-height: 1.34;}
    .route-form .card .card-header h5{padding: .5rem .3rem;margin-bottom:0}
    .route-form .card form{margin-bottom:0}
</style>
@stop
@section('javascript')
    <script src="{{asset('static/js/tmpl.js')}}"></script>
    <script type="text/x-tmpl" id="tmpl-route-form">
    {% for (var i=0; i<o.length;i++){ %}
        <div class="card">
        <form class="routeform">
            <div class="card-header" id="heading{%=o[i].unique%}">
                <h5 class="btn btn-link" data-toggle="collapse" data-target="#collapse{%=o[i].unique%}"><span class="btn btn-sm cmf-bg-cm1">{%=o[i].methods%}</span>  {%=o[i].url%}</h5>
            </div>
            <div id="collapse{%=o[i].unique%}" class="collapse {% if(i==0){ %} show {% } %}" data-parent="#accordion">
                <div class="card-body">
                <div class="form-group">
                        <label >路由命名空间</label>
                        <input type="text"  name="controller" class="form-control mx-sm-3" value="{%=o[i].controller%}">
                      </div>
                      <div class="form-group">
                        <label>完整命名空间</label>
                        <input type="text" name="namespaceall" class="form-control mx-sm-3" value="{%=o[i].controller%}">
                      </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label >路由名称</label>
                        <input type="text"  name="name" class="form-control mx-sm-3" aria-describedby="name">
                        <small class="text-muted">路由名称填写中文</small>
                      </div>
                      <div class="form-group col-md-6">
                        <label >所属应用</label>
                        <input type="text"  name="app" class="form-control mx-sm-3" value="">
                        <small class="text-muted">
                          Must be 8-20 characters long.
                        </small>
                      </div>
                      </div>
                      <div class="row">
                      <div class="form-group col-md-3">
                        <label >路由URL</label>
                        <input type="text" name="uri" class="form-control mx-sm-3" value="{%=o[i].url%}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputAs">路由别名</label>
                        <input type="text"  name="as" class="form-control mx-sm-3" value="{%=o[i].as%}">
                      </div>
                      <div class="form-group col-md-3">
                        <label >路由方法</label>
                        <input type="text"  name="methods" class="form-control mx-sm-3" value="{%=o[i].methods%}">
                      </div>
                      </div>
                      <div class="row">

                      <div class="form-group col-md-4">
                        <label >路由中间件</label>
                        <input type="text"  name="middleware" class="form-control mx-sm-3" value="{%=o[i].middleware%}">
                      </div>
                      <div class="form-group col-md-6">
                        <label >路由唯一值</label>
                        <input type="text"  name="md5" class="form-control mx-sm-3" value="{%=o[i].unique%}" >
                      </div>
                      <div class="form-group col-md-2">
                        <label >排序</label>
                        <input type="text" name="sort" class="form-control mx-sm-3" value="0">
                      </div>
                      </div>
                      <div class="row">

                      <div class="form-group col-md-6">
                        <label for="inputType">路由类型</label>
                        <select class="form-control mx-sm-3" name="type">
                          <option value="0">可访问</option>
                          <option value="1">有界面的链接</option>
                          <option value="2">无界面可访问</option>
                        </select>
                        <small>菜单类型0可访问链接,1有界面的链接,2无界面可访问链接</small>
                      </div>
                       <div class="form-group col-md-6" style="padding-top:1.8rem"><button type="submit" class="btn btn-primary waves-effect">保存</button></div>
                      </div>

                </div>
            </div>
            </form>
        </div>
        {% } %}
    </script>
<script>
    $(function(){
        $.ajaxSetup({headers: {
                "X-CSRF-TOKEN": XQWIN["CSRF-TOKEN"],
                "Authorization":XQWIN.AccessToken
            }});
        $('#routeall').on('shown.bs.modal', function (e) {
            $('form.routeform').submit(function(e){
                //console.log($(this).serializeArray());e.preventDefault();return false;
                $.ajax({
                    url:"{{route('cmf.permission.store')}}",
                    type:"POST",
                    data:$(this).serialize()
                }).done(function(res){
                    console.log(res);
                });
                e.preventDefault();
            });
        })

        $('#getrouteall').on('click',function(){
            $.ajax({
                url:"{{route('cmf.api.routes')}}",
                type:"get",
                }
                ).done(function(res){
                    console.log(res);
                if(res.status =='success'){
                    var s = $('#accordion').html(tmpl("tmpl-route-form", res.data));
                    $('#routeall').modal({backdrop:'static',show:true})
                }else{
                    alert('没有路由')
                }
            })
        })
    })
</script>
@stop
