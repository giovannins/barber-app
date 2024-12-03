<?php

namespace App\Http\Controllers;

use App\Models\Barbershop;
use App\Models\Employee;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $totalBarbershops = Barbershop::count();
        return Inertia::render(
            "SuperAdmin/Dashboard",
            [
                'totalBarbershops' => $totalBarbershops,
                'totalEmployees' => $totalEmployees
            ]
        );
    }
}
