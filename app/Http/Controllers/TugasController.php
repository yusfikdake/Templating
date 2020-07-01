<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TugasController extends Controller
{
    public function ShowTable1(){
        return view ('table1');
    }

    public function ShowTable2(){
        return view('table2');
    }
}
