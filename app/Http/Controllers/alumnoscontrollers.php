<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alumnosmodels;
use Illuminate\Support\Facades\DB;

class alumnoscontrollers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $buscarpor =$request->get('buscarpor','');
        $alumnosmodel = alumnosmodels::where(function($query) use ($buscarpor){
            $query->where('name', 'like', "%$buscarpor%")
            ->orWhere('lastname', 'like', "%$buscarpor%");
        })->paginate(10);
           
          
        return view('profesoressvp.index', compact('alumnosmodel', 'buscarpor'));
    }

        
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('profesoressvp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',



         ]);

         $alumnosmodels= new alumnosmodels();
         $alumnosmodels->name=$request->name;
         $alumnosmodels->lastname=$request->lastname;

         $alumnosmodels->save();
         return view ("profesoressvp.message",['msg'=>"Registros Guardados"]);
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
    public function edit($id)
    {
        $alumnosmodels=alumnosmodels::find($id);
        return view('profesoressvp.edit',['alumnosmodels'=>$alumnosmodels]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',



         ]);

         $alumnosmodels=alumnosmodels::find($id);
         $alumnosmodels->name=$request->input('name');
         $alumnosmodels->lastname=$request->input('lastname');

         $alumnosmodels->save();
         return view ("profesoressvp.message",['msg'=>"Registros Actualizado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $alumnosmodels=alumnosmodels::find($id);
        $alumnosmodels->delete();

        return redirect("profesores");
    }
}
