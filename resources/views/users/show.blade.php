@extends('layouts.app')
@section('title', $user->name . '的个人中心')

@section('content')
<div class="row">
    <div class="col-md-3">
        <div class="card">
            <img src="http://qi6mcm0mn.hd-bkt.clouddn.com/images/23d8489a2165ab94a40b98cc0db3b5f8.jpeg"
                class="card-img-top" alt="{{ $user->name }}">
            <div class="card-body">
                <h5 class="card-title"><strong>个人简介</strong></h5>
                <p class="card-text">{{ $user->introduction }}</p>
                <p class="card-text">
                    <small class="text-muted">
                        注册于 {{ $user->created_at->diffForHumans() }}
                        <br>
                        最后登录于 3秒前
                    </small>
                </p>
            </div>
        </div>
    </div>

    <div class="col-md-9">
        <div class="card">
            <div class="card-body">
                <h4 class="card-text">{{ $user->name }} <small class="text-muted">{{ $user->email }}</small></h1>
            </div>
        </div>
        <hr>
        <div class="card">
            <div class="card-body">
                暂无数据 ~_~
            </div>
        </div>
    </div>
</div>
@stop
