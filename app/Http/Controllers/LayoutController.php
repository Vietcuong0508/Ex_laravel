<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function masterLayout() {
        return view('Layout/master-layout');
    }
}
