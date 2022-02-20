<?php

namespace App\Http\Controllers;

use App\Proxy;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index() {
        $proxies = Proxy::all();
        return view('welcome', ['data'=>$proxies]);
    }

}
