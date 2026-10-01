<?php

namespace App\Http\Controllers;
use App\Models\Ahd2;
use Illuminate\Http\Request;

class Ahd2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ahd2s = Ahd2::all();
        return view('ahd2s.index', compact('ahd2s'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ahd2s.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'precio' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Ahd2::create($request->all());

        return redirect()->route('ahd2s.index')
                         ->with('success', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
   public function show(Ahd2 $ahd2)
{
    return view('ahd2s.show', compact('ahd2'));
}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ahd2 $ahd2)
{
    return view('ahd2s.edit', compact('ahd2'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ahd2 $ahd2)
    {
        $request->validate([
        'nombre' => 'required',
        'precio' => 'required|numeric',
        'stock' => 'required|integer',
    ]);

    $ahd2->update($request->all());

    return redirect()->route('ahd2s.index')
                     ->with('success', 'Registro actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ahd2 $ahd2)
    {
        $ahd2->delete();

    return redirect()->route('ahd2s.index')
                     ->with('success', 'Registro eliminado correctamente.');
    }
}
