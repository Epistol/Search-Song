<?php

namespace App\Http\Controllers;

class WelcomeController extends Controller
{
    public function index()
    {
        $route_py = base_path('storage/app/python');
        $command = escapeshellcmd($route_py.'/Music_Search.py');
        var_dump($command);

        $var = 'Get Lucky';

        exec("/usr/bin/python $command 'Get Lucky'", $output, $return);

        var_dump($output);

        return view('welcome');
    }
}
