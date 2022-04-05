<?php

namespace App\Http\Controllers;

use App\DataDiklat;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function email()
    {
        $datadiklat = DataDiklat::get();
        return view('email',compact('datadiklat'));
    }
}
