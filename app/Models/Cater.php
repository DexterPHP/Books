<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cater extends Model
{
    protected $table = 'caters';
    protected $fillable = ['id','title','title_link','description','icon','position'];

    public function BooksInCater(){
        return $this->hasMany('App\Models\Books','category')->orderBy('id','desc');
    }
}
