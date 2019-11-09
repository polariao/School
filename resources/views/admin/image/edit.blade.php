<link href="{{asset('static/css/bootstrap.min.css')}}" rel="stylesheet">
<style type="text/css">

    div.costs-uploadfile-div{
        position:relative;
    }
    div.costs-uploadfile-div #textfield{
        width:150px;
        height:30px;
    }
    div.costs-uploadfile-div #fileField{
        width:245px;
        height:30px;
        position: absolute;
        top: 0;
        left:0;
        filter: alpha(opacity:0);
        opacity: 0;
    }
</style>
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
                    <form method="post" action="{{url('admin/image/'.$image->img_id)}}" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-sm-2 control-label">学校名称</label>
                            <div class="col-sm-10">
                                <select required name="sch_name" class="form-control" style="width: 500px">
                                    @if(Auth::user()->name=='admin')
                                    @foreach($school as $sch)
                                        <option @if($sch->sch_name == $image->sch_name) selected @endif  value="{{$sch->sch_name}}">{{$sch->sch_name}}</option>
                                    @endforeach
                                        @else
                                        <option value="{{Auth::user()->sch_name}}">{{Auth::user()->sch_name}}</option>
                                        @endif

                                </select>


                                {{--<input type="text" required  name="sch_name" value="" class="form-control">--}}
                            </div>

                        </div>
                        @csrf
                        @method('put')

                        <div class="form-group"><label class="col-sm-2 control-label">图片状态<br/>
                                <small class="text-navy">是否启用</small></label>
                            <div class="col-sm-10">
                                <div class="radio"><label> <input type="radio" @if($image->status == 1 ) checked @endif  value="1"  name="status"> 启用</label></div>
                                <div class="radio"><label> <input type="radio" @if($image->status == 0 ) checked @endif value="0"  name="status">禁用 </label></div>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">已有图片</label>
                            <img style="margin-left: 12px" width="200" height="150" src="/storage/{{$image->img_url}}">

                        </div>

                        <div class="hr-line-dashed"></div>
                        <div class="form-group">
                            <label class="col-sm-2 control-label">重新上传</label>
                            <div  style="margin-top: 5px;"  class="col-sm-10">
                                <div class="costs-uploadfile-div">
                                    <input type="file"  name="img_url" id="fileField"  onchange="document.getElementById('textfield').value=this.value" />
                                    <input type='text' placeholder="   点击选择图片" style="width: 200px" id="textfield" />
                                </div>
                            </div>

                        </div>
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
