<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Demande_de_sortieStoreRequest;
use App\Models\Demande_de_sortie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class Demande_de_sortieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $demande_de_sorties = Demande_de_sortie::all();
        return view('admin.demande_de_sorties.index', compact('demande_de_sorties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $demande_de_sorties = Demande_de_sortie::all();
        return view('admin.demande_de_sorties.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Demande_de_sortieStoreRequest $request)
    {
        $demande_de_sortie = Demande_de_sortie::create([
            'ref_art' => $request->ref_art,
            'qte_sort' => $request->qte_sort,
            'date_demande' => $request->date_demande,
            'date_sort' => $request->date_sort

        ]);

        return to_route('admin.demande_de_sorties.index')->with('success', 'Demande_de_sortie created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande_de_sortie $demande_de_sortie)
    {
        return view('admin.demande_de_sorties.edit', compact('demande_de_sortie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demande_de_sortie $demande_de_sortie)
    {
        $request->validate([
            'ref_art' => 'required',
            'qte_sort' => 'required',
            'date_demande' => 'required',
            'date_sort' => 'required'
        ]);

        $demande_de_sortie->update([
            'ref_art' => $request->ref_art,
            'qte_sort' => $request->qte_sort,
            'date_demande' => $request->date_demande,
            'date_sort' => $request->date_sort
        ]);

        return to_route('admin.demande_de_sorties.index')->with('success', 'Demande_de_sortie updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande_de_sortie $demande_de_sortie)
    {
       $demande_de_sortie->delete();

        return to_route('admin.demande_de_sorties.index')->with('warning', 'Demande_de_sortie deleted successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Demande_de_sortie $demande_de_sortie)
    {
        //

        return view('admin.demande_de_sorties.show', compact('demande_de_sortie'));


    }

}
