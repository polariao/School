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

                <li class="active">
                    <a href="{{url('admin/')}}"><i class="fa fa-paper-plane"></i> <span class="nav-label">主页</span> </a>
                </li>
                @if(Auth::user()->name=='admin')
                    <li>
                        <a href="#"><i class="fa fa-home"></i> <span class="nav-label">学校管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('admin/school')}}">学校列表</a></li>
                            <li><a href="{{url('admin/school/create')}}">添加学校</a></li>
                        </ul>
                    </li>
                @else
                    <li >
                        <a href="{{url('admin/editschool')}}"><i class="fa fa-home"></i> <span class="nav-label">学校管理</span> </a>
                    </li>
                    @endif

                <li>
                    <a href="#"><i class="fa fa-file-image-o"></i> <span class="nav-label">图片管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/image')}}">图片列表</a></li>
                        <li><a href="{{url('admin/image/create')}}">添加图片</a></li>
                    </ul>
                </li>
                @if(Auth::user()->name=='admin')
                    <li >
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label"> 用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a href="{{url('admin/user')}}">用户列表</a></li>
                            <li ><a href="{{url('admin/user/create')}}">添加用户</a></li>
                        </ul>
                    </li>
                    @else
                    <li >
                        <a href="{{url('admin/use/one')}}"><i class="fa fa-user"></i> <span class="nav-label">个人中心</span> </a>
                    </li>
                    @endif


                <li>
                    <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">报名管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/sign')}}">报名列表</a></li>
                        <li><a href="{{url('admin/sign/create')}}">后台报名</a></li>
                    </ul>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bullhorn"></i> <span class="nav-label">新闻管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="{{url('admin/new')}}">新闻列表</a></li>
                        <li><a href="{{url('admin/new/create')}}">添加新闻</a></li>
                    </ul>
                </li>

            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg sidebar-content">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>

                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">Welcome to the registration system.</span>
                    </li>
                    <li>
                    <li><a class="fa fa-sign-out" href="{{ route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            退出
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        {{--</li>--}}

                        {{--<a href="login.html">--}}
                        {{--<i class="fa fa-sign-out"></i> --}}
                        {{--</a>--}}
                    </li>
                </ul>

            </nav>
        </div>

        <div class="wrapper wrapper-content">

            <div class="row" style="width: 1300px;">

                <div  style="margin-left: 10px;float: left">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" style="width: 300px">
                            <span class="label label-primary pull-right">Today</span>
                            <h5>学校总数</h5>
                        </div>
                        <div class="ibox-content" style="width: 300px">
                            <h1 class="no-margins">{{$school}}</h1>
                            <div class="stat-percent font-bold text-navy">{{$Tschool}}% <i class="fa fa-level-up"></i></div>
                            <small>今日增长率</small>
                        </div>
                    </div>
                </div>
                <div  style="margin-left: 10px;float: left">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" style="width: 300px">
                            <span class="label label-primary pull-right">Today</span>
                            <h5>报名总数</h5>
                        </div>
                        <div class="ibox-content" style="width: 300px">
                            <h1 class="no-margins">{{$sign}}</h1>
                            <div class="stat-percent font-bold text-info">{{$Tsign}}% <i class="fa fa-level-up"></i></div>
                            <small>今日增长率</small>
                        </div>
                    </div>
                </div>
                <div  style="margin-left: 10px;float: left">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" style="width: 300px">
                            <span class="label label-primary pull-right">Today</span>
                            <h5>图片总数</h5>
                        </div>
                        <div class="ibox-content" style="width: 300px">
                            <h1 class="no-margins">{{$image}}</h1>
                            <div class="stat-percent font-bold text-warning">{{$Timage}}% <i class="fa fa-level-up"></i></div>
                            <small>今日增长率</small>
                        </div>
                    </div>
                </div>
                <div  style="margin-left: 10px;float: left">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title" style="width: 300px">
                            <span class="label label-primary pull-right">Today</span>
                            <h5>新闻总数</h5>
                        </div>
                        <div class="ibox-content" style="width: 300px">
                            <h1 class="no-margins">{{$new}}</h1>
                            <div class="stat-percent font-bold text-warning">{{$Tnew}}% <i class="fa fa-level-up"></i></div>
                            <small>今日增长率</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row" style="width: 1250px;">

                <div class="page-container" style="margin-left: 10px;background-color: white">

                    <table class="table table-border table-bordered table-bg mt-20">
                        <thead >
                        <tr >
                            <th style="background-color: #f5fafe;font-weight: bolder;font-size: 20px" colspan="2" scope="col">服务器信息</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th width="30%">服务器计算机名</th>
                            <td><span id="lbServerName">http://127.0.0.1/</span></td>
                        </tr>
                        <tr>
                            <td>服务器域名</td>
                            <td>{{$_SERVER['HTTP_HOST']}}</td>
                        </tr>
                        <tr>
                            <td>服务器端口 </td>
                            <td>{{$_SERVER['SERVER_PORT']}}</td>
                        </tr>
                        <tr>
                            <td>本文件所在文件夹 </td>
                            <td>{{__DIR__}}</td>
                        </tr>
                        <tr>
                            <td>服务器操作系统 </td>
                            <td>{{ php_uname('s')}}</td>
                        </tr>
                        <tr>
                            <td>PHP版本 </td>
                            <td>{{ PHP_VERSION}}</td>
                        </tr>
                        <tr>
                            <td>进程用户名 </td>
                            <td>{{ Get_Current_User()}}</td>
                        </tr>
                        <tr>
                            <td>系统入口文件 </td>
                            <td>{{public_path()}}</td>
                        </tr>
                        <tr>
                            <td>客户端IP </td>
                            <td>{{$_SERVER['REMOTE_ADDR']}}</td>
                        </tr>
                        <tr>
                            <td>浏览器上次刷新时间 </td>
                            <td>{{date('Y-m-d H:i:s',time())}}</td>
                        </tr>
                        <tr>
                            <td>服务器解译引擎 </td>
                            <td>{{ $_SERVER['SERVER_SOFTWARE']}}</td>
                        </tr>

                        <tr>
                            <td>当前系统用户名 </td>
                            <td>{{Auth::user()->name}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>


            </div>

        </div>
        <div class="footer">
            <div class="pull-right">
                10GB of <strong>250GB</strong> Free.
            </div>
            <div>
                <strong>Copyright</strong> Example Company &copy; 2014-2015
            </div>
        </div>

    </div>


<!-- Mainly scripts -->
<script src="{{asset('static/js/jquery-2.1.1.js')}}"></script>
<script src="{{asset('static/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('static/js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Flot -->
<script src="{{asset('static/js/plugins/flot/jquery.flot.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/jquery.flot.spline.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/jquery.flot.pie.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/jquery.flot.symbol.js')}}"></script>
<script src="{{asset('static/js/plugins/flot/curvedLines.js')}}"></script>

<!-- Peity -->
<script src="{{asset('static/js/plugins/peity/jquery.peity.min.js')}}"></script>
<script src="{{asset('static/js/demo/peity-demo.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('static/js/inspinia.js')}}"></script>
<script src="{{asset('static/js/plugins/pace/pace.min.js')}}"></script>

<!-- jQuery UI -->
<script src="{{asset('static/js/plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<!-- Jvectormap -->
<script src="{{asset('static/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('static/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>

<!-- Sparkline -->
<script src="{{asset('static/js/plugins/sparkline/jquery.sparkline.min.js')}}"></script>

<!-- Sparkline demo data  -->
<script src="{{asset('static/js/demo/sparkline-demo.js')}}"></script>

<!-- ChartJS-->
<script src="{{asset('static/js/plugins/chartJs/Chart.min.js')}}"></script>


<script>

    $(document).ready(function() {

        setTimeout(function() {
            toastr.options = {
                closeButton: true,
                progressBar: true,
                showMethod: 'slideDown',
                timeOut: 4000
            };
            toastr.success('Responsive Admin Theme', 'Welcome to INSPINIA');

        }, 1300);

        var lineData = {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [
                {
                    label: "Example dataset",
                    fillColor: "rgba(220,220,220,0.5)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [65, 59, 80, 81, 56, 55, 40]
                },
                {
                    label: "Example dataset",
                    fillColor: "rgba(26,179,148,0.5)",
                    strokeColor: "rgba(26,179,148,0.7)",
                    pointColor: "rgba(26,179,148,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(26,179,148,1)",
                    data: [28, 48, 40, 19, 86, 27, 90]
                }
            ]
        };

        var lineOptions = {
            scaleShowGridLines: true,
            scaleGridLineColor: "rgba(0,0,0,.05)",
            scaleGridLineWidth: 1,
            bezierCurve: true,
            bezierCurveTension: 0.4,
            pointDot: true,
            pointDotRadius: 4,
            pointDotStrokeWidth: 1,
            pointHitDetectionRadius: 20,
            datasetStroke: true,
            datasetStrokeWidth: 2,
            datasetFill: true,
            responsive: true,
        };


        var ctx = document.getElementById("lineChart").getContext("2d");
        var myNewChart = new Chart(ctx).Line(lineData, lineOptions);

    });
</script>
</body>
</html>
