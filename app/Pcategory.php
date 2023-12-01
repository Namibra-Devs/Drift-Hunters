<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pcategory extends Model
{
    protected $fillable = ['name','image', 'status','slug'];

    public function products() {
        return $this->hasMany('App\Product','category_id','id');
    }

    // public function language() {
    //     return $this->belongsTo('App\Language');
    // }
}
