<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticies;
class NoticiesController extends Controller
{
    public function index(){
    $noticies = Noticies::all();
        //dd($noticies);
        return view ('web.index', compact('noticies'));
}
}