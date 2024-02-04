<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class ListaFornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fornecedor = Fornecedor::all();
        return view('listaFornecedor', compact('fornecedor'));
    }

}
