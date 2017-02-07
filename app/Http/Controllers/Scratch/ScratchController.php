<?php

namespace Akela\Http\Controllers\Scratch;

use Illuminate\Http\Request;
use Akela\Http\Controllers\Controller;

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
