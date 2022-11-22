<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Support\Facades\Storage;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['productos']=producto::paginate();
        return view ('personal.productoAdmin',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view ('productoCrear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosProducto = request()->except('_token');

        if ($request->hasFile('imagen')) {
            $datosProducto['imagen']=$request->file('imagen')->store('uploads','public');
        }

        producto::insert($datosProducto);

        return redirect('personal')->with('mensaje','Producto Agregado con Exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $producto=producto::find($id);
        // //return $alumno;
        // return view ('producto_detalle', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=producto::findOrFail($id);
        return view ('personal.productoEdit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosProducto = request()->except(['_token','_method']);

        if ($request->hasFile('imagen')) {
            $producto=producto::findOrFail($id);
            Storage::delete('public/'.$producto->imagen);
            $datosProducto['imagen']=$request->file('imagen')->store('uploads','public');
        }

        producto::where('id','=',$id)->update($datosProducto);

        $producto=producto::findOrFail($id);
        return view ('personal.productoEdit', compact('producto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $producto=producto::findOrFail($id);

        if (Storage::delete('public/'.$producto->imagen)) {

            producto::destroy($id);

        }

        return redirect('personal')->with('mensaje','Producto Eliminado con Exito');
    }
}
