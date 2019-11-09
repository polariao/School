<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Image;
use App\Http\Model\School;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->name =='admin'){
            $count = Image::count();
        }else{
            $count = Image::where('sch_name',Auth::user()->sch_name)->count();
        }
        return view('admin.image.index',compact('count'));
    }

    public function Data(){
        if (Auth::user()->name =='admin'){
            $imgs = Image::all();
        }else{
            $imgs = Image::where('sch_name',Auth::user()->sch_name)->get();
        }

        return DataTables::of($imgs)
            ->editColumn('status', function ($img){
                if ($img->status == 1){
                    return "<a title='已启用' href=\"javascript:;\" onclick=\"status($img->img_id,$img->status)\"  ><i class=\"Hui-iconfont\" style=\"font-size: 20px;color: green\">&#xe615;</i></a>";
                }
                return "<a title='已禁用' href=\"javascript:;\" onclick=\"status($img->img_id,$img->status)\"  ><i class=\"Hui-iconfont\" style=\"font-size: 20px;color: red\">&#xe631;</i></a>";
            })
            ->editColumn('img_url', function ($img){
                return "<img src='/storage/$img->img_url' height='30' width='50' /> ";
            })
            ->addColumn('action', function ($img) {
                return '<a title="编辑" href="javascript:;" onclick="img_edit(\'编辑\',\'/admin/image/'.$img->img_id.'/edit\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: green">&#xe6df;</i></a>
                         <a title="删除" href="javascript:;" onclick="img_del('.$img->img_id.')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: red">&#xe6e2;</i></a>';
            })
            ->setRowClass(function (){
                return 'text-c';
            })
            ->make(true);
    }


    /**
     * 修改分类状态
     * @param Request $request
     * @return array
     */
    public function HandleStatus(Request $request){
        $img = array();
      if ($request->status == 1){
          $img['status'] = 0;
      }else{
          $img['status'] = 1;
      }
        $res = Image::where('img_id',$request->id)->update($img);
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
        return view('admin.image.add',compact('school'));
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
            'img_url' => 'required',
        ];
        $message = [
            'img_url.required' => '图片不能为空！',
        ];
        $req = $request->all();
        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){
            $file = $request->file('img_url')->store(date('Ymd',time()));
            if ($file){
                $imgArr = array();
                $imgArr['sch_name'] = $req['sch_name'];
                $imgArr['img_url'] = $file;
                $imgArr['status'] = $req['status'];
                $res = Image::create($imgArr);
                if ($res){
                    return back()->with('success','添加成功');
                }
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
        //
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
        $image = Image::find($id);
        $school = School::get();
        return view('admin.image.edit',compact('image','school'));
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
        $arr = array();
        $img = Image::findOrfail($id);
        //如果上传了新图片，需先删除到就图片，释放空间
        if ($request->file('img_url')){
            Storage::disk('local')->delete($img->img_url);
            $file = $request->file('img_url')->store(date('Ymd',time()));
            $arr['img_url'] = $file;
        }
        $req = $request->all();
        $arr['status'] = $req['status'];
        $arr['sch_name'] = $req['sch_name'];
        $res = $img->update($arr);
        if ($res){
            return back()->with('success','更新成功');
        }else{
            return back()->with('error','更新失败');
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
        $img = Image::findOrfail($id);
        if ($img){
            //先删除图片资源
            Storage::disk('local')->delete($img->img_url);
            $res = $img->delete();
            if ($res){
                return ['code'=>1];
            }


        }
    }
}
