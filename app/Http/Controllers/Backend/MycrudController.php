<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\crud;

/**
 * Class DashboardController.
 */
class MycrudController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('backend.Mycrud.Mycrud')->with('data',crud::all());


    }
}
