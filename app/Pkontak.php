<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pkontak extends Model
{
   
    protected $table = 'p_kontak';
    public $timestamps = false;
    protected $guarded = ['id'];
}
