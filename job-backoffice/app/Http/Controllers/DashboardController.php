<?php

namespace App\Http\Controllers;

use App\Services\DashboardService;


class DashboardController extends Controller
{
    public function __construct(
        private readonly DashboardService $service  // Laravel بيحقنه تلقائياً
    ) {}

    public function index()
    {
        return view('Dashboard.index', [
            'analytics' => $this->service->getAnalytics(),
        ]);
    }
}
