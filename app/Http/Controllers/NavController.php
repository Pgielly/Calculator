<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calcul;

class NavController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
}
