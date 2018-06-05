<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Noticies extends Model
{
        protected $table = 'noticies';
    protected $fillable = ['titol', 'noticia', 'id_user'];
    public $timestramps = true;
}
