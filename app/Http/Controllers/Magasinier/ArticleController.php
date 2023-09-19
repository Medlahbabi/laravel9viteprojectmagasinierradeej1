<?php

namespace App\Http\Controllers\Magasinier;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArticleStoreRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('magasinier.articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magasinier.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleStoreRequest $request)
    {
        $image = $request->file('image')->store('public/articles');

        Article::create([
            'ref_art'=> $request->ref_art,
            'gender_art'=> $request->gender_art,
            'name_art' => $request->name_art,
            'description_art' => $request->description_art,
            'price_art'=> $request->price_art,
            'stock_quantity_art'=> $request->stock_quantity_art,
            'quantity_output_art'=> $request->quantity_output_art,
            'minimum_quantity_art'=> $request->minimum_quantity_art,
            'image_art' => $image_art
        ]);

        return to_route('magasinier.articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
        return view('magasinier.articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('magasinier.articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $request->validate([
            'ref_art'=>'required',
            'gender_art'=>'required',
            'minimum_quantity_art'=>'required',
            'name_art' => 'required',
            'description_art' => 'required',
            'price_art'=>'required',
            'stock_quantity_art'=>'required',
            'quantity_output_art'=>'required'

        ]);

        $image_art = $article->image_art;
        if ($request->hasFile('image_art')) {
            Storage::delete($article->image_art);
            $image_art = $request->file('image_art')->store('public/articles');
        }

        $article->update([
            'ref_art'=> $request->ref_art,
            'gender_art'=> $request->gender_art,
            'name_art' => $request->name_art,
            'description_art' => $request->description_art,
            'price_art'=> $request->price_art,
            'stock_quantity_art'=> $request->stock_quantity_art,
            'quantity_output_art'=> $request->quantity_output_art,
            'minimum_quantity_art'=> $request->minimum_quantity_art,
            'image_art' => $image_art
        ]);
        return to_route('magasinier.articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        Storage::delete($article->image);
        /*$article->menus()->detach();*/
        $article->delete();

        return to_route('magasinier.articles.index')->with('danger', 'Article deleted successfully.');
    }
}
