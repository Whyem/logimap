<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Secteur;
use App\Ville;

class SecteurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $secteurs = Secteur::all();
        foreach ($secteurs as $key=>$value) {
            $secteurs[$key]->id_ville = Ville::find($secteurs[$key]->id_ville) == null ? ' ' : Ville::find($secteurs[$key]->id_ville)->Libelle;
        }
        return view('Secteurs.listeSecteurs', ['secteurs'=>$secteurs , 'keyword'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Ville::all();
        return view('Secteurs.addSecteurs', ['villes'=>$villes]);
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
            'id_secteur' => 'required',
        ]);

        $secteur = new Secteur();
        $secteur->libelle =  $request->get('libelle');
        $secteur->id_ville =  $request->get('id_secteur');
        $secteur->save();
        return redirect()->route('Secteurs');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $secteur = Secteur::findOrFail($id);
        $secteur->id_ville = Ville::find($secteur->id_ville)->Libelle;
        return view('Secteurs.detailSecteurs', ['secteur' => $secteur]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $villes = Ville::all();
        return view('Secteurs.updateSecteurs', ['secteur' => Secteur::findOrFail($id),'villes'=>$villes]);
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

        $secteur = Secteur::findOrFail($id);
        $secteur->libelle =  $request->get('libelle');
        $secteur->id_ville =  $request->get('id_ville');
        $secteur->save();
        return redirect()->route('Secteurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $secteur = Secteur::find($id);
        $secteur->delete();
        return redirect()->route('Secteurs');
    }

    public function search(Request $request){
        $secteurs = Secteur::where('Libelle','LIKE','%'.$request->get('libelle').'%')->get();
        foreach ($secteurs as $key=>$value) {
            $secteurs[$key]->id_ville = Ville::find($secteurs[$key]->id_ville) == null ? ' ' : Ville::find($secteurs[$key]->id_ville)->Libelle;
        }
        return view('Secteurs.listeSecteurs', ['secteurs'=>$secteurs, 'keyword'=>$request->get('libelle')]);
    }
}