<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Image;
use App\Http\Model\School;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $count = User::count();
        return view('admin.user.index',compact('count'));
    }

    public function Data(){

        $users = User::all();
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a title="编辑" href="javascript:;" onclick="user_edit(\'编辑\',\'/admin/user/'.$user->id.'/edit\',\'\',\'510\')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: green">&#xe6df;</i></a>
                         <a title="删除" href="javascript:;" onclick="user_del('.$user->id.')" class="ml-5" style="text-decoration:none"><i class="Hui-iconfont" style="font-size: 20px;color: red">&#xe6e2;</i></a>';
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
        $user = array();
        if ($request->status == 1){
            $user['status'] = 0;
        }else{
            $user['status'] = 1;
        }
        $res = Image::where('user_id',$request->id)->update($user);
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
        $user = User::get();
        $school = School::get();
        return view('admin.user.add',compact('user','school'));
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
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ];
        $message = [
            'sch_name.required' => '所属学校不能为空！',
            'name.required' => '名称不能为空！',
            'name.unique' => '此名称已经存在！',
            'email.required' => '邮箱不能为空！',
            'email.unique' => '此邮箱已经存在！',
            'email.email' => '邮箱格式不正确！',
        ];
        $req = $request->all();
        if ($req['password'] != $req['repassword']){
            return back()->with('msg','密码不一致！');
        }
        if ($req['password'] == ""){
            return back()->with('msg','密码不能为空！');
        }
        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){
                $userArr = array();
                $userArr['sch_name'] = $req['sch_name'];
                $userArr['email'] = $req['email'];
                $userArr['name'] = $req['name'];
                $userArr['password'] = Hash::make($req['password']);
                $res = User::create($userArr);
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
        $user = User::find($id);
        $school = School::get();
        return view('admin.user.edit',compact('user','school'));
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
        $userArr = array();
        $rules = array();
        $message = array();
        $req = $request->all();

         $user =  User::find($id);
        if ($user->email != $req['email']){
            $rules['email'] = 'required|email|unique:users';
            $message['email.required'] = '邮箱不能为空！' ;
            $message['email.unique'] = '此邮箱已经存在！！' ;
            $message['email.email'] = '邮箱格式不正确！' ;
        }
        if ($user->name != $req['name']){
            $rules['name'] = 'required|unique:users';
            $message['name.required'] = '名称不能为空！' ;
             $message['name.unique'] = '此名称已经存在！' ;
        }
        if ($req['password'] != $req['repassword']){
            return back()->with('msg','密码不一致！');
        }
        if (!empty($req['password'])){
            $userArr['password'] = Hash::make($req['password']);
        }

        $validate = Validator::make($req, $rules, $message);
        if ($validate->passes()){
            if (isset( $req['sch_name'])){
                $userArr['sch_name'] = $req['sch_name'];
            }
            $userArr['email'] = $req['email'];
            $userArr['name'] = $req['name'];
            dd($userArr);
            $res = $user->update($userArr);
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
        $user = User::findOrfail($id);
        if ($user){
            if ($user->name == 'admin'){
                return ['code'=>0];
            }else{
                $res = $user->delete();
                if ($res){
                    return ['code'=>1];
                }
            }



        }
    }


    /**
     * 个人修改
     */
    public function One(Request $request)
    {
        if ($request->method()=='GET'){
            $user = User::where('name',Auth::user()->name)->first();
            return view('admin.user.one',compact('user'));
        }elseif ($request->method()=='POST'){

            $userArr = array();
            $rules = array();
            $message = array();
            $req = $request->all();

            $user =  User::find(Auth::user()->id);
            if ($user->email != $req['email']){
                $rules['email'] = 'required|email|unique:users';
                $message['email.required'] = '邮箱不能为空！' ;
                $message['email.unique'] = '此邮箱已经存在！！' ;
                $message['email.email'] = '邮箱格式不正确！' ;
            }
            if ($user->name != $req['name']){
                $rules['name'] = 'required|unique:users';
                $message['name.required'] = '名称不能为空！' ;
                $message['name.unique'] = '此名称已经存在！' ;
            }
            if ($req['password'] != $req['repassword']){
                return back()->with('msg','密码不一致！');
            }
            if (!empty($req['password'])){
                $userArr['password'] = Hash::make($req['password']);
            }

            $validate = Validator::make($req, $rules, $message);
            if ($validate->passes()){
                $userArr['email'] = $req['email'];
                $userArr['name'] = $req['name'];
                $res = $user->update($userArr);
                if ($res){
                    return back()->with('success','修改成功');
                }

            }else{
                return back()->withErrors($validate);
            }

        }
    }
}
