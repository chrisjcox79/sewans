<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable=['cate_name','is_show','is_hot','sort','pid','pid_path','pid_path_name','level'];
}
