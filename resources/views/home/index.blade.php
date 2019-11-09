<!DOCTYPE html>
<html>

<head>
    <title>首页 </title>
    <meta name="keywords" content="学校 " />
    <meta name="description" content="学校 。">

    <meta name="author" content="ThinkCMF">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- Set render engine for 360 browser -->
    <meta name="renderer" content="webkit">

    <!-- No Baidu Siteapp-->
    <meta http-equiv="Cache-Control" content="no-siteapp"/>

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="{{asset('static/home/js/html5shiv.js')}}"></script>
    <![endif]-->
    <link href="{{asset('static/home/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('static/home/css/pull-right.css')}}" rel="stylesheet">
    <link href="{{asset('static/home/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!--[if IE 7]>
    <link  href="{{asset('static/home/css/font-awesome-ie7.min.css')}}" rel="stylesheet">
    <![endif]-->
    <link href="{{asset('static/home/css/style.css')}}" rel="stylesheet">

    <!-- 引入动效样式 -->
    <link href="{{asset('static/home/css/animate.min.css')}}" rel="stylesheet">
    <!-- 引入定制样式 -->
    <link href="{{asset('static/home/css/sifc-style.css')}}" rel="stylesheet">
    <!-- 引入手机版样式 -->
    <link href="{{asset('static/home/css/sifc-mobile.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <link href="{{asset('static/home/css/sifc-ie8.css')}}" rel="stylesheet">
    <![endif]-->
    <style>
        /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
        #backtotop {
            position: fixed;
            bottom: 50px;
            right: 20px;
            display: none;
            cursor: pointer;
            font-size: 50px;
            z-index: 9999;
        }

        #backtotop:hover {
            color: #333
        }

        #main-menu-user li.user {
            display: none
        }
        #pre1{
            width: 550px;
            max-height: 20px;
            word-wrap:break-word;
            text-overflow: -o-ellipsis-lastline;
            overflow : hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
        }
    </style>
    <script type="text/javascript">
        //全局变量
        var GV = {
            ROOT: "/",
            WEB_ROOT: "/",
            JS_ROOT: "static/js/"
        };
    </script>
    <script src="{{asset('static/home/js/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('static/home/js/jquery-migrate-1.2.1.js')}}"></script>
    <script src="{{asset('static/home/js/wind.js')}}"></script>

    <link href="{{asset('static/home/css/slippry.css')}}" rel="stylesheet">
    <link href="{{asset('static/home/css/zyl-style.css')}}" rel="stylesheet">
    <style>
        .caption-wraper {
            position: absolute;
            left: 50%;
            bottom: 2em;
        }

        .caption-wraper .caption {
            position: relative;
            left: -50%;
            background-color: rgba(0, 0, 0, 0.54);
            padding: 0.4em 1em;
            color: #fff;
            -webkit-border-radius: 1.2em;
            -moz-border-radius: 1.2em;
            -ms-border-radius: 1.2em;
            -o-border-radius: 1.2em;
            border-radius: 1.2em;
        }

        .tc-gridbox {
            margin: 0;
        }

        @media (max-width: 767px) {
            .caption-wraper {
                left: 0;
                bottom: 0.4em;
            }

            .caption-wraper .caption {
                left: 0;
                padding: 0.2em 0.4em;
                font-size: 0.92em;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;
            }
        }
    </style>

    <!-- Plugins Guestbook CSS-->
    <link rel="stylesheet" href="{{asset('static/home/css/sy.guestbook.css')}}">
</head>

<body class="body-white sifc-body-index">
<link href="{{asset('static/home/css/zyl-style.css')}}" rel="stylesheet">
<nav class="navbar navbar-default navbar-fixed-top sifc-navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>


            <h3 style="width:auto;margin-left: 50px;color: white;margin-top: 35px" class="zyl-nav-img">{{$first->sch_name}}</h3>

        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul id="main-menu" class="nav navbar-nav sifc-navbar-nav">

                <li class="menu-item menu-item-level-1">
                    <a href="/" target="">
                        首页                            </a>
                </li>
                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- /application.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        切换学校<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">
                        @foreach($schools as $sch)
                            <li class="menu-item menu-item-level-2">
                                <a href="{{url('school/'.$sch->sch_id)}}" target="">
                                    {{$sch->sch_name}}
                                </a>
                            </li>
                        @endforeach

                    </ul>
                </li>

                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- aboutus.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        关于我们<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">

                        <li class="menu-item menu-item-level-2">
                            <a href="{{url('sch_content/'.$first->sch_id)}}" target="">
                                学校简介                            </a>
                        </li>

                    </ul>
                </li>


                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- /gaincourse.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        新闻动态<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">

                        <li class="menu-item menu-item-level-2">
                            @if(count($news)>0)
                            <a href="{{url('new/'.$news[0]->n_id.'?sch_id='.$first->sch_id)}}" target="">
                                最新动态
                                </a>
                                @else
                                <a  target="">
                                    暂无动态
                                </a>
                            @endif
                        </li>

                    </ul>
                </li>
                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- /gaincourse.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        教学科研<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">

                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/page/index/id/53.html" target="">
                                课程设置                            </a>
                        </li>


                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/15.html" target="">
                                教学教研                            </a>
                        </li>

                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/15.html" target="">
                                教学活动                            </a>
                        </li>

                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/15.html" target="">
                                德育研究                            </a>
                        </li>

                    </ul>
                </li>
                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- campusdynamics.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        博雅校友<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">

                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/5.html" target="">
                                情系博雅                            </a>
                        </li>


                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/6.html" target="">
                                同学会                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown dropdown-custom dropdown-custom-level-1">

                    <!-- achievement.html -->
                    <a href="javascript:;" class="dropdown-toggle dropdown-toggle-1" data-toggle="dropdown">
                        入学申请<span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-level-1">

                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/222.html" target="">
                                招生简章                            </a>
                        </li>


                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/223.html" target="">
                                在线报名                            </a>
                        </li>


                        <li class="menu-item menu-item-level-2">
                            <a href="/portal/list/index/id/12.html" target="">
                                入学流程                            </a>
                        </li>


                    </ul>
                </li>


            </ul>
        </div>
        <div class="zyl-online">
            <div>
                <div class="online-apply">
                    <a href="javascript:;" onclick="layer_show('请填写报名信息','{{url('baoming?sch_name='.$first->sch_name)}}','800','600')"><img src="{{asset('static/home/images/baoming.svg')}}"><span style="font-family: 'Microsoft YaHei'">在线报名</span></a>
                </div>

            </div>

        </div>
        <script src="https://upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.2.min.js"></script>
        <script src="{{asset('static/home/layer/layer.js')}}"></script>

        <script>
            function layer_show(title,url,w,h){
                layer.open({
                    type: 2,
                    area: [w+'px', h +'px'],
                    fix: false, //不固定
                    maxmin: true,
                    shade:0.4,
                    title: title,
                    content: url
                });

            }
        </script>
    </div>
</nav>

<script>
    $(function () {
        if ($(window).width()<=414) {
            $('.dropdown-custom.dropdown-custom-level-2').on('click', function(e) {
                e.stopPropagation()
            });

            var $slideBtn=$('<div class="saibar-index-mobile" data-show="no">展开导航</div>');
            $slideBtn.insertBefore('#main-navigation');
            $slideBtn.on('click', function() {
                if ($(this).data('show') === 'no') {
                    $(this).data('show', 'yes')
                    $(this).text('收起导航')
                    $('#main-navigation').slideDown();
                } else {
                    $(this).data('show', 'no')
                    $(this).text('展开导航')
                    $('#main-navigation').slideUp();
                }
            });
        }

        var sibarTitle = $('#main-navigation').closest('.sifc-main').find('.sifc-box').children('h2').first().text()
        sibarTitle = $.trim(sibarTitle)
        var achText = $('#achType').val()
        achText = $.trim(achText)
        // console.log('sibarTitle:',sibarTitle)
        $('#main-navigation a').each(function(index, el) {
            var leftText = $(this).text()
            var $closestLi = $(this).closest('li.menu-item')
            leftText = $.trim(leftText)
            if (leftText === sibarTitle || leftText === achText) {
                if ($closestLi.closest('ul').hasClass('dropdown-menu')) {
                    $closestLi.closest('ul').closest('li').addClass('active')
                } else {
                    $closestLi.addClass('active')
                }
            }
        });
        //点击导航条跳转第一个子项目连接
        $(".dropdown-toggle.dropdown-toggle-1").click(function () {
            if ($(window).width() >= 800) {
                var pp = $(this).siblings('ul').find("li:first-child a").attr('href');
                if(pp=="javascript:;"||pp=="#"){
                    pp = $(this).siblings('ul').find("li:first-child ul li:first-child a").attr('href');
                }
                window.location.href = pp;
            }
        })
        //如果点击二级菜单，如果有三级菜单跳转第一个
        $(".dropdown-menu.dropdown-menu-level-1 li a").click(function () {
            var hr = $(this).attr('href');
            if(hr=="javascript:;"||hr=="#"){
                hr = $(this).siblings('ul').find("li:first-child a").attr('href');
                window.location.href = hr;
            }
        })

    })
</script>
<!-- 首页轮播 -->
<div class="sifc-index-slider">
    <ul id="home-slider" class="list-unstyled">
        @foreach($images as $img)
        <li>
            <a href="#" class="list-unstyled-a">
                <div class="caption-wraper">
                    <div class="container">
                        <h2 class="wow fadeInUp zyl-fade" data-wow-delay=".0s"> </h2>
                        <p class="wow fadeInUp" data-wow-delay=".2s"></p>
                    </div>
                </div>
                <img width="100%" height="730px" src="{{asset('/storage/'.$img->img_url)}}" alt="">
            </a>
        </li>

            @endforeach

    </ul>
</div>
<div class="sifc-index-about">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12 wow fadeInLeft">
                <div class="sifc-index-title">
                    <h2>About US</h2>
                    <p>学校简介</p>
                    <br>
                </div>
            </div>
            <div  style="margin-top:-80px;height: 300px" class="col-md-8 col-md-offset-1 col-xs-12 wow fadeInRight">
                <div style="width:auto;height: 300px" class="sifc-index-about-con">
                    <div style="
                        display: block;
                        display: -webkit-box;
                        max-height: 265px;
                        margin: 0 auto;
                        line-height: 1.4;
                        -webkit-line-clamp: 8;
                        -webkit-box-orient: vertical;
                        overflow: hidden;
                        text-overflow: ellipsis;
                     ">
                        {!! $first->sch_content !!}
                    </div>
                    <p style="margin-top: -50px" class="text-right sifc-view-more">
                        <!-- <a href="/aboutus.html?nav_id=2">查看详情</a> -->
                        <a href="{{url('sch_content/'.$first->sch_id)}}">查看详情</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 新闻 -->
