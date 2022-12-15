<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedukasi extends Model
{
   
    protected $table = 'p_edukasi';
    public $timestamps = false;
    protected $guarded = ['id'];
}
