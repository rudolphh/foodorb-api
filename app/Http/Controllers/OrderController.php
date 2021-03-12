<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }
 
    public function show($id)
    {
        return Order::find($id);
    }

    public function store(Request $request)
    {
        return Order::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $article = Order::findOrFail($id);
        $article->update($request->all());

        return $article;
    }

    public function delete(Request $request, $id)
    {
        $article = Order::findOrFail($id);
        $article->delete();

        return 204;
    }

    public function status(Request $request, $id)
    {
        $article = Order::findOrFail($id);

        return response()->json([
            'order_id'=> $id,
            'status' => 'Accepted',
        ]);
    }
}

