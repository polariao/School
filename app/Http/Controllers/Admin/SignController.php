<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SignExport;
use App\Http\Model\Image;
use App\Http\Model\School;

use App\Http\Model\Sign;
use function foo\func;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class SignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = Sign::count();
        return view('admin.sign.index',compact('count'));
    }

    public function Data(){

        if (Auth::user()->name =='admin'){
            $signs = Sign::all();
        }else{
            $signs = Sign::where('sch_name',Auth::user()->sch_name)->get();

        }

        return DataTables::of($signs)
            ->editColumn('s_address', function ($sign){

                return '<div title="查看完整内容" class="p1"  onclick="sign_show(\'查看完整内容\',\'/admin/sign/'.$sign->s_id.'\',\'\',\'200\')" class="ml-5" style="text-decoration:none">'.$sign->s_address.'</div>';
            })
            ->addColumn('action', function ($sign) {
                return '<a title="编辑" href="javascript:;" onclick="sign_edit(\'编辑\',\'/admin/sign/'.$sign->s_id.'/edit\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: green">&#xe6df;</i></a>
                         <a title="删除" href="javascript:;" onclick="sign_del('.$sign->s_id.')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: red">&#xe6e2;</i></a>';
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
        $sign = array();
        if ($request->status == 1){
            $sign['status'] = 0;
        }else{
            $sign['status'] = 1;
        }
        $res = Image::where('sign_id',$request->id)->update($sign);
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
        return view('admin.sign.add',compact('school'));
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
            'sch_name' => 'required',
            's_name' => 'required',
            's_sfz' => 'required|unique:sign',
            's_jhr' => 'required',
            's_tel' => 'regex:/^1[345789][0-9]{9}$/',     //正则验证
        ];
        $message = [
            'sch_name.required' => '报名学校不能为空！',
            's_name.required' => '学生姓名不能为空！',
            's_sfz.required' => '身份证不能为空！',
            's_sfz.unique' => '身份证已存在！',
            's_tel.required' => '手机号不能为空！',
            's_jhr.required' => '监护人不能为空！',
            's_tel.regex'     => '手机号不合法',
        ];
        $req = $request->except('_token');
        if ($req['s_age']<=0 || $req['s_age']>100){
            return back()->with('msg','年龄不合法');
        }

        if (strlen($req['s_sfz'])!=18){
            return back()->with('msg','身份证位数不对！');
        }

        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){

            $res = Sign::create($req);
            if ($res){
                return back()->with('success','报名成功');
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
        $sign = Sign::find($id);
        return view('admin.sign.show',compact('sign'));
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
        $sign = Sign::find($id);
        $school = School::get();
        return view('admin.sign.edit',compact('sign','school'));
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

        $req = $request->except('_token','_method');
        $rules = [
            'sch_name' => 'required',
            's_name' => 'required',
            's_sfz' => 'required',
            's_jhr' => 'required',
        ];
        $message = [
            'sch_name.required' => '报名学校不能为空！',
            's_name.required' => '学生姓名不能为空！',
            's_sfz.required' => '身份证不能为空！',
            's_jhr.required' => '监护人不能为空！',
        ];

        $sign =  sign::find($id);
        if ($sign->s_sfz != $req['s_sfz']){
            $rules['s_sfz'] = 'required|unique:sign';
            $message['s_sfz.unique'] = '身份证已存在！';
        }

        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){


            $res = $sign->update($req);
            if ($res){
                return back()->with('success','修改成功');
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
        $sign = Sign::findOrfail($id);
        if ($sign){
                $res = $sign->delete();
                if ($res){
                    return ['code'=>1];
                }
            }




    }
    /**
     * 导出数据
     */
    public function Export(Request $request)
    {
        $res = $request->all();
        return Excel::download(new SignExport($res['start_time'],$res['end_time']), time().'.xlsx');
    }
}
