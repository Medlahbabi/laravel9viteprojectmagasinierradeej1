<?php

namespace App\Http\Controllers\Magasinier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MagasinierController extends Controller
{
    public function index()
    {
        return view('magasinier.index');
    }
}
