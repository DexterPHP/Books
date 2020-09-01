<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'books';
   
    protected $fillable = ['id','title','title_link','description','category','poster','view_link','download_link','size',
        'new','active','download_count','position','pages'];

    public function Books(){
        return $this->hasMany('App\Models\Cater','category');
    }

}
