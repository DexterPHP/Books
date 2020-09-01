<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdSense extends Model
{
    protected $table ='ad_senses';
    protected $fillable = ['id','code'];
}
