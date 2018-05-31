<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserbackendController extends Controller {

    public function index() {
        return view('web.backend.user.index');
    }

}
