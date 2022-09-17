<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index(Request  $request)
    {
        $data = array('status' => env('APP_NAME') . ' is running');

        return $this->sendResponse($data);
    }
}
