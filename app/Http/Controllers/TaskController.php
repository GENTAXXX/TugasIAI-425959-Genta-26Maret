<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function luas($p, $l)
    {
        $hasil = $p * $l;
        return $hasil;
    }
}
