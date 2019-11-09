<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    protected $table='sign';
    protected $primaryKey='s_id';
    protected $fillable=['s_id','s_name','sch_name','s_sex','s_age','s_sfz','s_tel','s_jhr','s_address'];
}
