<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ccontroller extends Controller
{
    public function index($id)
    {
        return $id;
    }
}