<div class="sifc-index-news">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-xs-12 wow fadeInLeft">
                <div class="text-right sifc-index-title">
                    <h2>News</h2>
                    <p style="color: white">最新资讯</p>
                    <br>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-1 col-xs-12 wow fadeInRight">
                <div style="color: white" id="sifc-carousel-last-news" class="carousel slide mat124" data-ride="carousel">
                    <div style="margin-top:-50px;width: 800px;height: 400px;background-color: white">

                        <!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <title>新闻列表</title>
                            <style type="text/css">
                                *{
                                    padding: 0;
                                    margin: 0;
                                }
                                .box{
                                    width: 800px;
                                    height: 320px;
                                    border: 1px solid #d8d8d8;
                                    margin: 50px auto;
                                    overflow: hidden;
                                }
                                .box .line{
                                    width:760px;
                                    height: 50px;
                                    margin: 0 auto;
                                    border-bottom: 1px solid #ddd;
                                    line-height: 50px;

                                }
                                .box span{
                                    font: bold 18px '微软雅黑';
                                    color: #000;
                                    padding: 15px;
                                    border-bottom: 2px solid red;
                                }
                                .box #more{
                                    float: right;
                                    font-weight: bold;
                                    color: #9f9f9f;
                                    text-decoration: none;
                                }
                                .box #more:hover{
                                    color: red;
                                }
                                .box ul{
                                    list-style: none;
                                    width:760px;
                                    height: 238px;
                                    padding:0;
                                    margin: 7px auto 0;
                                }
                                .box ul li{
                                    height:36px;
                                    border-bottom: 1px solid #ddd;

                                }
                                .box ul a{
                                    float:left;
                                    height:36px;
                                    font: bold 14px/36px '微软雅黑';
                                    text-decoration: none;
                                    text-indent: 30px;
                                    color: #000;

                                }
                                .box ul a:hover{
                                    color: red;
                                }
                                /*.box ul li span{*/
                                    /*float: right;*/
                                    /*height: 36px;*/
                                    /*font:bold 14px/36px '微软雅黑';*/
                                    /*color: #000;*/
                                /*}*/
                                .pre{
                                    width: 600px;
                                    max-height: 40px;
                                    word-wrap:break-word;
                                    text-overflow: -o-ellipsis-lastline;
                                    overflow : hidden;
                                    text-overflow: ellipsis;
                                    display: -webkit-box;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                }
                                .time{
                                    float: right;
                                    height: 36px;
                                    font:bold 14px/36px '微软雅黑';
                                    color: #000;
                                }
                            </style>
                        </head>
                        <body>
                        <div class="box">
                            <div class='line'><span>新闻列表</span><a id='more' href="#">更多>></a></div>

                            @if(count($news)==0)
                                <li><a style="margin-top: 30px;margin-left: 30px"> 暂无新闻</a></li>
                                @else
                                <ul>
                                    @foreach($news as $new)
                                        <li><a class="pre" href="{{url('new/'.$new->n_id.'?sch_id='.$first->sch_id)}}">{{$new->n_title}}</a><div class="time"> {{date('Y-m-d',strtotime($new->created_at))}}</div></li>
                                    @endforeach

                                </ul>
                                @endif


                        </div>

                        </body>
                        </html>
                        <div style="color: #0A0000;margin-top: -50px">
                            <div id="pull_right">
                                <div class="pull-right">
                                    {{$news->links()}}
                                </div>
                            </div></div>



                    </div>
                </div>
            </div>
        </div>



    </div>
</div>




<!-- 底部 -->
<!-- 友情链接 -->
<div class="sifc-links">
    <div class="container">
        <div class="row sifc-links-list">
        </div>



    </div>
</div>
<!-- 联系 -->
<div class="sifc-contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-xs-12 wow fadeInLeft">
                <div class="sifc-contact-info">
                    <h2>联系我们：</h2>
                    <p>地址：{{$first->sch_address}}                        <br> 电话：{{$first->sch_tel}}                         <br>  邮箱：{{$first->sch_email}}                      </p>
                </div>
            </div>
            <div class="col-md-6 col-xs-12 wow fadeInRight">
                <div class="pull-left">
                    <div class="sifc-contact-assist">NY</div>
                </div>
                <div class="pull-right">
                    <div class="sifc-contact-qr">
                        <img src="{{asset('static/home/images/fd84c237dbffe4b0c5ff200a3c79643e.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 底部 -->
<div id="footer" class="sifc-footer">
    <div class="container">
        <!-- <div class="links">

    <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>&nbsp;

</div> -->
        <div class="pull-left wow fadeInUp" data-wow-delay=".1s">
            <img src="{{asset('static/home/images/logo1.png')}}" class="zyl-footer-img">xxx
        </div>
        <div class="pull-right wow fadeInUp" data-wow-delay=".2s">

            <p class="text-right"><img src="{{asset('static/home/images/collegeboard.jpg')}}" width="150" height="42" alt=""/>
                大学理事会（The College Board）成员学校 CEEB CODE: 694041
                <br>Copyright &copy; Nanyang International Foundation College
                <br> All rights reserved.
                <br>
                <a href="http://www.miitbeian.gov.cn/" target="_blank">豫ICP备09169721号</a>
            </p>
            <p style="margin-left: -200px">  <a href="#" target="_blank">@友情链接</a>
                <a href="https://www.baidu.com/" target="_blank">百度</a>
                <a href="https://www.zhihu.com/" target="_blank">知乎</a>
                <a href="https://study.163.com/" target="_blank">网易云课堂</a>
                <a href="http://www.pep.com.cn/" target="_blank">人民教育出版社 </a>
                <a href="https://www.bilibili.com/" target="_blank">哔哩哔哩</a></p>
        </div>
    </div>
</div>

<!-- 引入动效JS -->
<script src="{{asset('static/home/js/wow.min.js')}}"></script>
<script type="text/javascript">
    new WOW().init();
</script>
<!-- /container -->
<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{asset('static/home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('static/home/js/frontend.js')}}"></script>
<script>
    $(function(){
        $("#main-menu li.dropdown").hover(function(){
            $(this).addClass("open");
        },function(){
            $(this).removeClass("open");
        });

        $("#main-menu a").each(function() {
            if ($(this)[0].href == String(window.location)) {
                $(this).parentsUntil("#main-menu>ul>li").addClass("active");
            }
        });

        $.post("/user/index/islogin.html",{},function(data){
            console.log(data);
            if(data.code==1){
                if(data.data.user.avatar){
                }

                $("#main-menu-user span.user-nickname").text(data.data.user.user_nickname?data.data.user.user_nickname:data.data.user.user_login);
                $("#main-menu-user li.login").show();
                $("#main-menu-user li.offline").hide();

            }

            if(data.code==0){
                $("#main-menu-user li.login").hide();
                $("#main-menu-user li.offline").show();
            }

        });

        ;(function($){
            $.fn.totop=function(opt){
                var scrolling=false;
                return this.each(function(){
                    var $this=$(this);
                    $(window).scroll(function(){
                        if(!scrolling){
                            var sd=$(window).scrollTop();
                            if(sd>100){
                                $this.fadeIn();
                            }else{
                                $this.fadeOut();
                            }
                        }
                    });

                    $this.click(function(){
                        scrolling=true;
                        $('html, body').animate({
                            scrollTop : 0
                        }, 500,function(){
                            scrolling=false;
                            $this.fadeOut();
                        });
                    });
                });
            };
        })(jQuery);

        $("#backtotop").totop();


    });
</script>


<script src="{{asset('static/home/js/slippry.min.js')}}"></script>
<script>
    window.onload = function (ev) {
        $("#home-slider").slippry({
            transition: 'fade',
            useCSS: true,
            captions: false,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible'
        });
        $("#home-slider").show();

        //移动端优秀学生轮播
        if($(document).width()<=1000){
            var hei=$(".zyl-sudent").height()*2-1;
            $("#indexStudent").css("height",hei+"px");
            var timer = setInterval(carousel2, 5000);
            $(".zyl-sudent").hover(function () {
                clearInterval(timer);
            }, function () {
                timer = setInterval(carousel2, 5000);
            });
        };

        /*获取导航的小学初中高中的链接赋值给首页图片*/
        var xx = $(".sifc-navbar-nav>li:eq(3)>ul>li:first-child>ul>li:first-child a").attr("href");
        var cz = $(".sifc-navbar-nav>li:eq(3)>ul>li:first-child>ul>li:eq(1) a").attr("href");
        var gz = $(".sifc-navbar-nav>li:eq(3)>ul>li:first-child>ul>li:eq(2) a").attr("href");
        $(".zyl-xx").attr("href", xx);
        $(".zyl-cz").attr("href", cz);
        $(".zyl-gz").attr("href", gz);

        //pc端优秀学生轮播
        if($(document).width()>=1000){
            $(".zyl-sudent").css("width","20%")
            var widdiv = $("#indexStudent").width()*1.25;
            $(".zyl-lunbo-stu").width(widdiv);
            var widstu = -$(".zyl-sudent").width()-30;
            var timer = setInterval(carousel, 5000);
            $(".zyl-sudent").hover(function () {
                clearInterval(timer);
            }, function () {
                timer = setInterval(carousel, 5000);
            });
        }

        //pc端轮播动画
        function carousel(){
            $(".zyl-lunbo-stu").animate({
                left: widstu+"px",
            }, 1000,function () {
                $(".sifc-index-graduates-list .zyl-sudent:first-child").insertAfter(".sifc-index-graduates-list .zyl-sudent:last-child");
                $(".zyl-lunbo-stu").css("left","0");
            } );
        }
        //移动端轮播动画
        function carousel2(){
            $(".sifc-index-graduates-list .zyl-sudent:first-child").insertAfter(".sifc-index-graduates-list .zyl-sudent:last-child");
        }
        //控制新闻简介字数
        $(".new-jianjie").each(function() {
            var maxjianjie = 90;
            if ($(this).text().length > maxjianjie) {
                $(this).text($(this).text().substring(0, maxjianjie));
                $(this).html($(this).html() + '……');
            }
        });

    };
    /*$('#indexStudent .item').hover(function() {
        $(this).find('.index-luqu').show().addClass('animated fadeInUp')
        $(this).find('img').css('width', '80%')
    }, function() {
        $(this).find('.index-luqu').removeClass('animated fadeInUp').hide()
        $(this).find('img').css('width', '100%')
    });*/
    //优秀学生动画
    /*$('.zyl-sudent').hover(function() {
        $(this).find('.zyl-Gra-div').animate({top:'-180px'},500);
    }, function() {
        $(this).find('.zyl-Gra-div').animate({top:'0'},500);
    })*/
</script>
<!-- Plugins Guestbook JS -->
<script src="{{asset('static/home/js/layer.js')}}"></script>
<script src="{{asset('static/home/js/ajaxform.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function () {

        $.ajax({
            url: "/plugin/sy_guestbook/index/getvisitdata.html",
            type: "post",
            success: function (data) {

                if (data.code != 0) {

                    var msg = JSON.parse(data.msg);

                    for(var i=0;i<msg[0].length;i++){
                        var str="<option value="+msg[0][i]+">"+msg[0][i]+"</option>";
                        $("#qq option:last-child").after(str);
                    }
                    for(var i=0;i<msg[1].length;i++){
                        var str="<option value="+msg[1][i]+">"+msg[1][i]+"</option>";
                        $("#subject option:last-child").after(str);
                    }

                    for(var i=0;i<msg[2].length;i++){
                        var str="<option value="+msg[2][i]+">"+msg[2][i]+"</option>";
                        $("#message option:last-child").after(str);
                    }

                }
            }
        });

        $('#guestbook-submit').click(function () {
            $('#guestbook-form').ajaxSubmit({
                url: "/plugin/sy_guestbook/index/addmsg.html",
                type: "post",
                success: function (data) {
                    if (data.code == 0) {
                        layer.msg(data.msg);
                    } else {
                        $('#MessageSent').removeClass("d-none");
                        layer.msg(data.msg, function () {
                            setTimeout(function () {
                                parent.location.reload();
                            }, 300);
                        });
                    }
                }
            });
            return false;
        });
    });
