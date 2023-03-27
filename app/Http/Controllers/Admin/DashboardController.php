<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function index()
    {
        return view('admin.dashboard.index');
    }
}
