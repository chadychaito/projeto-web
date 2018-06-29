<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clube extends Model
{
    protected $table = 'clube';
    public $timestamps = false;
    protected $fillable = array('nome');
}
