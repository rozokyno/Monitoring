<?php

namespace App\Http\Controllers;

use App\Models\Computer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ComputerController extends Controller
{
    public function index()
    {
        $computers = Computer::all();
        return view('admin.dashboard.tables', compact('computers'));
    }
}
