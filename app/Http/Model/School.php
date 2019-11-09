<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $table='school';
    protected $primaryKey='sch_id';
    protected $fillable=['sch_id','sch_name','sch_content','sch_address','sch_tel','sch_email'];
}
