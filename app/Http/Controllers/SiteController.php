<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\users;
use App\Models\User;
use App\Models\atividades;
use App\Models\satividades;
use App\Models\desenvolvedores;
use App\Models\exame;

class SiteController extends Controller
{


    public function menuone(){

        $atividades = atividades::all();
        return view('site.inicial', compact('atividades'));
    
    }


    public function menutwo(){

        $desenvolvedores = desenvolvedores::all();
        return view('site.desenvolvedores', compact('desenvolvedores'));
    }

    public function menutree(){

        $atividades = atividades::all();
        return view('site.actividades', compact('atividades'));
    }
    public function menufour(){

        $satividades = satividades::all();
        return view('site.sactividades', compact('satividades'));
    }

    public function menufive(){

        $exames = exame::all();
        return view('site.exame', compact('exames'));
    }


    public function gone(){ 
        $users = users::all();
        return view('admin.usuario', compact('users'));
    }
    



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
      return view('admin.usuario.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $User = $request->all();
        $User['password'] = bcrypt($request->password);
        $User = User::create($User);

        return redirect()->route('admin.usuario.add');
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
        $users = users::find($id);
        $users->delete();
        return redirect()->route('admin.usuario.add');
    }
}
