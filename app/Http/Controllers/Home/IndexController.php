<?php

namespace App\Http\Controllers\Home;

use App\Http\Model\Image;
use App\Http\Model\News;
use App\Http\Model\School;
use App\Http\Model\Sign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    public function Index(){
        $schools = School::all();
        $first =  School::first();
        $images = Image::where('sch_name',$first['sch_name'])->where('status',1)->get();
        $news = News::where('sch_name',$first['sch_name'])->where('status',1)->orderby('n_id','desc')->paginate(7);

        return view('home.index',compact('images','schools','first','news'));
    }
    public function school(Request $request){
        $schools = School::all();
        $first = School::find($request->sch_id);
        $images = Image::where('sch_name',$first['sch_name'])->where('status',1)->get();
        $news = News::where('sch_name',$first['sch_name'])->where('status',1)->orderby('n_id','desc')->paginate(7);
        return view('home.index',compact('schools','first','images','news'));
    }


    public function content(Request $request){
        $schools = School::all();
        $first = School::find($request->sch_id);
        $images = Image::where('sch_name',$first['sch_name'])->where('status',1)->get();
        $news = News::where('sch_name',$first['sch_name'])->where('status',1)->orderby('n_id','desc')->get();
        return view('home.sch_content',compact('schools','first','images','news'));
    }

    public function new(Request $request){
        $schools = School::all();
        $first = School::find($request->sch_id);
        $new = News::where('n_id',$request->n_id)->where('status',1)->get();
        $images = Image::where('sch_name',$first['sch_name'])->where('status',1)->get();
        $news = News::where('sch_name',$first['sch_name'])->where('status',1)->orderby('n_id','desc')->get();

        return view('home.new',compact('schools','new','first','images','news'));
    }

    public function baoMing(Request $request){
        $sch_name = $request->sch_name;
        return view('home.baoming',compact('sch_name'));
    }




    public function store(Request $request){
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
}
