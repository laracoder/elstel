<?php

namespace App\Http\Controllers;

class HealthCheckController extends Controller
{
    public function index()
    {
        return response()->json([
            'interfaces' => [
                'internal' => [],
                'external' => []
            ],
            'circuit_breakers' => [],
            'info' => []
        ]);
    }
}
