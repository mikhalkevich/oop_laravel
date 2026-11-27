<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maintext;

class BaseController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function getUrl($url = null)
    {
        $obj = Maintext::where('url', $url)->first();
        abort_if(!$obj, 403,'Page not found');
        return view('maintext', compact('obj'));
    }
}
