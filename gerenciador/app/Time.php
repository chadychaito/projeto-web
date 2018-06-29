<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Time extends Model
{
    protected $table = 'time';
    public $timestamps = false;
    protected $fillable = array('nome', 'categoria', 'esporte');
}
