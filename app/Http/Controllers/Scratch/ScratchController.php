<?php

namespace App\Http\Controllers\Scratch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ScratchController extends Controller
{
    /**
     * Show the application scratch.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('scratch.scratch');
    }
}
