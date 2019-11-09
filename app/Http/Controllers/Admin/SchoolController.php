<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\School;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class SchoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = School::count();
        return view('admin.school.index',compact('count'));
    }

    public function Data(){

        $schs = School::all();
        return DataTables::of($schs)
            ->editColumn('sch_content', function ($sch){

                return '<div title="查看完整内容" id="pre1"  onclick="school_show(\'查看完整内容\',\'/admin/school/'.$sch->sch_id.'\',\'\',\'510\')" class="ml-5" style="text-decoration:none">'.$sch->sch_content.'</div>';
            })
            ->addColumn('action', function ($sch) {
                return '<a title="编辑" href="javascript:;" onclick="school_edit(\'编辑\',\'/admin/school/'.$sch->sch_id.'/edit\',\'900\',\'600\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: green">&#xe6df;</i></a>
                         <a title="删除" href="javascript:;" onclick="school_del('.$sch->sch_id.')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: red">&#xe6e2;</i></a>';
            })
            ->setRowClass(function (){
                return 'text-c';
            })
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.school.add');
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
            'sch_name' => 'required|unique:school',
            'sch_content' => 'required',
            'sch_address' => 'required',
            'sch_tel' => 'required',
            'sch_email' => 'required',
        ];
        $message = [
            'sch_name.required' => '学校名称不能为空！',
            'sch_address.required' => '学校地址不能为空！',
            'sch_tel.required' => '学校电话不能为空！',
            'sch_email.required' => '学校邮箱不能为空！',
            'sch_name.unique' => '学校名称已存在！',
            'sch_content.required' => '学校简介不能为空！',
        ];
        $req = $request->all();
        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){
                $cateArr = array();
                $cateArr['sch_name'] = $req['sch_name'];
                $cateArr['sch_address'] = $req['sch_address'];
                $cateArr['sch_tel'] = $req['sch_tel'];
                $cateArr['sch_email'] = $req['sch_email'];
                $cateArr['sch_content'] = $req['sch_content'];
                $res = School::create($cateArr);
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
        $school = School::find($id);
        return view('admin.school.show',compact('school'));
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
        $school = School::find($id);
        return view('admin.school.edit',compact('school'));
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
        $sch = School::findOrfail($id);

        $rules = [
            'sch_name' => 'required',
            'sch_address' => 'required',
            'sch_email' => 'required',
            'sch_tel' => 'required',
            'sch_content' => 'required',
        ];
        $message = [
            'sch_name.required' => '学校名称不能为空！',
            'sch_content.required' => '学校简介不能为空！',
            'sch_address.required' => '学校地址不能为空！',
            'sch_tel.required' => '学校电话不能为空！',
            'sch_email.required' => '学校邮箱不能为空！',
        ];
        $req = $request->all();
        //如果更改名字，便检验唯一性
        if ($req['sch_name'] != $sch->sch_name){
            $rules['sch_name'] = 'required|unique:school';
            $message['sch_name.unique'] = '学校名称已存在！';
        }
        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){
            $arr['sch_name'] = $req['sch_name'];
            $arr['sch_address'] = $req['sch_address'];
            $arr['sch_tel'] = $req['sch_tel'];
            $arr['sch_email'] = $req['sch_email'];
            $arr['sch_content'] = $req['sch_content'];
            $arr['updated_at'] = date('Y-m-d H:i:s',time());
            $res = $sch->update($arr);
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
        $sch = School::findOrfail($id);
        if ($sch){
            $res = $sch->delete();
                if ($res){
                    return ['code'=>1];
                }

            }

    }


    public function EditSchool(Request $request){
        if ($request->method()=='GET') {
            $school = School::where('sch_name',Auth::user()->sch_name)->first();
            return view('admin.school.onlyEdit',compact('school'));
        }else{

            $arr = array();

            $rules = [
                'sch_address' => 'required',
                'sch_email' => 'required',
                'sch_tel' => 'required',
                'sch_content' => 'required',
            ];
            $message = [
                'sch_content.required' => '学校简介不能为空！',
                'sch_address.required' => '学校地址不能为空！',
                'sch_tel.required' => '学校电话不能为空！',
                'sch_email.required' => '学校邮箱不能为空！',
            ];
            $req = $request->all();
            $validate = Validator::make($req, $rules, $message);
            if ($validate->passes()){
                $arr['sch_address'] = $req['sch_address'];
                $arr['sch_tel'] = $req['sch_tel'];
                $arr['sch_email'] = $req['sch_email'];
                $arr['sch_content'] = $req['sch_content'];
                $arr['updated_at'] = date('Y-m-d H:i:s',time());
                $res = School::where('sch_id',$req['sch_id'])->update($arr);
                if ($res){
                    return back()->with('success','更新成功');
                }

            }else{
                return back()->withErrors($validate);
            }

        }
    }
}
