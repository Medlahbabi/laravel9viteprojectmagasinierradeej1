<?php

namespace App\Http\Controllers\Magasinier;

use App\Http\Controllers\Controller;
use App\Http\Requests\Preparation_panierStoreRequest;
use App\Models\Preparation_panier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PretlivrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preparation_paniers = Preparation_panier::all();
        return view('magasinier.preparation_paniers.index', compact('preparation_paniers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magasinier.preparation_paniers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Preparation_panierStoreRequest $request)
    {


        $preparation_panier=Preparation_panier::create([
            'name_art_pretpa' => $request->name_art_pretpa,
            'qte_pretpa' => $request->qte_pretpa,
            'date_pretpa'=> $request->date_pretpa

        ]);

        return to_route('magasinier.preparation_paniers.index')->with('success', 'Preparation_panier created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Preparation_panier $preparation_panier)
    {
        //
        return view('magasinier.preparation_paniers.show', compact('preparation_panier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Preparation_panier $preparation_panier)
    {
        return view('magasinier.preparation_paniers.edit', compact('preparation_panier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Preparation_panier $preparation_panier )
    {
        $request->validate([
            'name_art_pretpa' => 'required',
            'qte_pretpa' => 'required',
            'date_pretpa'=> 'required',
        ]);


        $preparation_panier->update([
            'name_art_pretpa' => $request->name_art_pretpa,
            'qte_pretpa' => $request->qte_pretpa,
            'date_pretpa'=> $request->date_pretpa

        ]);
        return to_route('magasinier.preparation_paniers.index')->with('success', 'Preparation_panier updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Preparation_panier $preparation_panier)
    {
        $preparation_panier->delete();

        return to_route('magasinier.preparation_paniers.index')->with('danger', 'Preparation_panier deleted successfully.');
    }
}
