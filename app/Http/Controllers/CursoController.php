<?php

namespace App\Http\Controllers;

use App\Curso;
use Validator;
use Illuminate\Http\Request;

class CursoController extends Controller
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
        $cursos = Curso::all();
        return view('modelos.curso.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('modelos.curso.cadastro');
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
            'codigo' => 'required|unique:cursos,id',
            'nome' => 'required|string',
            'semestres' => 'required'
        ];
        
        $message = [
            'codigo.required' => 'Por favor, digite o código do curso',
            'semestres.required' => 'Por favor, selecione a quantidade de semestres',
            'nome.string' => 'Por favor, digite o nome do curso somente com letras',
            'nome.required' => 'Por favor, digite o nome do curso',
            'codigo.unique' => 'Este códgio já está sendo utilizado, por favor insira outro'
        ];

        $validator = Validator::make($input, $rules , $message)->validate();

        $curso = new Curso;
        $curso->id = $request->codigo;
        $curso->nome = $request->nome;
        $curso->qtd_semestre = $request->semestres;
        $curso->save();
        return $this->index();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function show(Curso $curso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function edit($curso)
    {   
        $curso = Curso::find($curso);
        return view('modelos.curso.editar', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $input = $request->all();

        $rules = [
            'nome' => 'required|string',
            'semestres' => 'required'
        ];
        
        $message = [
            'semestres.required' => 'Por favor, selecione a quantidade de semestres',
            'nome.string' => 'Por favor, digite o nome do curso somente com letras',
            'nome.required' => 'Por favor, digite o nome do curso',
        ];

        $validator = Validator::make($input, $rules , $message)->validate();
        
        $curso = Curso::find($request->codigo);
        $curso->nome = $request->nome;
        $curso->qtd_semestre = $request->semestres;
        $curso->save();
        return $this->index();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Curso  $curso
     * @return \Illuminate\Http\Response
     */
    public function destroy($curso)
    {
        Curso::destroy($curso);
        return $this->index();
    }
}
