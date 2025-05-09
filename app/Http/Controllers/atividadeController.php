<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atividades;

class atividadeController extends Controller
{
    public function gone($id)
    {
     
            $atividades = atividades::findOrFail($id);
            return view('site.detalhes', compact('atividades'));
  
    }

    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $atividades = atividades::all();
        return view('admin.atividade', compact('atividades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.atividades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $atividades = $request->all();
           
             
        if($request->hasFile('pdf')){

            $atividades['pdf'] = $request->file('pdf')->store('docs');

        }

        $atividades=  atividades::create($atividades);
        return redirect()->route('admin.atividades.add');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $atividades  =  atividades::find($id);
        $atividades ->delete();
        return redirect()->route('admin.usuario.add');
    }
}
