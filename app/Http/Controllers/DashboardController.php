<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\atividades;
use App\Models\desenvolvedores;
use App\Models\User;
use DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
 
     public function index(){

   
        $atividades = atividades::all()->count();
        $desenvolvedores = desenvolvedores::all()->count();
        $User = User::all()->count();
   
     
         //graficos 1 usuários
          $usersData = User::select([
            DB::raw('YEAR(created_at) as ano'),
            DB::raw('COUNT(*) as total')
         ])
         ->groupBy('ano')
         ->orderBy('ano', 'asc')
         ->get();
     
        //preparar arrays
         foreach($usersData as $user){
           $ano[] = $user->ano;
           $total[] = $user->total;
         }
        //formatando para chartjs
          $userLabel = "'comparativos de cadastro de usuario'";
          $userAno = implode(',', $ano);
          $userTotal = implode(',', $total);
       
         return view('admin.dashboard',compact('atividades', 'desenvolvedores', 'User','userLabel', 'userAno', 'userTotal'));
       }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
