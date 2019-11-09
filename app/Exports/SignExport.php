<?php

namespace App\Exports;


use App\Http\Model\Sign;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromCollection;

class SignExport implements FromCollection
{

    protected $start_time="";
    protected $end_time="";
    public function __construct($start_time,$end_time)
    {
        $this->start_time= $start_time;
        $this->end_time= $end_time;
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        if (Auth::user()->name =='admin'){
            if (empty($this->start_time) && empty($this->end_time)){
                return Sign::all();
            }elseif (!empty($this->start_time) && empty($this->end_time)){
                return Sign::where('created_at','>=',$this->start_time)->get();
            }elseif (empty($this->start_time) && !empty($this->end_time)){
                return Sign::where('created_at','<=',date('Y-m-d',strtotime($this->end_time)+24*3600))->get();
            } elseif (!empty($this->start_time) && !empty($this->end_time)){
                return Sign::whereBetween('created_at', [$this->start_time,date('Y-m-d',strtotime($this->end_time)+24*3600)])->get();
            }
        }else{
            if (empty($this->start_time) && empty($this->end_time)){
                return Sign::where('sch_name',Auth::user()->sch_name)->get();
            }elseif (!empty($this->start_time) && empty($this->end_time)){
                return Sign::where('sch_name',Auth::user()->sch_name)->where('created_at','>=',$this->start_time)->get();
            }elseif (empty($this->start_time) && !empty($this->end_time)){
                return Sign::where('sch_name',Auth::user()->sch_name)->where('created_at','<=',date('Y-m-d',strtotime($this->end_time)+24*3600))->get();
            } elseif (!empty($this->start_time) && !empty($this->end_time)){
                return Sign::where('sch_name',Auth::user()->sch_name)->whereBetween('created_at', [$this->start_time,date('Y-m-d',strtotime($this->end_time)+24*3600)])->get();
            }

        }


    }
}
