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
                        @if(session('msg'))
                            <div style="margin-bottom:20px;background-color: yellow;color: red;text-align: center">
                                {{session('msg')}}
                            </div>
                        @endif
                    <form method="post" action="{{url('admin/user/'.$user->id)}}" class="form-horizontal" enctype="multipart/form-data">
                        @if($user->name!='admin')

                            <div class="form-group"><label class="col-sm-2 control-label">学校名称</label>
                                <div class="col-sm-10">
                                    <select required name="sch_name" class="form-control" style="width: 500px">
                                        @foreach($school as $sch)
                                            <option @if($sch->sch_name == $user->sch_name) selected @endif  value="{{$sch->sch_name}}">{{$sch->sch_name}}</option>
                                        @endforeach

                                    </select>


                                    {{--<input type="text" required  name="sch_name" value="" class="form-control">--}}
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                        @endif


                        @csrf
                        @method('put')



                        <div class="form-group"><label class="col-sm-2 control-label">用户名称:</label>
                            <div class="col-sm-10">
                                <input style="width: 500px" @if($user->name=='admin') readonly @endif type="text" required value="{{$user->name}}"  name="name" class="form-control">
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>

                        <div class="form-group"><label class="col-sm-2 control-label">账号信息:<br/>
                                <small style="color: red" class="text-navy">必须为邮箱</small></label>
                            <div class="col-sm-10">
                                <input style="width: 500px" type="email" required  value="{{$user->email}}" name="email" class="form-control">
                            </div>

                        </div>
                        @csrf
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">密码:<br/>
                                <small style="color: red" class="text-navy">不改密码不填</small></label></label>
                            <div class="col-sm-10">
                                <input style="width: 500px" type="password"   name="password" class="form-control">
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">确认密码:<br/>
                                <small style="color: red" class="text-navy">不改密码不填</small></label>
                            <div class="col-sm-10">
                                <input style="width: 500px" type="password"   name="repassword" class="form-control">
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

<script src="{{asset('static/js/layer/layer.js')}}"></script>
@include('layouts.js')
<script>
    @if (session('success'))
    layer.msg('更改成功', {icon: 6});

    setTimeout(function () {
        window.parent.location.reload();
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    }, 1000);
    @endif
    @if (session('error'))
    layer.msg('更改失败', {icon: 1});

    setTimeout(function () {
        window.parent.location.reload();
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    }, 1000);
    @endif

</script>
</body>
</html>
