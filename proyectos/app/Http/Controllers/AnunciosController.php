<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use PHPUnit\Framework\Exception;
use App\Anuncios;
use App\instituciones;

class AnunciosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $anuncios = DB::table('anuncio')
        ->select('anuncio.idanuncio','anuncio.fecha','anuncio.imagen','anuncio.descripcion','anuncio.estado')
        ->get();
       return view('instituciones.anuncios_institucion',['anuncios'=>$anuncios]);
    }
    //funcion para listar los anuncios
    public function list(){
        $anuncios = DB::table('anuncio')
        ->join('institucion','institucion.idinstitucion','=','anuncio.idinstitucion')
        ->select('institucion.nombrei','anuncio.fecha','anuncio.imagen','anuncio.descripcion')->where('anuncio.estado','=','1')
        ->get();
         //asi se retornara para mostrar en las vistas
         return view('Usuarios.inicio_usuario',['anuncios' => $anuncios]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('instituciones.crear_anuncios_institucion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $anuncios= new Anuncios;
            $anuncios->fecha=$request->fecha;
            $anuncios->descripcion=$request->descripcion;
            $anuncios->estado=1;
            $anuncios->idinstitucion=1;
            if ($request->hasFile('imagen')) {
                $file = $request->file('imagen');
                $nombreimg = time().$file->getClientOriginalName();
                $file->move(public_path().'/imagenes/',$nombreimg);
                $anuncios->imagen=$nombreimg;
            }
            if ( $anuncios ->save()) {
                $message = "anuncio guardada con éxito";
                $status = "alert-success";
            }else{
               $message = "Fallo al registrar la anuncio";
               $status = "alert-danger";
            }
            return redirect('/anuncio')->with('status',$status)->with('message',$message);
        }catch(Exception $e){
        return "fatal error -".$e->getMessage();
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $anuncios=Anuncios::find($id);
        return view('instituciones.modificar_anuncios_institucion',['anuncios'=>$anuncios]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $anuncios=Anuncios::find($id);
        
        $anuncios->fecha= $request->fecha;
        $anuncios->imagen = $request->imagen;
        $anuncios->descripcion = $request->descripcion;
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $nombreimg = time().$file->getClientOriginalName();
            $file->move(public_path().'/imagenes/',$nombreimg);
            $anuncios->imagen=$nombreimg;
        }
        $anuncios->save();
        return redirect('anuncio');
    }

    public function disable($id){
        try{
        $anuncios = Anuncios::find($id); 
        if ($anuncios->estado==1) {
            $anuncios->estado=2;
            $anuncios->save();
          return redirect('anuncio');
        }else{
            $anuncios->estado=1;
            $anuncios->save();
            return redirect('anuncio');
        }     
        } catch(Exception $e){
           
        }
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
