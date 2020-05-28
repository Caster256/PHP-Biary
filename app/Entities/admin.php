<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';

    //時間戳記
    public $timestamps = false;
}
