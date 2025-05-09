<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\desenvolvedores;

class DesenvolvedoresController extends Controller
{

    public function gone($id)
    {
     
            $desenvolvedores = desenvolvedores::findOrFail($id);
            return view('site.detalhesd', compact('desenvolvedores'));
  
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $desenvolvedores = desenvolvedores::all();
        return view('admin.desenvolvedores', compact('desenvolvedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.desenvolvedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $desenvolvedores = $request->all();
           
             
        if($request->hasFile('imagem')){

            $desenvolvedores['imagem'] = $request->file('imagem')->store('img_desen');

        }

        $desenvolvedores =  desenvolvedores::create($desenvolvedores);
        return redirect()->route('admin.desenvolvedores.add');
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
        $desenvolvedores  =  desenvolvedores::find($id);
        $desenvolvedores ->delete();
        return redirect()->route('admin.desenvolvedores.add');
    }
}
