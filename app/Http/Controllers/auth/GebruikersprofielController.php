<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GebruikersprofielController extends Controller
{
    public function index(){
        return view('gebruikersprofiel');
    }
}
