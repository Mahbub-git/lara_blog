<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
    	'com_title','com_name','com_mission','short_desc','long_desc','status'
    ];
}
