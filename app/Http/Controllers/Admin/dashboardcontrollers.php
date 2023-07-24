<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class dashboardcontrollers extends Controller
{
    public function index()
    {
        $totalTransaksi = Transaksi::count();
        return view('admin.dashboard', compact('totalTransaksi'));
    }

    
}
