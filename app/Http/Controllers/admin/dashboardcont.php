<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Aktivitas; 
class DashboardCont extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
