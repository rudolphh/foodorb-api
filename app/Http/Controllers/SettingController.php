<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    public function index()
    {
        return Setting::all();
    }
 
    public function show($id)
    {
        return Setting::find($id);
    }

    public function store(Request $request)
    {
        return Setting::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Setting::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Setting::findOrFail($id);
        $article->delete();

        return 204;
    }
}
