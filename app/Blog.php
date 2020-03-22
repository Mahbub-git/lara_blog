<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
    	'blog_title','category_id','short_desc','long_desc','bog_image','author_name','hit_counter','status'
    ];

    protected $primaryKey = 'blog_id';
}
