<?php

namespace App\Http\Controllers;

use App\Models\RegistroVenta;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegistroVentaController extends Controller
{
    /**
     * Display a listing of the registro ventas.
     */
    public function index(): View
    {
        $registroVentas = RegistroVenta::all();
        return view('registroventa.index', compact('registroVentas'));
    }

    /**
     * Show the form for creating a new registro venta.
     */
    public function create(): View
    {
        return view('registroventa.create');
    }

    /**
     * Store a newly created registro venta in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'FECHAEMISION' => 'required|date',
            'FECHAVENCIMIENTO' => 'required|date',
            'TIPOCOMPROBANTE' => 'required|string|max:255',
            'SERIECO' => 'nullable|string|max:8',
            'NUMEROCO' => 'nullable|integer',
            // Add other fields validation rules here
        ]);

        // Generate unique DUAL value
        $dual = random_int(100000, 999999);
        
        // Merge DUAL with validated data
        $validated['DUAL'] = $dual;

        RegistroVenta::create($validated);

        return redirect()->route('registroventa.index')->with('success', 'Registro Venta created successfully.');
    }

    /**
     * Display the specified registro venta.
     */
    public function show(RegistroVenta $registroVenta): View
    {
        return view('registroventa.show', compact('registroVenta'));
    }

    /**
     * Show the form for editing the specified registro venta.
     */
    public function edit(RegistroVenta $registroVenta): View
    {
        return view('registroventa.edit', compact('registroVenta'));
    }

    /**
     * Update the specified registro venta in storage.
     */
    public function update(Request $request, RegistroVenta $registroVenta): RedirectResponse
    {
        $validated = $request->validate([
            //'DUAL' => 'required',
            'FECHAEMISION' => 'required|date',
            'FECHAVENCIMIENTO' => 'required|date',
            //'TIPOCOMPROBANTE' => 'required|string|max:255',
            'SERIECO' => 'nullable|string|max:8',
            'NUMEROCO' => 'nullable|integer',
            // Add other fields validation rules here
        ]);

        $registroVenta->update($validated);

        return redirect()->route('registroventa.index')->with('success', 'Registro Venta updated successfully.');
    }

    /**
     * Remove the specified registro venta from storage.
     */
    public function destroy(RegistroVenta $registroVenta): RedirectResponse
    {
        $registroVenta->delete();

        return redirect()->route('registroventa.index')->with('success', 'Registro Venta deleted successfully.');
    }
}