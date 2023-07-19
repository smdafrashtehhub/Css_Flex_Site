<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LearningController extends Controller
{
    public function learning()
    {
        return view('learning.learning');
    }
}
