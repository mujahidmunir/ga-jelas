<?php

namespace App\Http\Controllers\kasir;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $table = Table::all();
        return view('kasir.index', compact('table'));
    }
}
