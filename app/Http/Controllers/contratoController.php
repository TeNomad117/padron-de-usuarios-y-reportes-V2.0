<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\contrato;
use App\rutas;
use App\giro;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class contratoController extends Controller
{
    //Listado de contratos
    public function index()
    {
       $contrato=contrato::all();

        return view('contrato.index')->with(compact('contrato'));
    }

    public $prueba=0;
    //Formulario
    public function create()
    {
    $ruta=rutas::all();
    $giros=giro::all();


    return view('contrato.create')->with(compact('ruta', 'giros'));

    }
    //Guardar contrato
    public function save(Request $request)
    {

    $validator = $this->validate($request,[
    'nombre_razon'=> 'required|string|max:255',

    ]);
    $contrato=new contrato;
    $prueba=idnum_contrato;
    $contrato->idnum_contrato=$contrato->id;
    $contrato->idruta=$request->input('ruta');
	$contrato->fecha_alta=Carbon::now();
    $contrato->nombre_razon=$request->input('nombre_razon');
	$contrato->idgiro=$request->input('giro');
	$contrato->codigo_postal=$request->input('codigo_postal');
	$contrato->direccion_predio=$request->input('direccion_predio');
	$contrato->calles_trasversales=$request->input('calles_trasversales');
	$contrato->colonia=$request->input('colonia');
	$contrato->telefono=$request->input('telefono');
	$contrato->diametro_red=$request->input('diametro_red');
	$contrato->pensionado=$request->input('pensionado');
	$contrato->estado_servicio=$request->input('estado_servicio');
	$contrato->diametro_toma=$request->input('diametro_toma');
	$contrato->sisterna=$request->input('sisterna');
	$contrato->clasificacion=$request->input('clasificacion');
	$contrato->servicio=$request->input('servicio');
	$contrato->idmedidor=$request->input('idmedidor');
	$contrato->observaciones=$request->input('observaciones');
    $contrato->nota_cobrar=$request->input('nota_cobrar');
    $contrato->save();
    return redirect('/');
    }
//Eliminar contrato
public function delete($id)
{
    $contrato=contrato::find($idnum_contrato);
    $contrato->delete();
    return back();

    return back()->with('contratoEliminado', 'Contrato eliminado');
}
//Editar contrato
public function editform($id)
{
    $contrato = contrato::find($id);
    $ruta=rutas::all();
    $giros=giro::all();
    return view('contrato.editform', compact('contrato', 'ruta', 'giros'));
}
public function edit(Request $request, $id)
    {

    $validator = $this->validate($request,[
    'nombre_razon'=> 'required|string|max:255',

    ]);
    $contrato=contrato::find($id);
    $contrato->idnum_contrato=$contrato->id;
    $contrato->idruta=$request->input('ruta');
	$contrato->fecha_alta=Carbon::now();
    $contrato->nombre_razon=$request->input('nombre_razon');
	$contrato->idgiro=$request->input('giro');
	$contrato->codigo_postal=$request->input('codigo_postal');
	$contrato->direccion_predio=$request->input('direccion_predio');
	$contrato->calles_trasversales=$request->input('calles_trasversales');
	$contrato->colonia=$request->input('colonia');
	$contrato->telefono=$request->input('telefono');
	$contrato->diametro_red=$request->input('diametro_red');
	$contrato->pensionado=$request->input('pensionado');
	$contrato->estado_servicio=$request->input('estado_servicio');
	$contrato->diametro_toma=$request->input('diametro_toma');
	$contrato->sisterna=$request->input('sisterna');
	$contrato->clasificacion=$request->input('clasificacion');
	$contrato->servicio=$request->input('servicio');
	$contrato->idmedidor=$request->input('idmedidor');
	$contrato->observaciones=$request->input('observaciones');
    $contrato->nota_cobrar=$request->input('nota_cobrar');
    $contrato->save();
    return redirect('/');
    }
}
