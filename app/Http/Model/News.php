<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table='new';
    protected $primaryKey='n_id';
    protected $fillable=['n_id','sch_name','n_content','n_title','status'];
}
