<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Categoria;
 
class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
 
        $categorias = Categoria::all();
        return $categorias;
    }
 
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
 
        $categoria = new Categoria();
        $categoria->nombre = $request->nombre;
        $categoria->telefono = $request->telefono;
        $categoria->correo = $request->correo;
        $categoria->edad = $request->edad;
        $categoria->sexo = $request->sexo;
        $categoria->estatura = $request->estatura;
        $categoria->peso = $request->peso;
        $categoria->medicamento = $request->medicamento;
        $categoria->dosis = $request->dosis;
        $categoria->efecto_adverso = $request->efecto_adverso;
        $categoria->comentarios = $request->comentarios;
        
        
        
        
        
        
        
        
        
        
        
        $categoria->condicion = '1';
        $categoria->save();
    }
 
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
 
        $categoria = Categoria::findOrFail($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->telefono = $request->telefono;
        $categoria->correo = $request->correo;
        $categoria->edad = $request->edad;
        $categoria->sexo = $request->sexo;
        $categoria->estatura = $request->estatura;
        $categoria->peso = $request->peso;
        $categoria->medicamento = $request->medicamento;
        $categoria->dosis = $request->dosis;
        $categoria->efecto_adverso = $request->efecto_adverso;
        $categoria->comentarios = $request->comentarios;
        
        $categoria->condicion = '1';
        $categoria->save();
    }
 
    public function desactivar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
 
        $categoria = Categoria::findOrFail($request->id);
        $categoria->condicion = '0';
        $categoria->save();
    }
 
    public function activar(Request $request)
    {
        if (!$request->ajax()) return redirect('/');
         
        $catgoria = Categoria::findOrFail($request->id);
        $catgoria->condicion = '1';
        $catgoria->save();
    }
}