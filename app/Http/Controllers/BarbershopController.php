<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarbershopRequest;
use App\Http\Requests\UpdateBarbershopRequest;
use App\Models\Barbershop;
use Inertia\Inertia;
use function Laravel\Prompts\form;

class BarbershopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barbershops = Barbershop::all();
        return Inertia::render("SuperAdmin/Barbershops/Index", [
            "barbershops" => $barbershops,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render("SuperAdmin/Barbershops/Create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBarbershopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Barbershop $barbershop)
    {
        return Inertia::render("SuperAdmin/Barbershops/Show", ['barbershop' => $barbershop, 'employees' => $barbershop->employees]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Barbershop $barbershop)
    {
        return Inertia::render("SuperAdmin/Barbershops/Edit", ['barbershop' => $barbershop]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBarbershopRequest $request, Barbershop $barbershop)
    {
        $barbershop->update($request->validated());
        return redirect()->route('super_admin.barbershops.show', $barbershop);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Barbershop $barbershop)
    {
        //
    }
}
