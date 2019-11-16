<?php

namespace App\Http\Controllers;

use App\Model\Cargo;
use Illuminate\Http\Request;

class CargoController extends Controller
{
    public function index(){
        return Cargo::all();
    }
}
