<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Barbershop;
use App\Models\Employee;
use App\Models\Service;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index()
    {
        $totalEmployees = Employee::count();
        $totalBarbershops = Barbershop::count();
        $totalServices = Service::count();

        return Inertia::render(
            "SuperAdmin/Dashboard",
            [
                'totalBarbershops' => $totalBarbershops,
                'totalEmployees' => $totalEmployees,
                'totalServices' => $totalServices,
            ]
        );
    }
}
