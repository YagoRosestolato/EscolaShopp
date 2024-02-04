<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produto = Produto::all();
        return view('produtos', compact('produto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('novoProduto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ], [
            'name.required' => 'Este campo é obrigatório',
            'description.required' => 'Este campo é obrigatório',
            'price.required' => 'Este campo é obrigatório',
        ]);

        $prod = new Produto();
        $prod->name = $request->input('name');
        $prod->description = $request->input('description');
        $prod->price = $request->input('price');
        $prod->save();

        return redirect()->route('produtos')->with('success', 'Produto cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            return view('editaProduto', compact('prod'));
        }

        return redirect('/app/produtos');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->name = $request->input('name');
            $prod->description = $request->input('description');
            $prod->price = $request->input('price');
            $prod->save();
        }

        return redirect('/app/produtos');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prod = Produto::find($id);
        if (isset($prod)) {
            $prod->delete();
            return redirect('/app/produtos');
        }
    }
}
