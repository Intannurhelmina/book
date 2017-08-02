<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class author extends Model
{
    //
     protected $table = 'authors';
    protected $varchar= ['nama'];
     public $timestamps = 'true';

    public function books()
    {
    	return $this->hasMany('App\book', 'nama_id');
}
}
