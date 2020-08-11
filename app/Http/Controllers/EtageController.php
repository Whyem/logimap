<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Etage;

class EtageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etages = Etage::all();
        return view('Etages.listeEtages', ['etages'=>$etages, 'keyword'=>'']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Etages.addEtages');
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

        $etage = new Etage();
        $etage->libelle =  $request->get('libelle');
        $etage->save();
        return redirect()->route('Etages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('Etages.detailEtages', ['etage' => Etage::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('Etages.updateEtages', ['etage' => Etage::findOrFail($id)]);
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

        $etage = Etage::findOrFail($id);
        $etage->libelle =  $request->get('libelle');
        $etage->save();
        return redirect()->route('Etages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $etage = Etage::find($id);
        $etage->delete();
        return redirect()->route('Etages');
    }

    public function search(Request $request){
        $etages = Etage::where('Libelle','LIKE','%'.$request->get('libelle').'%')->get();
        return view('Etages.listeEtages', ['etages'=>$etages, 'keyword'=>$request->get('libelle')]);
    }
}
