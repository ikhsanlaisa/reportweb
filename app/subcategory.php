<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subcategory extends Model
{
    protected $table = 'subcategories';
    protected $fillable = ['category_id', 'sub_category'];

    public function category(){
        $this->belongsTo('App\category', 'category_id');
    }
}
