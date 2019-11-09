<link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">

<!-- Morris -->
<link href="{{asset('static/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

<link href="{{asset('static/css/animate.css')}}" rel="stylesheet">
<div id="page-wrapper" class="gray-bg sidebar-content" style="background-color: white">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins" style="margin-top: 30px">

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
                    <form method="post" action="{{url('admin/school/'.$school->sch_id)}}" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-sm-2 control-label">学校名称</label>
                            <div style="width: 680px" class="col-sm-10"><input type="text" required  name="sch_name" value="{{$school->sch_name}}" class="form-control"></div>

                        </div>
                        @csrf
                        @method('put')
                        {{--<div class="form-group"><label class="col-sm-2 control-label">分类详情</label>--}}
                            {{--<div class="col-sm-10"><input type="text" required  name="cate_content" value="{{$school->sch_content}}"   class="form-control"> <span class="help-block m-b-none">简单介绍这个分类吧</span>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校地址</label>
                            <div style="width: 680px" class="col-sm-10"><input type="text" required  name="sch_address" value="{{$school->sch_address}}" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校电话</label>
                            <div style="width: 680px" class="col-sm-10"><input type="text" required  name="sch_tel" value="{{$school->sch_tel}}" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校邮箱</label>
                            <div style="width: 680px" class="col-sm-10"><input type="email" required  name="sch_email" value="{{$school->sch_email}}" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学校简介</label>
                            <div  class="col-sm-10">
                                <textarea style="width: 100px"   id="content"   name="sch_content">
                                    {{$school->sch_content}}
                                </textarea>
                                {{--<textarea  required  name="sch_content"  class="form-control"></textarea>--}}
                                {{--<input type="text" required  name="cate_content"  class="form-control">--}}
                                <span class="help-block m-b-none">简单介绍下学校吧</span>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button class="btn btn-white" type="reset">重置</button>
                                <button class="btn btn-primary" type="submit" >提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!--ueditor开始-->
<script type="text/javascript" src="{{asset('static/utf8-php/ueditor.config.js')}}"></script>
<script type="text/javascript" src="{{asset('static/utf8-php/ueditor.all.min.js')}}"></script>
<script type="text/javascript" src="{{asset('static/utf8-php/lang/zh-cn/zh-cn.js')}}"></script>

{{--ueditor结束--}}
<script src="{{asset('static/js/layer/layer.js')}}"></script>
@include('layouts.js')
<script>
    UE.getEditor('content',{initialFrameWidth:640,initialFrameHeight:200})


    @if (session('success'))
    layer.msg('更改成功', {icon: 6});

    setTimeout(function () {
        window.parent.location.reload();
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    }, 1000);
    @endif
</script>
</body>
</html>
