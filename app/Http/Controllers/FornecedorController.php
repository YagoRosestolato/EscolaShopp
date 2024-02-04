<?php

namespace App\Http\Controllers;

use App\Models\Fornecedor;
use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function __construct(){
    //     $this->middleware('fornecedor');
    // }
   



    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('fornecedor', compact('fornecedor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('novoFornecedor');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required',
                'cnpj' => 'required',
                'endereco' => 'required',

            ], [
                'name.required' => 'Este campo é obrigatório',
                'cnpj.required' => 'Este campo é obrigatório',
                'endereco.required' => 'Este campo é obrigatório',
      
            ]);

            $fornecedor = new Fornecedor();
            $fornecedor->name = $request->name;
            $fornecedor->cnpj = $request->cnpj;
            $fornecedor->endereco = $request->endereco;

            $fornecedor->save();

            return redirect('/app/fornecedor');
            dd('Usuário salvo com sucesso!'); 
            return redirect('/app/fornecedor');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
