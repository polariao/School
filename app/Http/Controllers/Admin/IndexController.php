<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Image;
use App\Http\Model\News;
use App\Http\Model\School;
use App\Http\Model\Sign;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{

    public function index()
    {
        $school = School::count();
        $Tschool = School::whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
        $Tschool = sprintf("%.2f",100*($Tschool/$school));
        if (Auth::user()->name == 'admin'){
            $image = Image::count();
            $Timage = Image::whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Timage = sprintf("%.2f",100*($Timage/$image));
            $new = News::count();
            $Tnew = News::whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Tnew = sprintf("%.2f",100*($Tnew/$new));
            $sign = Sign::count();
            $Tsign = Sign::whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Tsign = sprintf("%.2f",100*($Tsign/$sign));
        }else{
            $image = Image::where('sch_name',Auth::user()->sch_name)->count();
            $Timage = Image::where('sch_name',Auth::user()->sch_name)->whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Timage = sprintf("%.2f",100*($Timage/$image));
            $new = News::where('sch_name',Auth::user()->sch_name)->count();
            $Tnew = News::where('sch_name',Auth::user()->sch_name)->whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Tnew = sprintf("%.2f",100*($Tnew/$new));
            $sign = Sign::where('sch_name',Auth::user()->sch_name)->count();
            $Tsign = Sign::where('sch_name',Auth::user()->sch_name)->whereBetween('created_at', [date('Y-m-d',time()),date('Y-m-d',time()+24*3600)])->count();
            $Tsign = sprintf("%.2f",100*($Tsign/$sign));
        }

        return view('admin.index',compact('school','image','new','sign','Timage','Tnew','Tsign','Tschool'));
    }
}
