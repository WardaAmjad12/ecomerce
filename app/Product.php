<?php

namespace App;
use App\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
	use SoftDeletes;
	protected $guarded = [];

    protected $dates = ['deleted_at'];
    public function categories(){
    	return $this->belongsToMany('App\Category');
    }
     public function getRouteKeyName(){
   	 return 'slug';
	}
}
