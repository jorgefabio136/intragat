<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\exame;

class ExamesController extends Controller
{

    public function gone($id)
    {
     
            $exames = exame::findOrFail($id);
            return view('site.exadetalhes', compact('exames'));
  
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $exames = exame::all();
        return view('admin.exames', compact('exames'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.exames.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $exames = $request->all();
           
             
        if($request->hasFile('pdf')){

            $exames ['pdf'] = $request->file('pdf')->store('docs');

        }

        $exames =  exame::create($exames);
        return redirect()->route('admin.exames.add');
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
        $exames  =   exame::find($id);
        $exames ->delete();
        return redirect()->route('admin.exames.add');
    }
}
