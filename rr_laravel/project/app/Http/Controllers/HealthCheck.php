<?php

namespace App\Http\Controllers;


class HealthCheck extends Controller
{
    public function index()
    {
        return response()->json(['status' => 'ok'], 200);
    }
}