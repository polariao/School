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
                    <li  class="active" >
                        <a href="#"><i class="fa fa-user"></i> <span class="nav-label"> 用户管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="{{url('admin/user')}}">用户列表</a></li>
                            <li ><a href="{{url('admin/user/create')}}">添加用户</a></li>
                        </ul>
                    </li>
                @else
                    <li  class="active">
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
                <th width="200">用户名称</th>
                <th width="200">用户账户</th>
                <th width="200">所属学校</th>
                <th width="200">添加账号时间</th>
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
    function user_edit(title,url,w,h){
        layer_show(title,url,w,h);
    }


    /*管理员-角色-删除*/
    function user_del(id){
        layer.confirm('用户删除须谨慎，确认要删除吗？',function(index){
            $.ajax({
                type: 'POST',
                url: "{{url('admin/user/')}}/"+id,
                dataType: 'json',
                data:{'_method':'delete','_token':"{{csrf_token()}}"},
                success: function(data){
                    if (data.code==0) {
                        layer.msg('管理员不可删除!',{icon:5,time:1000});
                        window.location.reload();
                    }else if (data.code==1) {
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
            ajax: "{{url('admin/use/data')}}",
            columns: [
                {data: 'id',name:'id'},
                {data: 'name',name:'name'},
                {data: 'email',name:'email'},
                {data: 'sch_name',name:'sch_name'},
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
