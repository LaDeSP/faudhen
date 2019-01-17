<?php

namespace App\Http\Controllers;

use App\Sala;
use Validator;
use Illuminate\Http\Request;

class SalaController extends Controller
{

    public function __construct(){
        $this->middleware('nivel:2')->except('index' , 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salas = Sala::all();
        return view('modelos.sala.index', ['salas' => $salas, 'tipo' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.sala.cadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $rules = [
            'unidade' => 'required|string',
            'bloco' => 'required|string',
            'numero' => 'required|int',
            'vagas' => 'required|int'
        ];
        
        $message = [
            'unidade.required' => 'Por favor, selecione a unidade da sala',
            'bloco.required' => 'Por favor, digite o bloco da sala',
            'bloco.string' => 'Por favor, digite o bloco somente com letras',
            'numero.int' => 'Por favor, digite o numero somente numeros',
            'vagas.required' => 'Por favor, digite o numero de vagas da sala',
        ];


        $validator = Validator::make($input, $rules , $message)->validate();


        $sala = new Sala;
        $sala->unidade = $request->unidade;
        $sala->bloco = $request->bloco;
        $sala->numero = $request->numero;
        $sala->vagas = $request->vagas;
        $sala->nome = $request->bloco.'-'.$request->numero;
        
        $sala->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function show(Sala $sala)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function edit(Sala $sala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sala $sala)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sala  $sala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sala $sala)
    {
        //
    }
}
