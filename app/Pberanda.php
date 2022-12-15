<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pberanda extends Model
{
    protected $table = 'p_beranda';
    public $timestamps = false;
    protected $guarded = ['id'];
}
