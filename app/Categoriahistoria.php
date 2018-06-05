<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriahistoria extends Model
{
    protected $table = 'Categoriahistoria';
    protected $fillable = ['id_categories', 'id_historia'];
    public $timestramps = true;
}
