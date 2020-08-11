<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Equipement;

class EquipementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipements = Equipement::all();
        return view('Equipements.listeEquipements', ['equipements'=>$equipements, 'keyword'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Equipements.addEquipements');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'libelle' => 'required',
        ]);

        $equipement = new Equipement();
        $equipement->libelle =  $request->get('libelle');
        $equipement->save();
        return redirect()->route('Equipements');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Equipements.detailEquipements', ['equipement' => Equipement::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Equipements.updateEquipements', ['equipement' => Equipement::findOrFail($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'libelle' => 'required',
        ]);

        $equipement = Equipement::findOrFail($id);
        $equipement->libelle =  $request->get('libelle');
        $equipement->save();
        return redirect()->route('Equipements');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $equipement = Equipement::find($id);
        $equipement->delete();
        return redirect()->route('Equipements');
    }


    public function search(Request $request){
        $equipements = Equipement::where('Libelle','LIKE','%'.$request->get('libelle').'%')->get();
        return view('Equipements.listeEquipements', ['equipements'=>$equipements, 'keyword'=>$request->get('libelle')]);
    }
}
