<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\School;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = News::count();
        return view('admin.new.index',compact('count'));
    }

    public function Data(){

        if (Auth::user()->name =='admin'){
            $news = News::all();
        }else{
            $news = News::where('sch_name',Auth::user()->sch_name)->get();

        }
        return DataTables::of($news)
            ->editColumn('n_content', function ($new){

                return '<div title="查看完整内容" class="p1"  onclick="new_show(\'查看完整内容\',\'/admin/new/'.$new->n_id.'\',\'\',\'510\')" class="ml-5" style="text-decoration:none">'.$new->n_content.'</div>';
            })

            ->editColumn('n_title', function ($new){

                return '<div  class="p2"  class="ml-5" style="text-decoration:none">'.$new->n_title.'</div>';
            })
            ->editColumn('status', function ($new){
                if ($new->status == 1){
                    return "<a title='已启用' href=\"javascript:;\" onclick=\"status($new->n_id,$new->status)\"  ><i class=\"Hui-iconfont\" style=\"font-size: 20px;color: green\">&#xe615;</i></a>";
                }
                return "<a title='已禁用' href=\"javascript:;\" onclick=\"status($new->n_id,$new->status)\"  ><i class=\"Hui-iconfont\" style=\"font-size: 20px;color: red\">&#xe631;</i></a>";
            })
            ->addColumn('action', function ($new) {
                return '<a title="编辑" href="javascript:;" onclick="new_edit(\'编辑\',\'/admin/new/'.$new->n_id.'/edit\',\'900\',\'600\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: green">&#xe6df;</i></a>
                         <a title="删除" href="javascript:;" onclick="new_del('.$new->n_id.')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: red">&#xe6e2;</i></a>';
            })
            ->setRowClass(function (){
                return 'text-c';
            })
            ->make(true);
    }

    /**
     * 修改新闻状态
     * @param Request $request
     * @return array
     */
    public function HandleStatus(Request $request){
        $new = array();
        if ($request->status == 1){
            $new['status'] = 0;
        }else{
            $new['status'] = 1;
        }
        $res = News::where('n_id',$request->id)->update($new);
        if ($res){
            return ['code'=>1,'msg'=>'success'];
        }else{
            return ['code'=>0,'msg'=>'error'];
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $school = School::get();
        return view('admin.new.add',compact('school'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'n_title' => 'required',
            'n_content' => 'required',
        ];
        $message = [
            'n_title.required' => '新闻标题不能为空！',
            'n_content.required' => '新闻内容不能为空！',
        ];
        $req = $request->except('_token');
        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){

            $res = News::create($req);
            if ($res){
                return back()->with('success','添加成功');
            }

        }else{
            return back()->withErrors($validate);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $new = News::find($id);
        return view('admin.new.show',compact('new'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $new = News::find($id);
        $school = School::all();
        return view('admin.new.edit',compact('new','school'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $rules = [
            'n_title' => 'required',
            'n_content' => 'required',
        ];
        $message = [
            'n_title.required' => '新闻名称不能为空！',
            'n_content.required' => '新闻内容不能为空！',
        ];
        $req = $request->except('_token','_method');

        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){

            $res = News::where('n_id',$id)->update($req);
            if ($res){
                return back()->with('success','更新成功');
            }

        }else{
            return back()->withErrors($validate);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::findOrfail($id);
        if ($new){
            $res = $new->delete();
            if ($res){
                return ['code'=>1];
            }

        }

    }
}
