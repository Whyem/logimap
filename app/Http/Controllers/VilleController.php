<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ville;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $villes = Ville::all();
        return view('Villes.listeVilles', ['villes'=>$villes,'keyword'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Villes.addVilles');
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

        $ville = new Ville();
        $ville->libelle =  $request->get('libelle');
        $ville->save();
        return redirect()->route('Villes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Villes.detailVilles', ['ville' => Ville::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Villes.updateVilles', ['ville' => Ville::findOrFail($id)]);
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

        $ville = Ville::findOrFail($id);
        $ville->libelle =  $request->get('libelle');
        $ville->save();
        return redirect()->route('Villes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ville = Ville::find($id);
        $ville->delete();
        return redirect()->route('Villes');
    }

    public function search(Request $request){
        $villes = Ville::where('Libelle','LIKE','%'.$request->get('libelle').'%')->get();
        return view('Villes.listeVilles', ['villes'=>$villes, 'keyword'=>$request->get('libelle')]);
    }
}
