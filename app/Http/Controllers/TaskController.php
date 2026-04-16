<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TaskController extends Controller
{
    public function list()
    {
        $path = base_path('data.json');

        if(!File::exists($path)) {
            abort(404, 'JSON file not found');
        }

        $json = File::get($path);
        $data = json_decode($json, true);

        if(json_last_error() !== JSON_ERROR_NONE) {
            abort(500, 'invalid JSON');
        }

        return view('newmain', [
            'tasks' => $data
        ]);
    }
}
