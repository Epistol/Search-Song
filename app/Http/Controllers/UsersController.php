<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getInfos()
    {
        return view('infos');
    }

    public function postInfos(Request $request)
    {
        return view('infos', ['name' => $request->input('nom')]);
    }
}
