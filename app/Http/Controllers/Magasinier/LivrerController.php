<?php

namespace App\Http\Controllers\Magasinier;

use App\Http\Controllers\Controller;
use App\Http\Requests\LivrerStoreRequest;
use App\Models\Pret_livrer;
use App\Models\Livrer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LivrerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $livrers = Livrer::all();
        return view('magasinier.livrers.index', compact('livrers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pret_livrers = Pret_livrers::all();
        return view('magasinier.livrers.create', compact('pret_livrers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LivrerStoreRequest $request)
    {

        $livrer = Livrer::create([
            'nom_art_liv' => $request->nom_art_liv,
            'qte_liv' => $request->qte_liv,
            'date_liv' => $request->date_liv
        ]);



        return to_route('magasinier.livrers.index')->with('success', 'Livrer created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Livrer $livrer)
    {
        $pret_livrers = Pret_livrer::all();
        return view('magasinier.livrers.edit', compact('livrer', 'pret_livrers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Livrer $livrer)
    {
        $request->validate([
            'nom_art_liv' => 'required',
            'qte_liv' => 'required',
            'date_liv' => 'required'
        ]);


        $livrer->update([
            'nom_art_liv' => $request->nom_art_liv,
            'qte_liv' => $request->qte_liv,
            'date_liv' => $request->date_liv
        ]);


        return to_route('magasinier.livrers.index')->with('success', 'Livrer updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Livrer $livrer)
    {
        $livrer->pret_livrers()->detach();
        $livrer->delete();
        return to_route('magasinier.livrers.index')->with('danger', 'Livrer deleted successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Livrer $livrer)
    {
        //
        $pret_livrers = Pret_livrer::all();
        return view('magasinier.livrers.show', compact('livrer', 'pret_livrers'));


    }

}
