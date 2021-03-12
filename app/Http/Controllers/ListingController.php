<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return Listing::all();
    }
 
    public function show($id)
    {
        return Listing::find($id);
    }

    public function store(Request $request)
    {
        return Listing::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Listing::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Listing::findOrFail($id);
        $article->delete();

        return 204;
    }
}
