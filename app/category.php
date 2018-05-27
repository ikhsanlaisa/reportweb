<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['nama', 'project', 'tgl_targer', 'target'];

    public function sub_category(){
        $this->hasMany('App\subcategory', 'category_id');
    }
}
