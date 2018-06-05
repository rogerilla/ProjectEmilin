<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Histories extends Model
{
    protected $table = 'histories';
    protected $fillable = ['usuari','titol', 'resum', 'contingut', 'finalitzacio'];
    public $timestramps = true;
}
