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
                    <form method="post" action="{{url('admin/new/'.$new->n_id)}}" class="form-horizontal" enctype="multipart/form-data">
                        <div class="form-group"><label class="col-sm-2 control-label">新闻标题</label>
                            <div class="col-sm-10"><input type="text" required  name="n_title" value="{{$new->n_title}}" class="form-control"></div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">所属学校</label>
                            <div class="col-sm-10">
                                <select required name="sch_name" class="form-control">
                                    @if(Auth::user()->name=='admin')
                                        @foreach($school as $sch)
                                            <option @if($sch->sch_name == $new->sch_name) selected @endif  value="{{$sch->sch_name}}">{{$sch->sch_name}}</option>
                                        @endforeach
                                        @else
                                            <option value="{{Auth::user()->sch_name}}">{{Auth::user()->sch_name}}</option>
                                        @endif

                                </select>
                            </div>

                        </div>
                        @csrf
                        @method('put')
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">新闻状态<br/>
                                <small class="text-navy">是否启用</small></label>
                            <div class="col-sm-10">
                                <div class="radio"><label> <input type="radio" @if($new->status == 1 ) checked @endif  value="1"  name="status"> 启用</label></div>
                                <div class="radio"><label> <input type="radio" @if($new->status == 0 ) checked @endif value="0"  name="status">禁用 </label></div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group"><label class="col-sm-2 control-label">新闻内容</label>
                            <div class="col-sm-10">
                                <textarea id="content" required  name="n_content">
                                      {{$new->n_content}}
                                </textarea>
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
