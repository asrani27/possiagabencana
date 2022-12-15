<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pprofil extends Model
{
    protected $table = 'p_profil';
    public $timestamps = false;
    protected $guarded = ['id'];
}
