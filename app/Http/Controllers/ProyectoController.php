<?php

namespace App\Http\Controllers;

use App\Models\Proyecto;
use App\Http\Requests\ProyectoRequest;

/**
 * Class ProyectoController
 * @package App\Http\Controllers
 */
class ProyectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $proyectos = Proyecto::paginate();

        return view('proyecto.index', compact('proyectos'))
            ->with('i', (request()->input('page', 1) - 1) * $proyectos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $proyecto = new Proyecto();
        return view('proyecto.create', compact('proyecto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProyectoRequest $request)
    {
        Proyecto::create($request->validated());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.show', compact('proyecto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);

        return view('proyecto.edit', compact('proyecto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProyectoRequest $request, Proyecto $proyecto)
    {
        $proyecto->update($request->validated());

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto updated successfully');
    }

    public function destroy($id)
    {
        Proyecto::find($id)->delete();

        return redirect()->route('proyectos.index')
            ->with('success', 'Proyecto deleted successfully');
    }
}
