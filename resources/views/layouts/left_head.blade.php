<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>报名系统</title>

    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('static/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{asset('static/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

    <link href="{{asset('static/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/style.css')}}" rel="stylesheet">

</head>

<body class="fixed-navigation">
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" style="margin-top: -10px" width="80" height="80" src="{{asset('static/logo/logo.jpeg')}}" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                             </span> <span class="text-muted text-xs block">@if(Auth::user()->name == 'admin')管理员 @else 普通用户 @endif<b class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">

                            <li class="divider"></li>
                            <li><a class="dropdown-item" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        报名
                    </div>
                </li>