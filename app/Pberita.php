<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pberita extends Model
{
    
    protected $table = 'p_berita';
    public $timestamps = false;
    protected $guarded = ['id'];
}
