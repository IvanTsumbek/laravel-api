<?php

namespace App\Http\Controllers\Api;

use App\Models\Desk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DescController extends Controller
{
    public function index()
    {
        return Desk::all();
    }
}
