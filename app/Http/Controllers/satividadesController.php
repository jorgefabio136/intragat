<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\satividades;

class satividadesController extends Controller
{

    public function gone($id)
    {
     
            $satividades = satividades::findOrFail($id);
            return view('site.detalhess', compact('satividades'));
  
    }

    /**
     * Display a listing of the resource.
     */

     public function index()
     {
         $satividades = satividades::all();
         return view('admin.satividade', compact('satividades'));
     }
 
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.satividades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
                
        $satividades = $request->all();
           
             
        if($request->hasFile('pdf')){

            $satividades['pdf'] = $request->file('pdf')->store('sdocs');

        }

        $satividades=  satividades::create($satividades);
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
        $satividades  =  satividades::find($id);
        $satividades ->delete();
        return redirect()->route('admin.satividades.add');
    }
}
