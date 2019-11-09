<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>报名</title>

    <link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">

    <link href="{{asset('static/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Morris -->
    <link href="{{asset('static/css/plugins/morris/morris-0.4.3.min.css')}}" rel="stylesheet">

    <link href="{{asset('static/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('static/css/style.css')}}" rel="stylesheet">

</head>

<body >
    <div class="row" style="background-color: white">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
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
                    <form method="post" action="{{url('store')}}" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-sm-2 control-label">学校名称:</label>
                            <div class="col-sm-10">
                                <input type="text" readonly  name="sch_name" value="{{$sch_name}}" class="form-control">
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">学生姓名:</label>
                            <div class="col-sm-10">
                                <input type="text" required  name="s_name" class="form-control">
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

                        @csrf
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">年龄:</label>
                            <div class="col-sm-10">
                                <input type="number" required  name="s_age" class="form-control">
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">身份证号:</label>
                            <div class="col-sm-10">
                                <input type="text" required  name="s_sfz" class="form-control">
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">家庭地址:</label>
                            <div class="col-sm-10">
                                <input type="text" required  name="s_address" class="form-control">
                            </div>

                        </div>


                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">监护人姓名:</label>
                            <div class="col-sm-10">
                                <input type="text" required  name="s_jhr" class="form-control">
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">监护人手机号:</label>
                            <div class="col-sm-10">
                                <input type="text" required  name="s_tel" class="form-control">
                            </div>

                        </div>

                        <div class="hr-line-dashed"></div>


                        <div class="form-group">
                            <div class="col-sm-4 col-sm-offset-2">
                                <button style="margin-left: 30%" class="btn btn-white" type="reset">重置</button>
                                <button style="margin-left: 80% ;margin-top: -60px" class="btn btn-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


<script src="{{asset('static/js/layer/layer.js')}}"></script>

@include('layouts.js')
<script>
    @if (session('success'))
    layer.msg('报名成功', {icon: 6});

    setTimeout(function () {
        window.parent.location.reload();
        var index = parent.layer.getFrameIndex(window.name);
        parent.layer.close(index);
    }, 1000);
    @endif
</script>
</body>
</html>
