<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\TripPackage;
use App\Transaction;

class DashboardController extends Controller
{
    public function index(request $request)
    {
        return view ('pages.admin.dashboard', [
            'trip_package' => TripPackage::count(),
            'transaction' => Transaction::count(),
            'transaction_pending' => Transaction::where('transaction_status', 'PENDING')->count(),
            'transaction_success' => Transaction::where('transaction_status', 'SUCCESS')->count(),
        ]);
    }
}
