<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardTransactionContoller extends Controller
{
    public function index()
    {
        return view('pages.dashboard-transactions');
    }
    public function details()
    {
        return view('pages.dashboard-transactions-details');
    }

    public function publishDetails()
    {
        $status = 'Published'; // Or whatever the actual status is
        return view('transaction-details', compact('status'));
    }
}
