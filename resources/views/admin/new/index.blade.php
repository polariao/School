<style type="text/css">
    .p1{
        width: 400px;
        max-height: 20px;
        word-wrap:break-word;
        text-overflow: -o-ellipsis-lastline;
        overflow : hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }
    .p2{
        width: 200px;
        max-height: 20px;
        word-wrap:break-word;
        text-overflow: -o-ellipsis-lastline;
        overflow : hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('static/hui/H-ui.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('static/hui/H-ui.admin.css')}}" />
<link rel="stylesheet" type="text/css" href="{{ asset('static/hui/1.0.9/iconfont.css')}}" />
@include('layouts.left_head')


                <li>
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
                <li class="active">
                    <a href="#"><i class="fa fa-bullhorn"></i> <span class="nav-label">新闻管理</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li class="active"><a href="{{url('admin/new')}}">新闻列表</a></li>
                        <li><a href="{{url('admin/new/create')}}">添加新闻</a></li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg sidebar-content" style="height:auto;background-color: white">
        @include('layouts.head')
        {{--欢迎页--}}
        <div class="page-container">
            <div class="cl pd-5 bg-1 bk-gray mt-20">
                <span class="l"></span>
                <span class="r">共有数据：<strong>{{$count}}</strong> 条</span>
            </div>
        <div class="mt-20" style="margin-bottom: 50px">
            <table class="table table-border  table-bordered table-hover table-bg table-sort">
                <thead>
                <tr class="text-c" style="background-color: #f5fafe">
                <th width="80">ID</th>
                <th width="200">新闻标题</th>
                <th width="150">所属学校</th>
                <th width="100">新闻状态</th>
                <th width="400">新闻内容</th>
                <th width="80">添加时间</th>
                <th width="150">操作</th>
                </tr>
                </thead>
            </table>
        </div>
        </div>

        {{--底层--}}
        @include('layouts.bottom')

    </div>

    </div>
</div>

@include('layouts.js')

<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{{asset('static/hui/js/H-ui.admin.js')}}"></script>
<script src="{{asset('static/hui/js/H-ui.min.js')}}"></script>
<!-- App scripts -->
<script>

    /*编辑*/
    function new_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }

    function new_show(title,url,w,h){
        layer_show(title,url,w,h);
    }

    function status(n_id ,status){
        layer.confirm('新闻操作须谨慎，确认吗？',function(index){
            $.ajax({
                type: 'GET',
                url: "{{url('admin/nstatus?id=')}}"+n_id+'&status='+status,
                dataType: 'json',
                success: function(data){
                    if (data.code==1) {
                        layer.msg('已更改!',{icon:1,time:1000});
                        window.location.reload();
                    }

                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }

    /*管理员-角色-删除*/
    function new_del(id){
        layer.confirm('新闻删除须谨慎，确认要删除吗？',function(index){
            $.ajax({
                type: 'POST',
                url: "{{url('admin/new/')}}/"+id,
                dataType: 'json',
                data:{'_method':'delete','_token':"{{csrf_token()}}"},
                success: function(data){
                    if (data.code==1) {
                        layer.msg('已删除!',{icon:1,time:1000});
                        window.location.reload();
                    }

                },
                error:function(data) {
                    console.log(data.msg);
                },
            });
        });
    }

    $(function(){
        $('.table-sort').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{url('admin/nw/data')}}",
            columns: [
                {data: 'n_id',name:'n_id'},
                {data: 'n_title',name:'n_title'},
                {data: 'sch_name',name:'sch_name'},
                {data: 'status',name:'status'},
                {data: 'n_content',name:'n_content'},
                {data: 'created_at',name:'created_at'},
                {data: 'action', name:'action',orderable: false, searchable: false},
            ],
            order: [[0, 'Desc']],

            language: {
                "decimal": "",
                "emptyTable": "No data available in table",
                "info": "显示 _START_ 到 _END_ 条&nbsp;&nbsp;&nbsp;共 _TOTAL_ 条",
                "infoEmpty": "显示 0 到 0 页共 0 条",
                "infoFiltered": "(filtered from _MAX_ total entries)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "显示 _MENU_ 条",
                "loadingRecords": "加载中...",
                "processing": "加载中...",
                "search": "搜索:",
                "zeroRecords": "没有匹配项",
                "paginate": {
                    "first": "First",
                    "last": "Last",
                    "next": "下页",
                    "previous": "上页"
                }
            }


        });
    });
</script>

</body>
</html>
