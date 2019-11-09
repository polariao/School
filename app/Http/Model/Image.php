<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='image';
    protected $primaryKey='img_id';
    protected $fillable=['img_id','img_url','status','sch_name'];
}
