<?php

namespace App\Http\Controllers\System;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index( Request $request )
    {

        return view('system.sites.index');

    }


}
