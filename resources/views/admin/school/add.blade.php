@include('layouts.left_head')

<li>
    <a href="{{url('admin/')}}"><i class="fa fa-paper-plane"></i> <span class="nav-label">主页</span> </a>
</li>

@if(Auth::user()->name=='admin')
    <li  class="active">
    <a href="#"><i class="fa fa-home"></i> <span class="nav-label">学校管理</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li  ><a href="{{url('admin/school')}}">学校列表</a></li>
        <li class="active"><a href="{{url('admin/school/create')}}">添加学校</a></li>
    </ul>
</li>
@else
    <li >
        <a href="{{url('admin/editschool')}}"><i class="fa fa-home"></i> <span class="nav-label">学校管理</span> </a>
    </li>
@endif
<li  >
    <a href="#"><i class="fa fa-file-image-o"></i> <span class="nav-label">图片管理</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li ><a href="{{url('admin/image')}}">图片列表</a></li>
        <li ><a href="{{url('admin/image/create')}}">添加图片</a></li>
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
<li >
    <a href="#"><i class="fa fa-phone-square"></i> <span class="nav-label">报名管理</span><span class="fa arrow"></span></a>
    <ul class="nav nav-second-level">
        <li ><a href="{{url('admin/sign')}}">报名列表</a></li>
        <li ><a href="{{url('admin/sign/create')}}">后台报名</a></li>
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

<div id="page-wrapper" class="gray-bg sidebar-content" style="background-color: white">
    @include('layouts.head')
    {{--欢迎页--}}

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>学校管理 >> 添加学校</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    @if(count($errors)>0)
                        <div style="margin-bottom:20px;background-color: yellow;color: red;text-align: center">
                            @if(is_object($errors))
                                @foreach($errors->all() as $error)
                                    {{$error}}
                                @endforeach
                            @else
                                <p>{{$errors}}</p>
                            @endif
                        </div>
                    @endif
                    <form method="post" action="{{url('admin/school')}}" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-sm-2 control-label">学校名称</label>
                            <div class="col-sm-10"><input type="text" required  name="sch_name" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校地址</label>
                            <div class="col-sm-10"><input type="text" required  name="sch_address" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校电话</label>
                            <div class="col-sm-10"><input type="text" required  name="sch_tel" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校邮箱</label>
                            <div class="col-sm-10"><input type="email" required  name="sch_email" class="form-control"></div>

                        </div>
                            @csrf
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校简介</label>
                            <div class="col-sm-10">
                                <textarea id="content" required  name="sch_content"></textarea>
                                {{--<textarea  required  name="sch_content"  class="form-control"></textarea>--}}
                                {{--<input type="text" required  name="cate_content"  class="form-control">--}}
                                <span class="help-block m-b-none">简单介绍下学校吧</span>
                            </div>
                        </div>



                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="reset">重置</button>
                                <button class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{--底层--}}
    @include('layouts.bottom')

</div>
<!-- Mainly scripts -->

<script src="{{asset('static/js/layer/layer.js')}}"></script>



<!--ueditor开始-->
<script type="text/javascript" src="{{asset('static/utf8-php/ueditor.config.js')}}"></script>
<script type="text/javascript" src="{{asset('static/utf8-php/ueditor.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/utf8-php/lang/zh-cn/zh-cn.js')}}"></script>

{{--ueditor结束--}}

@include('layouts.js')
<script>

    UE.getEditor('content',{initialFrameWidth:1000,initialFrameHeight:300})


    @if (session('success'))
    layer.msg('添加成功', {icon: 6});
    @endif
</script>
</body>
</html>
