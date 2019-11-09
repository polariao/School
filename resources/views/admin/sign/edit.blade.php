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
                    <form method="post" action="{{url('admin/sign/'.$sign->s_id)}}" class="form-horizontal" enctype="multipart/form-data">
                            <div class="form-group"><label class="col-sm-2 control-label">学校名称</label>
                                <div class="col-sm-10">
                                    <select required name="sch_name" class="form-control" style="width: 500px">


                                        @if(Auth::user()->name=='admin')
                                            @foreach($school as $sch)
                                                <option @if($sch->sch_name == $sign->sch_name) selected @endif  value="{{$sch->sch_name}}">{{$sch->sch_name}}</option>
                                            @endforeach
                                        @else
                                            <option value="{{Auth::user()->sch_name}}">{{Auth::user()->sch_name}}</option>
                                        @endif






                                    </select>
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                        @csrf
                        @method('put')
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">学生姓名:</label>
                                <div class="col-sm-10">
                                    <input type="text" style="width: 200px"  required value="{{$sign->s_name}}" name="s_name" class="form-control">
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>

                            <div class="form-group"><label class="col-sm-2 control-label">性别:<br/>
                                </label>
                                <div class="col-sm-10">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" checked="checked" value="男"  name="s_sex"> 男&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" value="女"  name="s_sex">女
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">年龄:</label>
                                <div class="col-sm-10">
                                    <input style="width: 100px"  type="number" required value="{{$sign->s_age}}" name="s_age" class="form-control">
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">身份证号:</label>
                                <div class="col-sm-10">
                                    <input type="text" required value="{{$sign->s_sfz}}"  name="s_sfz" class="form-control">
                                </div>

                            </div>
                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">家庭地址:</label>
                                <div class="col-sm-10">
                                    <input type="text" required  value="{{$sign->s_address}}" name="s_address" class="form-control">
                                </div>

                            </div>


                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">监护人姓名:</label>
                                <div class="col-sm-10">
                                    <input type="text" required  value="{{$sign->s_jhr}}" name="s_jhr" class="form-control">
                                </div>

                            </div>

                            <div class="hr-line-dashed"></div>
                            <div class="form-group"><label class="col-sm-2 control-label">监护人手机号:</label>
                                <div class="col-sm-10">
                                    <input type="text" required value="{{$sign->s_tel}}"  name="s_tel" class="form-control">
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
