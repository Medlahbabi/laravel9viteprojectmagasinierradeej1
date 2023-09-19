<?php

namespace App\Http\Controllers\Magasinier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pret_livrerStoreRequest;
use App\Models\Preparation_panier;
use App\Models\Pret_livrer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Pret_livrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pret_livrers = Pret_livrer::all();
        return view('magasinier.pret_livrers.index', compact('pret_livrers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pret_livrers = Pret_livrer::all();
        return view('magasinier.pret_livrers.create', compact('pret_livrers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Pret_livrerStoreRequest $request)
    {


        $pret_livrer = Pret_livrer::create([
            'name_art_pretli' => $request->name_art_pretli,
            'qte_pretli' => $request->qte_pretli,
            'date_pretli' => $request->date_pretli
        ]);



        return to_route('magasinier.pret_livrers.index')->with('success', 'Pret_livrer created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pret_livrer $pret_livrer)
    {
        $preparation_paniers = Preparation_panier::all();
        return view('magasinier.pret_livrers.edit', compact('pret_livrer', 'preparation_paniers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pret_livrer $pret_livrer)
    {
        $request->validate([
            'name_art_pretli' => 'required',
            'qte_pretli' => 'required',
            'date_pretli' => 'required'
        ]);

        $pret_livrer->update([
            'name_art_pretli' => $request->name_art_pretli,
            'qte_pretli' => $request->qte_pretli,
            'date_pretli' => $request->date_pretli
        ]);


        return to_route('magasinier.pret_livrers.index')->with('success', 'Pret_livrer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pret_livrer $pret_livrer)
    {

        $pret_livrer->preparation_paniers()->detach();
        $pret_livrer->delete();
        return to_route('magasinier.pret_livrers.index')->with('danger', 'Pret_livrer deleted successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pret_livrer $pret_livrer)
    {
        //
        $preparation_paniers = Preparation_panier::all();
        return view('magasinier.pret_livrers.show', compact('pret_livrer', 'preparation_paniers'));


    }

}
