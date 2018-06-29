<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campeonato extends Model
{
    protected $table = 'campeonato';
    public $timestamps = false;
    protected $fillable = array('nome', 'divisao', 'cod_time');

}
