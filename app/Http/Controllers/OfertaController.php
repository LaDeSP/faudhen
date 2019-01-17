<?php

namespace App\Http\Controllers;

use App\Oferta;
use Validator;
use Illuminate\Http\Request;

class OfertaController extends Controller
{

    public function __construct(){
        $this->middleware('nivel:4')->except('index' , 'show');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ofertas = Oferta::all();
        return view('modelos.oferta.index', ['ofertas' => $ofertas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.oferta.cadastro');
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
            'ano' => 'required',
            'semestre' => 'required',
            'tipo' => 'required',
            'inicio' => 'required|date',
            'termino' => 'required|date'
        ];
        
        $message = [
            'ano.required' => 'Por favor, digite o ano da oferta',
            'semestre.required' => 'Por favor, selecione o semestre da oferta',
            'tipo.string' => 'Por favor, selecione o tipo da oferta',
            'inicio.required' => 'Por favor, digite a data de inicio da oferta',
            'termino.required' => 'Por favor, digite a data de termino da oferta'
        ];


        $validator = Validator::make($input, $rules , $message)->validate();
        

        $oferta = new Oferta;
        $oferta->ano = $request->ano;
        $oferta->semestre = $request->semestre;
        $oferta->tipo = $request->tipo;
        $oferta->data_inicio = $request->inicio;
        $oferta->data_termino = $request->termino;
        $oferta->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function show(Oferta $oferta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function edit(Oferta $oferta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Oferta $oferta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oferta  $oferta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oferta $oferta)
    {
        //
    }
}