</script><div id="think_page_trace" style="position: fixed;bottom:0;right:0;font-size:14px;width:100%;z-index: 999999;color: #000;text-align:left;font-family:'微软雅黑';">
    <div id="think_page_trace_tab" style="display: none;background:white;margin:0;height: 250px;">
        <div id="think_page_trace_tab_tit" style="height:30px;padding: 6px 12px 0;border-bottom:1px solid #ececec;border-top:1px solid #ececec;font-size:16px">
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">基本</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">文件</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">流程</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">错误</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">SQL</span>
            <span style="color:#000;padding-right:12px;height:30px;line-height:30px;display:inline-block;margin-right:3px;cursor:pointer;font-weight:700">调试</span>
        </div>
        <div id="think_page_trace_tab_cont" style="overflow:auto;height:212px;padding:0;line-height: 24px">
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">请求信息 : 2019-10-16 10:31:27 HTTP/1.1 GET : www.sifc.net.cn/</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">运行时间 : 1.651688s [ 吞吐率：0.61req/s ] 内存消耗：5,021.66kb 文件加载：90</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">查询信息 : 59 queries 37 writes </li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">缓存信息 : 0 reads,0 writes</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">配置加载 : 70</li>                </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\public\index.php ( 1.21 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\base.php ( 2.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Loader.php ( 20.23 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\composer\autoload_namespaces.php ( 0.43 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\composer\autoload_psr4.php ( 0.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\composer\autoload_classmap.php ( 1.25 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\composer\autoload_files.php ( 0.64 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\topthink\think-helper\src\helper.php ( 2.88 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\topthink\think-captcha\src\helper.php ( 1.59 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Route.php ( 58.71 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Config.php ( 6.38 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Validate.php ( 40.54 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\ezyang\htmlpurifier\library\HTMLPurifier.composer.php ( 0.10 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\qiniu\php-sdk\src\Qiniu\functions.php ( 7.66 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\qiniu\php-sdk\src\Qiniu\Config.php ( 3.25 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\vendor\topthink\think-queue\src\common.php ( 1.19 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Console.php ( 22.65 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Error.php ( 3.75 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\convention.php ( 10.10 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\App.php ( 20.87 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Request.php ( 48.47 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\config.php ( 9.42 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\database.php ( 0.74 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\data\conf\database.php ( 0.50 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\debug.php ( 0.69 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Hook.php ( 4.71 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\tags.php ( 1.27 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Env.php ( 1.21 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\common.php ( 50.83 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\helper.php ( 17.30 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Debug.php ( 7.13 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\behavior\InitHookBehavior.php ( 1.30 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Cache.php ( 6.10 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Log.php ( 6.04 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\cache\driver\File.php ( 6.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\cache\Driver.php ( 5.98 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Collection.php ( 10.69 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Lang.php ( 7.23 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\lang\zh-cn.php ( 11.58 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\route.php ( 0.76 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\data\conf\route.php ( 1.92 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\behavior\LangBehavior.php ( 1.17 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\lang\zh-cn.php ( 3.08 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\admin\lang\zh-cn\common.php ( 0.60 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\lang\zh-cn\common.php ( 0.76 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\lang\zh-cn.php ( 0.93 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\controller\IndexController.php ( 0.79 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\controller\HomeBaseController.php ( 6.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\controller\BaseController.php ( 2.30 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Controller.php ( 6.01 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\traits\controller\Jump.php ( 4.90 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\View.php ( 6.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\view\driver\Think.php ( 5.45 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Template.php ( 45.15 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\template\driver\File.php ( 2.17 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\behavior\HomeLangBehavior.php ( 1.10 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\lang\zh-cn\home.php ( 0.62 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\admin\model\ThemeModel.php ( 7.94 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Model.php ( 67.72 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Db.php ( 6.67 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\db\connector\Mysql.php ( 3.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\db\Connection.php ( 29.66 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\db\Query.php ( 88.70 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\db\builder\Mysql.php ( 4.22 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\db\Builder.php ( 30.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\taglib\Portal.php ( 9.41 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\template\TagLib.php ( 12.31 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\lib\taglib\Cmf.php ( 11.49 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\template\taglib\Cx.php ( 23.82 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\data\runtime\temp\4df5c743a2f8b522010cb8923b14169f.php ( 52.04 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\public\plugins\sy_guestbook\SyGuestbookPlugin.php ( 3.22 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\lib\Plugin.php ( 7.32 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\public\plugins\sy_guestbook\lang\zh-cn.php ( 0.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\data\runtime\temp\2f4502f884627e7a7c7d4bbdf46f83db.php ( 0.26 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\admin\model\RouteModel.php ( 5.77 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\url.php ( 1.55 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\user\url.php ( 0.98 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Url.php ( 12.72 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\admin\model\NavMenuModel.php ( 6.43 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\model\Collection.php ( 2.67 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\extend\tree\Tree.php ( 13.84 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\admin\service\ApiService.php ( 1.33 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\lib\Storage.php ( 3.89 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\cmf\lib\storage\Local.php ( 2.86 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\service\ApiService.php ( 14.76 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\app\portal\model\PortalPostModel.php ( 10.00 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\extend\phpQuery\phpQuery.php ( 163.41 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\data\runtime\temp\bddf4f30edfb3a3f3dbc70aff47101ff.php ( 2.19 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\Response.php ( 8.33 KB )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\library\think\debug\Html.php ( 4.16 KB )</li>                </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ CACHE ] INIT File</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ BEHAVIOR ] Run cmf\behavior\InitHookBehavior @app_init [ RunTime:0.004737s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\simplewind\thinkphp\lang\zh-cn.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ ROUTE ] array (
                        'type' =&gt; 'module',
                        'module' =&gt;
                        array (
                        0 =&gt; '',
                        1 =&gt; NULL,
                        2 =&gt; NULL,
                        ),
                        )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ HEADER ] array (
                        'connection' =&gt; 'close',
                        'host' =&gt; 'www.sifc.net.cn',
                        'accept' =&gt; 'text/html, text/css',
                        'user-agent' =&gt; 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.1; Trident/6.0)',
                        'accept-language' =&gt; 'zh-CN',
                        'accept-encoding' =&gt; 'gzip, deflate',
                        )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ PARAM ] array (
                        )</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/../simplewind/cmf/lang\zh-cn.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/../app/admin\lang\zh-cn\common.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/../app/portal\lang\zh-cn\common.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ BEHAVIOR ] Run cmf\behavior\LangBehavior @app_begin [ RunTime:0.003313s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/../app/portal\lang\zh-cn.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/../app/portal\lang\zh-cn\home.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ BEHAVIOR ] Run cmf\behavior\HomeLangBehavior @home_init [ RunTime:0.002300s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ RUN ] app\portal\controller\IndexController-&gt;index[ E:\phpstudy_pro\WWW\sifc\app\portal\controller\IndexController.php ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ DB ] INIT mysql</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ VIEW ] themes/simpleboot3/portal\\index.html [ array (
                        0 =&gt; 'site_info',
                        1 =&gt; 'theme_vars',
                        2 =&gt; 'theme_widgets',
                        ) ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/plugins/sy_guestbook/lang/zh-cn.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ VIEW ] E:\phpstudy_pro\WWW\sifc\public/plugins/sy_guestbook/view/css.html [ array (
                        0 =&gt; 'site_info',
                        ) ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ BEHAVIOR ] Run plugins\sy_guestbook\SyGuestbookPlugin @before_head_end [ RunTime:0.051606s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ LANG ] E:\phpstudy_pro\WWW\sifc\public/plugins/sy_guestbook/lang/zh-cn.php</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ VIEW ] E:\phpstudy_pro\WWW\sifc\public/plugins/sy_guestbook/view/js.html [ array (
                        0 =&gt; 'site_info',
                        ) ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ BEHAVIOR ] Run plugins\sy_guestbook\SyGuestbookPlugin @before_body_end [ RunTime:0.004884s ]</li>                </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                    <li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ DB ] CONNECT:[ UseTime:0.001167s ] mysql:host=127.0.0.1;port=3306;dbname=sifc_cn;charset=utf8mb4</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_theme_file` [ RunTime:0.049971s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/aboutus' LIMIT 1 [ RunTime:0.000718s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/aboutus',`name`='关于我们',`more`='{\&quot;vars\&quot;:{\&quot;about_teacher\&quot;:{\&quot;title\&quot;:\&quot;\\u9ad8\\u7ea7\\u6559\\u5e08\\u6570\\u91cf\&quot;,\&quot;value\&quot;:\&quot;40\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u9ad8\\u7ea7\\u6559\\u5e08\\u6570\\u91cf\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_course\&quot;:{\&quot;title\&quot;:\&quot;\\u8bfe\\u7a0b\\u6570\\u91cf\&quot;,\&quot;value\&quot;:\&quot;56\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u8bfe\\u7a0b\\u6570\\u91cf\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_rate\&quot;:{\&quot;title\&quot;:\&quot;\\u540d\\u6821\\u5f55\\u53d6\\u7387\\uff08%\\uff09\&quot;,\&quot;value\&quot;:\&quot;100\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u540d\\u6821\\u5f55\\u53d6\\u7387\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_space\&quot;:{\&quot;title\&quot;:\&quot;\\u529e\\u5b66\\u5386\\u53f2\\uff08\\u5e74\\uff09\&quot;,\&quot;value\&quot;:\&quot;15\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u529e\\u5b66\\u5386\\u53f2\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_content\&quot;:{\&quot;title\&quot;:\&quot;\\u7b80\\u4ecb\&quot;,\&quot;value\&quot;:\&quot;\\u6df1\\u5733\\u56fd\\u9645\\u9884\\u79d1\\u5b66\\u9662\\uff08\\u82f1\\u6587\\u7b80\\u79f0SIFC\\uff09\\u4e8e2004\\u5e746\\u6708\\u7ecf\\u6df1\\u5733\\u5e02\\u6559\\u80b2\\u5c40\\u6279\\u51c6\\u6210\\u7acb\\uff0c\\u662f\\u6df1\\u5733\\u6700\\u65e9\\u63a8\\u884c\\u56fd\\u9645\\u5927\\u5b66\\u9884\\u79d1\\u8bfe\\u7a0b\\u548c\\u7f8e\\u56fd\\u4e2d\\u5b66\\u8bfe\\u7a0b\\u7684\\u8001\\u724c\\u56fd\\u9645\\u5b66\\u6821\\u3002\\u5b66\\u6821\\u79c9\\u627f\\u201c\\u878d\\u6c47\\u4e2d\\u897f\\u3001\\u5750\\u8a00\\u8d77\\u884c\\u201d\\u6821\\u8bad\\uff0c\\u575a\\u5b88\\u4e25\\u8c28\\u7684\\u5b66\\u672f\\u7cbe\\u795e\\uff0c\\u64b7\\u53d6\\u4e2d\\u897f\\u6587\\u5316\\u7684\\u7cbe\\u7cb9\\uff0c\\u7ecf\\u8fc7\\u957f\\u671f\\u63a2\\u7d22\\uff0c\\u6253\\u9020\\u51fa\\u72ec\\u7279\\u7684\\u591a\\u5143\\u6587\\u5316\\u6559\\u5b66\\u6a21\\u5f0f\\u4ee5\\u53ca\\u56fd\\u9645\\u5316\\u6821\\u672c\\u8bfe\\u7a0b\\u3002\\u5b66\\u6821\\u81f4\\u529b\\u4e8e\\u5c06\\u5b66\\u751f\\u57f9\\u80b2\\u4e3a\\u8eab\\u5fc3\\u5065\\u5eb7\\u3001\\u4eba\\u683c\\u5b8c\\u7f8e\\u3001\\u601d\\u60f3\\u72ec\\u7acb\\u3001\\u610f\\u5fd7\\u575a\\u97e7\\uff0c\\u5177\\u6709\\u5bb6\\u56fd\\u60c5\\u6000\\u3001\\u5bcc\\u6709\\u521b\\u65b0\\u7cbe\\u795e\\u7684\\u73b0\\u4ee3\\u516c\\u6c11\\u300215\\u5e74\\u529e\\u5b66\\u5386\\u7a0b\\uff0c\\u52a9\\u529b\\u4e0a\\u5343\\u540d\\u5b66\\u751f\\u8fdb\\u5165\\u4e16\\u754c\\u540d\\u6821\\uff0c\\u5e76\\u83b7\\u6279\\u52a0\\u5165\\u4e86\\u7f8e\\u56fd\\u5927\\u5b66\\u7406\\u4e8b\\u4f1a\\uff0c\\u6210\\u4e3aAP\\u56fd\\u9645\\u5b66\\u6821\\u6210\\u5458\\uff0c\\u529e\\u5b66\\u6210\\u679c\\u6590\\u7136\\uff0c\\u5728\\u6df1\\u5733\\u4e43\\u81f3\\u5168\\u56fd\\u7684\\u56fd\\u9645\\u6559\\u80b2\\u9886\\u57df\\u4eab\\u6709\\u76db\\u540d\\u3002\\r\\n\&quot;,\&quot;type\&quot;:\&quot;textarea\&quot;,\&quot;placeholder\&quot;:\&quot;\\u7b80\\u4ecb\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;about_teacher\&quot;:{\&quot;title\&quot;:\&quot;\\u9ad8\\u7ea7\\u6559\\u5e08\\u6570\\u91cf\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u9ad8\\u7ea7\\u6559\\u5e08\\u6570\\u91cf\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_course\&quot;:{\&quot;title\&quot;:\&quot;\\u8bfe\\u7a0b\\u6570\\u91cf\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u8bfe\\u7a0b\\u6570\\u91cf\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_rate\&quot;:{\&quot;title\&quot;:\&quot;\\u540d\\u6821\\u5f55\\u53d6\\u7387\\uff08%\\uff09\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u540d\\u6821\\u5f55\\u53d6\\u7387\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_space\&quot;:{\&quot;title\&quot;:\&quot;\\u529e\\u5b66\\u5386\\u53f2\\uff08\\u5e74\\uff09\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;placeholder\&quot;:\&quot;\\u529e\\u5b66\\u5386\\u53f2\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;about_content\&quot;:{\&quot;title\&quot;:\&quot;\\u7b80\\u4ecb\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;textarea\&quot;,\&quot;placeholder\&quot;:\&quot;\\u7b80\\u4ecb\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`description`='关于我们',`is_public`=1,`list_order`=0  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/aboutus' [ RunTime:0.025266s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/academiccourse' LIMIT 1 [ RunTime:0.000676s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/academiccourse',`name`='学术课程',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='学术课程',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/academiccourse' [ RunTime:0.021065s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/achievement' LIMIT 1 [ RunTime:0.000639s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/achievement',`name`='办学成果',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='办学成果',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/achievement' [ RunTime:0.011935s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/application' LIMIT 1 [ RunTime:0.000611s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/application',`name`='入学申请',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='入学申请',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/application' [ RunTime:0.009300s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/article' LIMIT 1 [ RunTime:0.000555s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Article/index',`file`='portal/article',`name`='新闻文章页',`more`='{\&quot;vars\&quot;:{\&quot;hot_articles_category_id\&quot;:{\&quot;title\&quot;:\&quot;Hot Articles\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;1\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:[]},\&quot;contact\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u65b9\\u5f0f\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;company\&quot;:{\&quot;title\&quot;:\&quot;\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;contacts\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u4eba\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u8054\\u7cfb\\u4eba\\u59d3\\u540d\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;phone\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u7535\\u8bdd\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u8054\\u7cfb\\u7535\\u8bdd\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;email\&quot;:{\&quot;title\&quot;:\&quot;\\u7535\\u5b50\\u90ae\\u4ef6email\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u7535\\u5b50\\u90ae\\u4ef6\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;tip\&quot;:\&quot;\\u586b\\u5165\\u8054\\u7cfb\\u65b9\\u5f0f \&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;hot_articles_category_id\&quot;:{\&quot;title\&quot;:\&quot;Hot Articles\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;1\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:[]},\&quot;contact\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u65b9\\u5f0f\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;company\&quot;:{\&quot;title\&quot;:\&quot;\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;contacts\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u4eba\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u8054\\u7cfb\\u4eba\\u59d3\\u540d\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;phone\&quot;:{\&quot;title\&quot;:\&quot;\\u8054\\u7cfb\\u7535\\u8bdd\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8bf7\\u586b\\u5165\\u8054\\u7cfb\\u7535\\u8bdd\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;email\&quot;:{\&quot;title\&quot;:\&quot;\\u7535\\u5b50\\u90ae\\u4ef6email\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u7535\\u5b50\\u90ae\\u4ef6\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;tip\&quot;:\&quot;\\u586b\\u5165\\u8054\\u7cfb\\u65b9\\u5f0f \&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`description`='新闻文章页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/article' [ RunTime:0.025085s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/association' LIMIT 1 [ RunTime:0.000642s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/AssociationArticle/index',`file`='portal/association',`name`=' 缤纷社团详情页面',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`=' 缤纷社团详情页面',`is_public`=0,`list_order`=10.1  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/association' [ RunTime:0.006000s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationlist' LIMIT 1 [ RunTime:0.000643s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/associationlist',`name`='缤纷社团列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='缤纷社团列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationlist' [ RunTime:0.020666s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationtea' LIMIT 1 [ RunTime:0.000645s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/AssociationteaArticle/index',`file`='portal/associationtea',`name`='社团师资详情页面',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`=' 社团师资详情页面',`is_public`=0,`list_order`=10.1  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationtea' [ RunTime:0.009749s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationtealist' LIMIT 1 [ RunTime:0.000593s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/associationtealist',`name`='社团师资列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='社团师资列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/associationtealist' [ RunTime:0.023074s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/campusdynamics' LIMIT 1 [ RunTime:0.000648s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/campusdynamics',`name`='校园动态',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='校园动态',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/campusdynamics' [ RunTime:0.015416s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/communityactivity' LIMIT 1 [ RunTime:0.000630s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/communityactivity',`name`='社团活动',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='社团活动',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/communityactivity' [ RunTime:0.011570s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/contact' LIMIT 1 [ RunTime:0.000570s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/contact',`name`='联系我们',`more`='{\&quot;vars\&quot;:{\&quot;address\&quot;:{\&quot;title\&quot;:\&quot;\\u5730\\u5740\&quot;,\&quot;value\&quot;:\&quot;\\u6df1\\u5733\\u5e02\\u5357\\u5c71\\u533a\\u4e3d\\u5c71\\u8def157\\u53f7\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;phone\&quot;:{\&quot;title\&quot;:\&quot;\\u7535\\u8bdd\&quot;,\&quot;value\&quot;:\&quot;(86 755)  26732100\\/26534780\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;fax\&quot;:{\&quot;title\&quot;:\&quot;\\u4f20\\u771f\&quot;,\&quot;value\&quot;:\&quot;(86 755)  26732100\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;email\&quot;:{\&quot;title\&quot;:\&quot;\\u90ae\\u7bb1\&quot;,\&quot;value\&quot;:\&quot;admission@sifc.net.cn\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;s_web\&quot;:{\&quot;title\&quot;:\&quot;\\u5b66\\u9662\\u7f51\\u7ad9\&quot;,\&quot;value\&quot;:\&quot;http:\\/\\/www.sifc.net.cn\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;er\&quot;:{\&quot;title\&quot;:\&quot;\\u4e8c\\u7ef4\\u7801\&quot;,\&quot;value\&quot;:\&quot;admin\\/20181120\\/fd84c237dbffe4b0c5ff200a3c79643e.jpg\&quot;,\&quot;type\&quot;:\&quot;image\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;widgets\&quot;:{\&quot;mylinks\&quot;:{\&quot;title\&quot;:\&quot;\\u53cb\\u60c5\\u94fe\\u63a5\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;mylinks\&quot;:{\&quot;title\&quot;:\&quot;\\u53cb\\u60c5\\u94fe\\u63a5\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;links_name\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5\\u540d\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;},\&quot;links_web\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5\\u5730\\u5740\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;},\&quot;links_logo\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5Logo\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;image\&quot;}},\&quot;tip\&quot;:\&quot;\&quot;}}}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;address\&quot;:{\&quot;title\&quot;:\&quot;\\u5730\\u5740\&quot;,\&quot;value\&quot;:\&quot;\\u6df1\\u5733\\u6de1\\u6de1\\u7684\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;phone\&quot;:{\&quot;title\&quot;:\&quot;\\u7535\\u8bdd\&quot;,\&quot;value\&quot;:\&quot;\\u7f8e\\u56fd\\u9ad8\\u4e2d021 1000 0001\\uff0c\\u7f8e\\u56fd\\u521d\\u4e2d0022552\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;fax\&quot;:{\&quot;title\&quot;:\&quot;\\u4f20\\u771f\&quot;,\&quot;value\&quot;:\&quot;555885222\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;email\&quot;:{\&quot;title\&quot;:\&quot;\\u90ae\\u7bb1\&quot;,\&quot;value\&quot;:\&quot;478519726@qq.com\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;s_web\&quot;:{\&quot;title\&quot;:\&quot;\\u5b66\\u9662\\u7f51\\u7ad9\&quot;,\&quot;value\&quot;:\&quot;http:\\/\\/www.sifc.net.cn\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}},\&quot;er\&quot;:{\&quot;title\&quot;:\&quot;\\u4e8c\\u7ef4\\u7801\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;image\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;widgets\&quot;:{\&quot;mylinks\&quot;:{\&quot;title\&quot;:\&quot;\\u53cb\\u60c5\\u94fe\\u63a5\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;mylinks\&quot;:{\&quot;title\&quot;:\&quot;\\u53cb\\u60c5\\u94fe\\u63a5\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;links_name\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5\\u540d\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;},\&quot;links_web\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5\\u5730\\u5740\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;},\&quot;links_logo\&quot;:{\&quot;title\&quot;:\&quot;\\u94fe\\u63a5Logo\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;image\&quot;}},\&quot;tip\&quot;:\&quot;\&quot;}}}}}',`description`='联系我们',`is_public`=1,`list_order`=3  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/contact' [ RunTime:0.015276s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/download' LIMIT 1 [ RunTime:0.000632s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/download',`name`='资料下载',`more`='{\&quot;widgets\&quot;:{\&quot;download\&quot;:{\&quot;title\&quot;:\&quot;\\u8d44\\u6599\\u4e0b\\u8f7d\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;download\&quot;:{\&quot;title\&quot;:\&quot;\\u8d44\\u6599\\u4e0b\\u8f7d\&quot;,\&quot;value\&quot;:[{\&quot;download_name\&quot;:\&quot;\\u65b0\\u751f\\u5065\\u5eb7\\u8bb0\\u5f55\\u8868 Health History Form for New Students\&quot;,\&quot;download_link\&quot;:\&quot;admin\\/20190414\\/b8f0243efc26131a1b80894aff6403a1.pdf\&quot;,\&quot;download_time\&quot;:\&quot;2018-05-06\&quot;},{\&quot;download_name\&quot;:\&quot;\\u5165\\u5b66\\u7533\\u8bf7\\u4e2a\\u4eba\\u9648\\u8ff0\\u8868 Personal Statement of Application\&quot;,\&quot;download_link\&quot;:\&quot;admin\\/20190414\\/eb18d3912172a1d9c88d4ef641c5158f.pdf\&quot;,\&quot;download_time\&quot;:\&quot;2018-05-06\&quot;},{\&quot;download_name\&quot;:\&quot;\\u6df1\\u5733\\u56fd\\u9645\\u9884\\u79d1\\u5b66\\u9662\\u5b98\\u65b9\\u6210\\u7ee9\\u5355\\u3001\\u5404\\u7c7b\\u8bc1\\u660e\\u529e\\u7406\\u6d41\\u7a0b\&quot;,\&quot;download_link\&quot;:\&quot;admin\\/20190628\\/f357126712060c8e9e6997f623a5af4a.pdf\&quot;,\&quot;download_time\&quot;:\&quot;2019-01-04\&quot;},{\&quot;download_name\&quot;:\&quot;\\u6df1\\u5733\\u56fd\\u9645\\u9884\\u79d1\\u5b66\\u9662\\u5b98\\u65b9\\u6210\\u7ee9\\u5355\\u5728\\u8bfb\\u8bc1\\u660e\\u51c6\\u5047\\u4fe1\\u529e\\u7406\\u7533\\u8bf7\\u8868\&quot;,\&quot;download_link\&quot;:\&quot;admin\\/20190414\\/70fe91cd35385ba979e6423b3796fee7.pdf\&quot;,\&quot;download_time\&quot;:\&quot;2019-01-04\&quot;},{\&quot;download_name\&quot;:\&quot;\\u5165\\u5b66\\u7533\\u8bf7\\u8868Enrolment &amp;amp; Application Form\&quot;,\&quot;download_link\&quot;:\&quot;admin\\/20190823\\/9d9c6600710546edcc9058851339f4da.pdf\&quot;,\&quot;download_time\&quot;:\&quot;2018-05-01\&quot;}],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;download_name\&quot;:{\&quot;title\&quot;:\&quot;\\u540d\\u79f0\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}},\&quot;download_link\&quot;:{\&quot;title\&quot;:\&quot;\\u4e0b\\u8f7d\\u94fe\\u63a5\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;file\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}},\&quot;download_time\&quot;:{\&quot;title\&quot;:\&quot;\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;date\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}}},\&quot;tip\&quot;:\&quot;\&quot;}}}}}',`config_more`='{\&quot;widgets\&quot;:{\&quot;download\&quot;:{\&quot;title\&quot;:\&quot;\\u8d44\\u6599\\u4e0b\\u8f7d\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;download\&quot;:{\&quot;title\&quot;:\&quot;\\u8d44\\u6599\\u4e0b\\u8f7d\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;download_name\&quot;:{\&quot;title\&quot;:\&quot;\\u540d\\u79f0\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}},\&quot;download_link\&quot;:{\&quot;title\&quot;:\&quot;\\u4e0b\\u8f7d\\u94fe\\u63a5\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;file\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}},\&quot;download_time\&quot;:{\&quot;title\&quot;:\&quot;\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;date\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;message\&quot;:{\&quot;require\&quot;:\&quot;\\u4e0d\\u80fd\\u4e3a\\u7a7a\&quot;}}},\&quot;tip\&quot;:\&quot;\&quot;}}}}}',`description`='资料下载',`is_public`=0,`list_order`=5  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/download' [ RunTime:0.005518s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/gaincourse' LIMIT 1 [ RunTime:0.000658s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/gaincourse',`name`='增益课程',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='增益课程',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/gaincourse' [ RunTime:0.011153s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/index' LIMIT 1 [ RunTime:0.000568s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Index/index',`file`='portal/index',`name`='首页',`more`='{\&quot;vars\&quot;:{\&quot;top_slide\&quot;:{\&quot;title\&quot;:\&quot;\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;admin\\/Slide\\/index\&quot;,\&quot;multi\&quot;:false},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;tip\&quot;:\&quot;\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;widgets\&quot;:{\&quot;last_news\&quot;:{\&quot;title\&quot;:\&quot;\\u6700\\u65b0\\u8d44\\u8baf\&quot;,\&quot;display\&quot;:1,\&quot;vars\&quot;:{\&quot;last_news_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u6587\\u7ae0\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;1,5,6,7\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;valueText\&quot;:\&quot;\\u65b0\\u95fb,\\u5b66\\u9662\\u52a8\\u6001,\\u5a92\\u4f53\\u62a5\\u9053,\\u901a\\u77e5\\u516c\\u544a\&quot;}}},\&quot;last_works\&quot;:{\&quot;title\&quot;:\&quot;\\u5b66\\u751f\\u4f5c\\u54c1\&quot;,\&quot;display\&quot;:1,\&quot;vars\&quot;:{\&quot;last_last_works_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;14\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;valueText\&quot;:\&quot;\\u5b66\\u751f\\u4f5c\\u54c1\&quot;}}},\&quot;last_graduates\&quot;:{\&quot;title\&quot;:\&quot;\\u6bd5\\u4e1a\\u751f\&quot;,\&quot;display\&quot;:1,\&quot;vars\&quot;:{\&quot;last_last_graduates_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;12\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true},\&quot;valueText\&quot;:\&quot;\\u4f18\\u79c0\\u6bd5\\u4e1a\\u751f\&quot;}}}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;top_slide\&quot;:{\&quot;title\&quot;:\&quot;\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;admin\\/Slide\\/index\&quot;,\&quot;multi\&quot;:false},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;tip\&quot;:\&quot;\\u9876\\u90e8\\u5e7b\\u706f\\u7247\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}},\&quot;widgets\&quot;:{\&quot;last_news\&quot;:{\&quot;title\&quot;:\&quot;\\u65b0\\u95fb\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;last_news_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u6587\\u7ae0\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}},\&quot;last_works\&quot;:{\&quot;title\&quot;:\&quot;\\u5b66\\u751f\\u4f5c\\u54c1\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;last_last_works_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}},\&quot;last_graduates\&quot;:{\&quot;title\&quot;:\&quot;\\u6bd5\\u4e1a\\u751f\&quot;,\&quot;display\&quot;:\&quot;1\&quot;,\&quot;vars\&quot;:{\&quot;last_last_graduates_category_id\&quot;:{\&quot;title\&quot;:\&quot;\\u5206\\u7c7bID\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;dataSource\&quot;:{\&quot;api\&quot;:\&quot;portal\\/Category\\/index\&quot;,\&quot;multi\&quot;:true},\&quot;placeholder\&quot;:\&quot;\\u8bf7\\u9009\\u62e9\\u5206\\u7c7b\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}}}',`description`='首页模板文件',`is_public`=0,`list_order`=9.1  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/index' [ RunTime:0.009955s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/list' LIMIT 1 [ RunTime:0.000541s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/list',`name`='新闻文章列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='新闻文章列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/list' [ RunTime:0.010833s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/masterarticle' LIMIT 1 [ RunTime:0.000601s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/MasterArticle/index',`file`='portal/masterarticle',`name`='硕士生去向详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='硕士生去向详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/masterarticle' [ RunTime:0.009226s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/masterlist' LIMIT 1 [ RunTime:0.000632s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/masterlist',`name`='硕士生去向列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='硕士生去向列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/masterlist' [ RunTime:0.009570s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/msgboard' LIMIT 1 [ RunTime:0.000539s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/msgboard',`name`='预约来访',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='预约来访',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/msgboard' [ RunTime:0.008580s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/page' LIMIT 1 [ RunTime:0.000518s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/page',`name`='单页面',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='单页面模板文件',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/page' [ RunTime:0.010303s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/paintingarticle' LIMIT 1 [ RunTime:0.000592s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/PaintingArticle/index',`file`='portal/paintingarticle',`name`='学生作品详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='学生作品详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/paintingarticle' [ RunTime:0.020010s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/paintinglist' LIMIT 1 [ RunTime:0.000581s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/paintinglist',`name`='学生作品列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='学生作品列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/paintinglist' [ RunTime:0.015810s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/recurit' LIMIT 1 [ RunTime:0.000575s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/recurit',`name`='招聘页面',`more`='{\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;widgets\&quot;:[]}',`description`='招聘页面',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/recurit' [ RunTime:0.009458s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/search' LIMIT 1 [ RunTime:0.000601s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/search/index',`file`='portal/search',`name`='搜索页面',`more`='{\&quot;vars\&quot;:{\&quot;varName1\&quot;:{\&quot;title\&quot;:\&quot;\\u70ed\\u95e8\\u641c\\u7d22\&quot;,\&quot;value\&quot;:\&quot;1\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8fd9\\u662f\\u4e00\\u4e2atext\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;varName1\&quot;:{\&quot;title\&quot;:\&quot;\\u70ed\\u95e8\\u641c\\u7d22\&quot;,\&quot;value\&quot;:\&quot;1\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\\u8fd9\\u662f\\u4e00\\u4e2atext\&quot;,\&quot;rule\&quot;:{\&quot;require\&quot;:true}}}}',`description`='搜索模板文件',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/search' [ RunTime:0.007682s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/studentarticle' LIMIT 1 [ RunTime:0.000636s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/StudentArticle/index',`file`='portal/studentarticle',`name`='优秀毕业生详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='优秀毕业生详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/studentarticle' [ RunTime:0.010794s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/studentlist' LIMIT 1 [ RunTime:0.000563s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/studentlist',`name`='优秀毕业学生列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='优秀毕业学生列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/studentlist' [ RunTime:0.008185s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/teacherarticle' LIMIT 1 [ RunTime:0.000538s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/TeacherArticle/index',`file`='portal/teacherarticle',`name`='师资详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='师资详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/teacherarticle' [ RunTime:0.017792s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/teacherlist' LIMIT 1 [ RunTime:0.000617s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/teacherlist',`name`='师资列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='师资列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/teacherlist' [ RunTime:0.007693s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/undergraduatearticle' LIMIT 1 [ RunTime:0.000590s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/UndergraduateArticle/index',`file`='portal/undergraduatearticle',`name`='本科生去向详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='本科生去向详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/undergraduatearticle' [ RunTime:0.016889s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/undergraduatelist' LIMIT 1 [ RunTime:0.002059s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/undergraduatelist',`name`='本科生去向列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='本科生去向列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/undergraduatelist' [ RunTime:0.017159s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visit' LIMIT 1 [ RunTime:0.000707s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/Page/index',`file`='portal/visit',`name`='预约来访',`more`='{\&quot;vars\&quot;:{\&quot;time\&quot;:{\&quot;title\&quot;:\&quot;\\u9884\\u7ea6\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:[{\&quot;t_content\&quot;:\&quot;\\u65e5\\u5e38\\u8bbf\\u6821\\uff08\\u62db\\u529e\\u56de\\u8bbf\\u786e\\u5b9a\\u5230\\u6821\\u65e5\\u671f\\uff09\&quot;},{\&quot;t_content\&quot;:\&quot;2019-01-11  15:30-16:30 \\u5c0f\\u5b66\\u4e0b\\u5348\\u8336\&quot;},{\&quot;t_content\&quot;:\&quot;2019-01-12  10:30-12:00 \\u9662\\u957f\\u4ea4\\u6d41\\u65e5\&quot;},{\&quot;t_content\&quot;:\&quot;2019-01-19 \\u6821\\u56ed\\u5f00\\u653e\\u65e5\&quot;}],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u9884\\u7ea6\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}},\&quot;grade\&quot;:{\&quot;title\&quot;:\&quot;\\u62a5\\u8003\\u5e74\\u7ea7\&quot;,\&quot;value\&quot;:[{\&quot;t_content\&quot;:\&quot;G1\&quot;},{\&quot;t_content\&quot;:\&quot;G2\&quot;},{\&quot;t_content\&quot;:\&quot;G3\&quot;},{\&quot;t_content\&quot;:\&quot;G4\&quot;},{\&quot;t_content\&quot;:\&quot;G5\&quot;},{\&quot;t_content\&quot;:\&quot;G6\&quot;},{\&quot;t_content\&quot;:\&quot;G7\&quot;},{\&quot;t_content\&quot;:\&quot;G8\&quot;},{\&quot;t_content\&quot;:\&quot;G9\&quot;},{\&quot;t_content\&quot;:\&quot;G10\&quot;},{\&quot;t_content\&quot;:\&quot;G11\&quot;},{\&quot;t_content\&quot;:\&quot;G12\&quot;}],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u62a5\\u8003\\u5e74\\u7ea7\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}},\&quot;channel\&quot;:{\&quot;title\&quot;:\&quot;\\u4e86\\u89e3\\u6e20\\u9053\&quot;,\&quot;value\&quot;:[{\&quot;t_content\&quot;:\&quot;\\u62a5\\u7eb8\\u65b0\\u95fb\&quot;},{\&quot;t_content\&quot;:\&quot;\\u5c55\\u4f1a\&quot;},{\&quot;t_content\&quot;:\&quot;\\u4e92\\u8054\\u7f51\\u641c\\u7d22\&quot;},{\&quot;t_content\&quot;:\&quot;\\u4e66\\u57ce\&quot;},{\&quot;t_content\&quot;:\&quot;\\u670b\\u53cb\\u4ecb\\u7ecd\&quot;},{\&quot;t_content\&quot;:\&quot;\\u5fae\\u4fe1\&quot;},{\&quot;t_content\&quot;:\&quot;\\u5176\\u4ed6\&quot;}],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u4e86\\u89e3\\u6e20\\u9053\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}}},\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:{\&quot;time\&quot;:{\&quot;title\&quot;:\&quot;\\u9884\\u7ea6\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u9884\\u7ea6\\u65f6\\u95f4\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}},\&quot;grade\&quot;:{\&quot;title\&quot;:\&quot;\\u62a5\\u8003\\u5e74\\u7ea7\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u62a5\\u8003\\u5e74\\u7ea7\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}},\&quot;channel\&quot;:{\&quot;title\&quot;:\&quot;\\u4e86\\u89e3\\u6e20\\u9053\&quot;,\&quot;value\&quot;:[],\&quot;type\&quot;:\&quot;array\&quot;,\&quot;item\&quot;:{\&quot;t_content\&quot;:{\&quot;title\&quot;:\&quot;\\u4e86\\u89e3\\u6e20\\u9053\&quot;,\&quot;value\&quot;:\&quot;\&quot;,\&quot;type\&quot;:\&quot;text\&quot;}}}},\&quot;widgets\&quot;:[]}',`description`='预约来访',`is_public`=0,`list_order`=1  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visit' [ RunTime:0.026798s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visitarticle' LIMIT 1 [ RunTime:0.000665s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/VisitArticle/index',`file`='portal/visitarticle',`name`='名校来访详情页',`more`='{\&quot;vars\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[]}',`description`='名校来访详情页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visitarticle' [ RunTime:0.019846s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visitlist' LIMIT 1 [ RunTime:0.000652s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='portal/List/index',`file`='portal/visitlist',`name`='名校来访列表页',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='名校来访列表页',`is_public`=0,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'portal/visitlist' [ RunTime:0.007910s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/config' LIMIT 1 [ RunTime:0.000537s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='public/Config',`file`='public/config',`name`='模板全局配置',`more`='{\&quot;vars\&quot;:{\&quot;enable_mobile\&quot;:{\&quot;title\&quot;:\&quot;\\u624b\\u673a\\u6ce8\\u518c\&quot;,\&quot;value\&quot;:1,\&quot;type\&quot;:\&quot;select\&quot;,\&quot;options\&quot;:{\&quot;1\&quot;:\&quot;\\u5f00\\u542f\&quot;,\&quot;0\&quot;:\&quot;\\u5173\\u95ed\&quot;},\&quot;tip\&quot;:\&quot;\&quot;}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;enable_mobile\&quot;:{\&quot;title\&quot;:\&quot;\\u624b\\u673a\\u6ce8\\u518c\&quot;,\&quot;value\&quot;:1,\&quot;type\&quot;:\&quot;select\&quot;,\&quot;options\&quot;:{\&quot;1\&quot;:\&quot;\\u5f00\\u542f\&quot;,\&quot;0\&quot;:\&quot;\\u5173\\u95ed\&quot;},\&quot;tip\&quot;:\&quot;\&quot;}}}',`description`='模板全局配置文件',`is_public`=1,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/config' [ RunTime:0.011727s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/footer' LIMIT 1 [ RunTime:0.000574s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='public/Config',`file`='public/footer',`name`='底部数据配置',`more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`config_more`='{\&quot;vars\&quot;:[],\&quot;widgets\&quot;:[]}',`description`='底部数据配置',`is_public`=1,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/footer' [ RunTime:0.014752s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/nav' LIMIT 1 [ RunTime:0.000673s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme_file`  SET `theme`='simpleboot3',`action`='public/Nav',`file`='public/nav',`name`='导航条',`more`='{\&quot;vars\&quot;:{\&quot;company_name\&quot;:{\&quot;title\&quot;:\&quot;\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;name\&quot;:\&quot;company_name\&quot;,\&quot;value\&quot;:\&quot;ThinkCMF\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:[]}}}',`config_more`='{\&quot;vars\&quot;:{\&quot;company_name\&quot;:{\&quot;title\&quot;:\&quot;\\u516c\\u53f8\\u540d\\u79f0\&quot;,\&quot;name\&quot;:\&quot;company_name\&quot;,\&quot;value\&quot;:\&quot;ThinkCMF\&quot;,\&quot;type\&quot;:\&quot;text\&quot;,\&quot;tip\&quot;:\&quot;\&quot;,\&quot;rule\&quot;:[]}}}',`description`='导航条模板文件',`is_public`=1,`list_order`=10  WHERE  `theme` = 'simpleboot3'  AND `file` = 'public/nav' [ RunTime:0.008747s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3' [ RunTime:0.000989s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_theme` [ RunTime:0.040596s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] UPDATE `sifc_theme`  SET `name`='simpleboot3',`version`='1.0.2',`demo_url`='http://www.showme.cc',`author`='素米',`lang`='zh-cn',`author_url`='http://www.showme.cc',`keywords`='素米',`description`='素米'  WHERE  `theme` = 'simpleboot3' [ RunTime:0.015033s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `more` FROM `sifc_theme_file` WHERE  `theme` = 'simpleboot3'  AND (  `is_public` = 1 OR `file` = 'portal/index' ) [ RunTime:0.000716s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_plugin` [ RunTime:0.041970s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `config` FROM `sifc_plugin` WHERE  `name` = 'SyGuestbook' LIMIT 1 [ RunTime:0.000576s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_nav` [ RunTime:0.039728s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `id` FROM `sifc_nav` WHERE  `is_main` = 1 LIMIT 1 [ RunTime:0.000515s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_nav_menu` [ RunTime:0.032159s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_nav_menu` WHERE  `nav_id` = 1  AND `status` = 1 ORDER BY list_order ASC [ RunTime:0.000802s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_slide` [ RunTime:0.032379s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT COUNT(*) AS tp_count FROM `sifc_slide` WHERE  `id` = 1  AND `status` = 1  AND `delete_time` = 0 LIMIT 1 [ RunTime:0.000522s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_slide_item` [ RunTime:0.031084s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_slide_item` WHERE  `status` = 1  AND `slide_id` = 1 ORDER BY list_order ASC [ RunTime:0.000679s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_option` [ RunTime:0.031387s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `option_value` FROM `sifc_option` WHERE  `option_name` = 'storage' LIMIT 1 [ RunTime:0.000502s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_portal_post` [ RunTime:0.032004s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `post`.*,min(category_post.category_id) as category_id FROM `sifc_portal_post` `post` INNER JOIN `sifc_portal_category_post` `category_post` ON `post`.`id`=`category_post`.`post_id` WHERE  ( `post`.`published_time` &gt;  '0' AND `post`.`published_time` &lt; 1571193088 )  AND `post`.`post_status` = 1  AND `post`.`post_type` = 1  AND `post`.`delete_time` = 0  AND `category_post`.`category_id` IN ('1','5','6','7') GROUP BY `post`.`id` ORDER BY post.is_top DESC LIMIT 4 [ RunTime:0.061238s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `post`.*,min(category_post.category_id) as category_id FROM `sifc_portal_post` `post` INNER JOIN `sifc_portal_category_post` `category_post` ON `post`.`id`=`category_post`.`post_id` WHERE  ( `post`.`published_time` &gt;  '0' AND `post`.`published_time` &lt; 1571193089 )  AND `post`.`post_status` = 1  AND `post`.`post_type` = 1  AND `post`.`delete_time` = 0  AND `category_post`.`category_id` IN ('1','5','6','7') GROUP BY `post`.`id` ORDER BY post.published_time DESC LIMIT 4 [ RunTime:0.150443s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `post`.*,min(category_post.category_id) as category_id FROM `sifc_portal_post` `post` INNER JOIN `sifc_portal_category_post` `category_post` ON `post`.`id`=`category_post`.`post_id` WHERE  ( `post`.`published_time` &gt;  '0' AND `post`.`published_time` &lt; 1571193089 )  AND `post`.`post_status` = 1  AND `post`.`post_type` = 1  AND `post`.`delete_time` = 0  AND `category_post`.`category_id` = '14' GROUP BY `post`.`id` ORDER BY post.published_time DESC LIMIT 12 [ RunTime:0.041740s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT `post`.*,min(category_post.category_id) as category_id FROM `sifc_portal_post` `post` INNER JOIN `sifc_portal_category_post` `category_post` ON `post`.`id`=`category_post`.`post_id` WHERE  ( `post`.`published_time` &gt;  '0' AND `post`.`published_time` &lt; 1571193089 )  AND `post`.`post_status` = 1  AND `post`.`post_type` = 1  AND `post`.`delete_time` = 0  AND `category_post`.`category_id` = '12' GROUP BY `post`.`id` ORDER BY category_post.list_order DESC LIMIT 16 [ RunTime:0.029866s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SHOW COLUMNS FROM `sifc_link` [ RunTime:0.040789s ]</li><li style="border-bottom:1px solid #EEE;font-size:14px;padding:0 12px">[ SQL ] SELECT * FROM `sifc_link` WHERE  `status` = 1 ORDER BY list_order ASC [ RunTime:0.000663s ]</li>                </ol>
            </div>
            <div style="display:none;">
                <ol style="padding: 0; margin:0">
                </ol>
            </div>
        </div>
    </div>
    <div id="think_page_trace_close" style="display:none;text-align:right;height:15px;position:absolute;top:10px;right:12px;cursor:pointer;"><img style="vertical-align:top;" src="data:image/gif;base64,R0lGODlhDwAPAJEAAAAAAAMDA////wAAACH/C1hNUCBEYXRhWE1QPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4gPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iQWRvYmUgWE1QIENvcmUgNS4wLWMwNjAgNjEuMTM0Nzc3LCAyMDEwLzAyLzEyLTE3OjMyOjAwICAgICAgICAiPiA8cmRmOlJERiB4bWxuczpyZGY9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkvMDIvMjItcmRmLXN5bnRheC1ucyMiPiA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M1IFdpbmRvd3MiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MUQxMjc1MUJCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MUQxMjc1MUNCQUJDMTFFMTk0OUVGRjc3QzU4RURFNkEiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxRDEyNzUxOUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxRDEyNzUxQUJBQkMxMUUxOTQ5RUZGNzdDNThFREU2QSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PgH//v38+/r5+Pf29fTz8vHw7+7t7Ovq6ejn5uXk4+Lh4N/e3dzb2tnY19bV1NPS0dDPzs3My8rJyMfGxcTDwsHAv769vLu6ubi3trW0s7KxsK+urayrqqmop6alpKOioaCfnp2cm5qZmJeWlZSTkpGQj46NjIuKiYiHhoWEg4KBgH9+fXx7enl4d3Z1dHNycXBvbm1sa2ppaGdmZWRjYmFgX15dXFtaWVhXVlVUU1JRUE9OTUxLSklIR0ZFRENCQUA/Pj08Ozo5ODc2NTQzMjEwLy4tLCsqKSgnJiUkIyIhIB8eHRwbGhkYFxYVFBMSERAPDg0MCwoJCAcGBQQDAgEAACH5BAAAAAAALAAAAAAPAA8AAAIdjI6JZqotoJPR1fnsgRR3C2jZl3Ai9aWZZooV+RQAOw==" /></div>
</div>
<div id="think_page_trace_open" style="height:30px;float:right;text-align:right;overflow:hidden;position:fixed;bottom:0;right:0;color:#000;line-height:30px;cursor:pointer;">
    <div style="background:#232323;color:#FFF;padding:0 6px;float:right;line-height:30px;font-size:14px">1.657920s </div>
    <img width="30" style="" title="ShowPageTrace" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyBpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBXaW5kb3dzIiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjVERDVENkZGQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjVERDVENzAwQjkyNDExRTE5REY3RDQ5RTQ2RTRDQUJCIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6NURENUQ2RkRCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6NURENUQ2RkVCOTI0MTFFMTlERjdENDlFNDZFNENBQkIiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz5fx6IRAAAMCElEQVR42sxae3BU1Rk/9+69+8xuNtkHJAFCSIAkhMgjCCJQUi0GtEIVbP8Qq9LH2No6TmfaztjO2OnUdvqHFMfOVFTqIK0vUEEeqUBARCsEeYQkEPJoEvIiELLvvc9z+p27u2F3s5tsBB1OZiebu5dzf7/v/L7f952zMM8cWIwY+Mk2ulCp92Fnq3XvnzArr2NZnYNldDp0Gw+/OEQ4+obQn5D+4Ubb22+YOGsWi/Todh8AHglKEGkEsnHBQ162511GZFgW6ZCBM9/W4H3iNSQqIe09O196dLKX7d1O39OViP/wthtkND62if/wj/DbMpph8BY/m9xy8BoBmQk+mHqZQGNy4JYRwCoRbwa8l4JXw6M+orJxpU0U6ToKy/5bQsAiTeokGKkTx46RRxxEUgrwGgF4MWNNEJCGgYTvpgnY1IJWg5RzfqLgvcIgktX0i8dmMlFA8qCQ5L0Z/WObPLUxT1i4lWSYDISoEfBYGvM+LlMQQdkLHoWRRZ8zYQI62Thswe5WTORGwNXDcGjqeOA9AF7B8rhzsxMBEoJ8oJKaqPu4hblHMCMPwl9XeNWyb8xkB/DDGYKfMAE6aFL7xesZ389JlgG3XHEMI6UPDOP6JHHu67T2pwNPI69mCP4rEaBDUAJaKc/AOuXiwH07VCS3w5+UQMAuF/WqGI+yFIwVNBwemBD4r0wgQiKoFZa00sEYTwss32lA1tPwVxtc8jQ5/gWCwmGCyUD8vRT0sHBFW4GJDvZmrJFWRY1EkrGA6ZB8/10fOZSSj0E6F+BSP7xidiIzhBmKB09lEwHPkG+UQIyEN44EBiT5vrv2uJXyPQqSqO930fxvcvwbR/+JAkD9EfASgI9EHlp6YiHO4W+cAB20SnrFqxBbNljiXf1Pl1K2S0HCWfiog3YlAD5RGwwxK6oUjTweuVigLjyB0mX410mAFnMoVK1lvvUvgt8fUJH0JVyjuvcmg4dE5mUiFtD24AZ4qBVELxXKS+pMxN43kSdzNwudJ+bQbLlmnxvPOQoCugSap1GnSRoG8KOiKbH+rIA0lEeSAg3y6eeQ6XI2nrYnrPM89bUTgI0Pdqvl50vlNbtZxDUBcLBK0kPd5jPziyLdojJIN0pq5/mdzwL4UVvVInV5ncQEPNOUxa9d0TU+CW5l+FoI0GSDKHVVSOs+0KOsZoxwOzSZNFGv0mQ9avyLCh2Hpm+70Y0YJoJVgmQv822wnDC8Miq6VjJ5IFed0QD1YiAbT+nQE8v/RMZfmgmcCRHIIu7Bmcp39oM9fqEychcA747KxQ/AEyqQonl7hATtJmnhO2XYtgcia01aSbVMenAXrIomPcLgEBA4liGBzFZAT8zBYqW6brI67wg8sFVhxBhwLwBP2+tqBQqqK7VJKGh/BRrfTr6nWL7nYBaZdBJHqrX3kPEPap56xwE/GvjJTRMADeMCdcGpGXL1Xh4ZL8BDOlWkUpegfi0CeDzeA5YITzEnddv+IXL+UYCmqIvqC9UlUC/ki9FipwVjunL3yX7dOTLeXmVMAhbsGporPfyOBTm/BJ23gTVehsvXRnSewagUfpBXF3p5pygKS7OceqTjb7h2vjr/XKm0ZofKSI2Q/J102wHzatZkJPYQ5JoKsuK+EoHJakVzubzuLQDepCKllTZi9AG0DYg9ZLxhFaZsOu7bvlmVI5oPXJMQJcHxHClSln1apFTvAimeg48u0RWFeZW4lVcjbQWZuIQK1KozZfIDO6CSQmQQXdpBaiKZyEWThVK1uEc6v7V7uK0ysduExPZx4vysDR+4SelhBYm0R6LBuR4PXts8MYMcJPsINo4YZCDLj0sgB0/vLpPXvA2Tn42Cv5rsLulGubzW0sEd3d4W/mJt2Kck+DzDMijfPLOjyrDhXSh852B+OvflqAkoyXO1cYfujtc/i3jJSAwhgfFlp20laMLOku/bC7prgqW7lCn4auE5NhcXPd3M7x70+IceSgZvNljCd9k3fLjYsPElqLR14PXQZqD2ZNkkrAB79UeJUebFQmXpf8ZcAQt2XrMQdyNUVBqZoUzAFyp3V3xi/MubUA/mCT4Fhf038PC8XplhWnCmnK/ZzyC2BSTRSqKVOuY2kB8Jia0lvvRIVoP+vVWJbYarf6p655E2/nANBMCWkgD49DA0VAMyI1OLFMYCXiU9bmzi9/y5i/vsaTpHPHidTofzLbM65vMPva9HlovgXp0AvjtaqYMfDD0/4mAsYE92pxa+9k1QgCnRVObCpojpzsKTPvayPetTEgBdwnssjuc0kOBFX+q3HwRQxdrOLAqeYRjkMk/trTSu2Z9Lik7CfF0AvjtqAhS4NHobGXUnB5DQs8hG8p/wMX1r4+8xkmyvQ50JVq72TVeXbz3HvpWaQJi57hJYTw4kGbtS+C2TigQUtZUX+X27QQq2ePBZBru/0lxTm8fOOQ5yaZOZMAV+he4FqIMB+LQB0UgMSajANX29j+vbmly8ipRvHeSQoQOkM5iFXcPQCVwDMs5RBCQmaPOyvbNd6uwvQJ183BZQG3Zc+Eiv7vQOKu8YeDmMcJlt2ckyftVeMIGLBCmdMHl/tFILYwGPjXWO3zOfSq/+om+oa7Mlh2fpSsRGLp7RAW3FUVjNHgiMhyE6zBFjM2BdkdJGO7nP1kJXWAtBuBpPIAu7f+hhu7bFXIuC5xWrf0X2xreykOsUyKkF2gwadbrXDcXrfKxR43zGcSj4t/cCgr+a1iy6EjE5GYktUCl9fwfMeylyooGF48bN2IGLTw8x7StS7sj8TF9FmPGWQhm3rRR+o9lhvjJvSYAdfDUevI1M6bnX/OwWaDMOQ8RPgKRo0eulBTdT8AW2kl8e9L7UHghHwMfLiZPNoSpx0yugpQZaFqKWqxVSM3a2pN1SAhC2jf94I7ybBI7EL5A2Wvu5ht3xsoEt4+Ay/abXgCQAxyOeDsDlTCQzy75ohcGgv9Tra9uiymRUYTLrswOLlCdfAQf7HPDQQ4ErAH5EDXB9cMxWYpjtXApRncojS0sbV/cCgHTHwGNBJy+1PQE2x56FpaVR7wfQGZ37V+V+19EiHNvR6q1fRUjqvbjbMq1/qfHxbTrE10ePY2gPFk48D2CVMTf1AF4PXvyYR9dV6Wf7H413m3xTWQvYGhQ7mfYwA5mAX+18Vue05v/8jG/fZX/IW5MKPKtjSYlt0ellxh+/BOCPAwYaeVr0QofZFxJWVWC8znG70au6llVmktsF0bfHF6k8fvZ5esZJbwHwwnjg59tXz6sL/P0NUZDuSNu1mnJ8Vab17+cy005A9wtOpp3i0bZdpJLUil00semAwN45LgEViZYe3amNye0B6A9chviSlzXVsFtyN5/1H3gaNmMpn8Fz0GpYFp6Zw615H/LpUuRQQDMCL82n5DpBSawkvzIdN2ypiT8nSLth8Pk9jnjwdFzH3W4XW6KMBfwB569NdcGX93mC16tTflcArcYUc/mFuYbV+8zY0SAjAVoNErNgWjtwumJ3wbn/HlBFYdxHvSkJJEc+Ngal9opSwyo9YlITX2C/P/+gf8sxURSLR+mcZUmeqaS9wrh6vxW5zxFCOqFi90RbDWq/YwZmnu1+a6OvdpvRqkNxxe44lyl4OobEnpKA6Uox5EfH9xzPs/HRKrTPWdIQrK1VZDU7ETiD3Obpl+8wPPCRBbkbwNtpW9AbBe5L1SMlj3tdTxk/9W47JUmqS5HU+JzYymUKXjtWVmT9RenIhgXc+nroWLyxXJhmL112OdB8GCsk4f8oZJucnvmmtR85mBn10GZ0EKSCMUSAR3ukcXd5s7LvLD3me61WkuTCpJzYAyRurMB44EdEJzTfU271lUJC03YjXJXzYOGZwN4D8eB5jlfLrdWfzGRW7icMPfiSO6Oe7s20bmhdgLX4Z23B+s3JgQESzUDiMboSzDMHFpNMwccGePauhfwjzwnI2wu9zKGgEFg80jcZ7MHllk07s1H+5yojtUQTlH4nFdLKTGwDmPbIklOb1L1zO4T6N8NCuDLFLS/C63c0eNRimZ++s5BMBHxU11jHchI9oFVUxRh/eMDzHEzGYu0Lg8gJ7oS/tFCwoic44fyUtix0n/46vP4bf+//BRgAYwDDar4ncHIAAAAASUVORK5CYII=">
</div>

<script type="text/javascript">
    (function(){
        var tab_tit  = document.getElementById('think_page_trace_tab_tit').getElementsByTagName('span');
        var tab_cont = document.getElementById('think_page_trace_tab_cont').getElementsByTagName('div');
        var open     = document.getElementById('think_page_trace_open');
        var close    = document.getElementById('think_page_trace_close').children[0];
        var trace    = document.getElementById('think_page_trace_tab');
        var cookie   = document.cookie.match(/thinkphp_show_page_trace=(\d\|\d)/);
        var history  = (cookie && typeof cookie[1] != 'undefined' && cookie[1].split('|')) || [0,0];
        open.onclick = function(){
            trace.style.display = 'block';
            this.style.display = 'none';
            close.parentNode.style.display = 'block';
            history[0] = 1;
            document.cookie = 'thinkphp_show_page_trace='+history.join('|')
        }
        close.onclick = function(){
            trace.style.display = 'none';
            this.parentNode.style.display = 'none';
            open.style.display = 'block';
            history[0] = 0;
            document.cookie = 'thinkphp_show_page_trace='+history.join('|')
        }
        for(var i = 0; i < tab_tit.length; i++){
            tab_tit[i].onclick = (function(i){
                return function(){
                    for(var j = 0; j < tab_cont.length; j++){
                        tab_cont[j].style.display = 'none';
                        tab_tit[j].style.color = '#999';
                    }
                    tab_cont[i].style.display = 'block';
                    tab_tit[i].style.color = '#000';
                    history[1] = i;
                    document.cookie = 'thinkphp_show_page_trace='+history.join('|')
                }
            })(i)
        }
        parseInt(history[0]) && open.click();
        tab_tit[history[1]].click();
    })();
</script>
</body>

</html>