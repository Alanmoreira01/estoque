<?php

namespace App\Http\Controllers;

use App\TipoProduto;
use Illuminate\Http\Request;



use Mail;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;



use Barryvdh\DomPDF\Facade as PDF;


use Session;
use Illuminate\Support\Facades\Validator;


class TipoProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titulo = 'Lista de Tipo Produtos';
        $tipo_produtos = TipoProduto::paginate(5);

        return view('estoque/listar_tipo_produtos', compact('tipo_produtos', 'titulo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titulo = 'Cadastro de Tipo Produtos';
          return view('estoque/cadastro_editar_tipo_produtos', compact( 'titulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tipo_produto = $request->all();

        $messages = [
            'ds_tipo_produto.required' => 'Campo Nome do Tipo Produto é de preenchimento obrigatório!',

            '' => '',
        ];




        $validacao = Validator::make($tipo_produto, TipoProduto::$rules, $messages);
        if ($validacao->fails()) {
            return redirect::to('/tipo_prod_cadastrar')
                            ->withErrors($validacao)
                            ->withInput();
        }


       TipoProduto::create($tipo_produto);

        return redirect('/tipo_prod_listar')->with('message', 'Salvo com Sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoProduto  $tipoProduto
     * @return \Illuminate\Http\Response
     */
    public function show(TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoProduto  $tipoProduto
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoProduto  $tipoProduto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoProduto $tipoProduto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoProduto  $tipoProduto
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoProduto $tipoProduto)
    {
        //
    }
}
