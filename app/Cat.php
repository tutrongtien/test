<?php

namespace Furbook;

use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    protected $fillable =['name'];

    public function cats()
    {
    	return $this->hasMany('Furbook\cat');
    }
}
