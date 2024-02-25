<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    

public function getReport($interval)
{
    $startDate = Carbon::now()->startOfDay();
    $endDate = Carbon::now()->endOfDay();

    switch ($interval) {
        case 'week':
            $startDate = Carbon::now()->startOfWeek();
            break;

        case 'month':
            $startDate = Carbon::now()->startOfMonth();
            break;

        case 'year':
            $startDate = Carbon::now()->startOfYear();
            break;
    }

    $dailyCounts = Visit::whereBetween('created_at', [$startDate, $endDate])
        ->groupBy('date')
        ->selectRaw('date(created_at) as date, count(*) as count')
        ->get();

    return view('home.blade', compact('dailyCounts', 'interval'));
}
}
