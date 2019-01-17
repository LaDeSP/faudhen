<?php

namespace App\Http\Controllers;

use App\Disciplina;
use Validator;
use Illuminate\Http\Request;

class DisciplinaController extends Controller
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
        $disciplinas = Disciplina::all();
        return view('modelos.disciplina.index', ['disciplinas' => $disciplinas, 'tipo' => 'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.disciplina.cadastro');
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
            'nome' => 'required|string',
            'carga' => 'required'
        ];
        
        $message = [
            'codigo.required' => 'Por favor, digite o código da disciplina',
            'carga.required' => 'Por favor, informe a carga horaria',
            'nome.string' => 'Por favor, digite o nome da disciplina somente com letras',
            'nome.required' => 'Por favor, digite o nome da discplina',
        ];


        $validator = Validator::make($input, $rules , $message)->validate();

        $disciplina = new Disciplina;
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga;
        $disciplina->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function show(Disciplina $disciplina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function edit($disciplina)
    {
        $disciplina = Disciplina::find($disciplina);
        return view('modelos.disciplina.editar', ['disciplina' => $disciplina]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Disciplina $disciplina)
    {
        $input = $request->all();

        $rules = [
            'nome' => 'required|string',
            'carga' => 'required'
        ];
        
        $message = [
            'codigo.required' => 'Por favor, digite o código da disciplina',
            'carga.required' => 'Por favor, informe a carga horaria',
            'nome.string' => 'Por favor, digite o nome da disciplina somente com letras',
            'nome.required' => 'Por favor, digite o nome da discplina'
            
        ];

        $validator = Validator::make($input, $rules , $message)->validate();
        
        $disciplina = Disciplina::find($request->codigo);
        $disciplina->nome = $request->nome;
        $disciplina->carga_horaria = $request->carga;
        $disciplina->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Disciplina  $disciplina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Disciplina $disciplina)
    {
        Disciplina::destroy($disciplina);
        return $this->index();
    }
}
