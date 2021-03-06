<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Oferta;
use App\categorias;
use App\examenes;
use PHPUnit\Framework\Exception;
use Illuminate\Database\QueryException;

class OfertasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        try{
            $categorias=DB::table('categoria')
            ->select('nombrec','idcategoria')
            ->get();
         $ofertas = DB::table('oferta')
         ->join('categoria','categoria.idcategoria','=','oferta.idcategoria')
         ->select('oferta.idoferta','categoria.nombrec','oferta.nombref','oferta.duracion','oferta.medida','oferta.estado','oferta.descripcion')
         ->get();
         return view('instituciones.ofertas_institucion',['ofertas'=> $ofertas],['categorias'=>$categorias]);
        }catch(QueryException $e){
            return "fatal error -".$e->getMessage();
        }    
    }


    public function listar(){
        $categorias=DB::table('categoria')
            ->select('nombrec','idcategoria')
            ->get();
        $instituciones=DB::table('institucion')
            ->select('nombrei','idinstitucion')
            ->get();
        $ofertas = DB::table('oferta')
        ->join('institucion','institucion.idinstitucion','=','oferta.idinstitucion')
        ->join('categoria','categoria.idcategoria','=','oferta.idcategoria')
        ->select('categoria.nombrec','institucion.nombrei','oferta.nombref','oferta.idoferta','oferta.descripcion','oferta.medida','oferta.duracion','oferta.estado')
        ->get();
        $anuncios = DB::table('anuncio')
        ->join('institucion','institucion.idinstitucion','=','anuncio.idinstitucion')
        ->select('institucion.nombrei','anuncio.fecha','anuncio.imagen','anuncio.descripcion')->where('anuncio.estado','=','1')
        ->get();
        return view('usuarios.inicio_usuario',compact('categorias','instituciones','ofertas','anuncios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $fields=request()->validate(
                [
                'idcategoria' => 'required',
                'duracion' => 'required',
                'nombref' => 'required',
                'medida' => 'required',
                'descripcion' => 'required',
                ]
        );
                 
            
            $ofertas=new Oferta;
            $ofertas->idcategoria = $request ->idcategoria;
            $ofertas->duracion = $request ->duracion;
            $ofertas->nombref = $request ->nombref;
            $ofertas->medida = $request ->medida;
            $ofertas->idinstitucion=1;
            $ofertas->descripcion = $request->descripcion;
            $ofertas->estado = 1;
            if ( $ofertas ->save()) {
                $message = "Oferta guardada con éxito";
                $status = "alert-success";
            }else{
               $message = "Fallo al registrar la oferta";
               $status = "alert-danger";
            }
            return redirect('oferta')->with('status',$status)->with('message',$message);
        } catch (Exception $e) {
            
            return "fatal Error -".$e->getMessage();

        } 
        
    }

    public function disable($id){
        try {
      $ofertas = oferta::find($id);
      if ($ofertas->estado==1) { 
          $ofertas->estado=2;
          $ofertas->save();
          return redirect('oferta');
      }else{
          $ofertas->estado=1;
          $ofertas->save();
          return redirect('oferta');
      }
     
        } catch (Exception $e) {
            return "Fatal Error -".$e->getMessage();
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

    public function listarCategorias(Request $request){
        
        $ofertas=DB::table('oferta')
        ->join('institucion','institucion.idinstitucion','=','oferta.idinstitucion')
        ->join('categoria','categoria.idcategoria','=','oferta.idcategoria')
        ->select('categoria.nombrec','institucion.nombrei','oferta.nombref','oferta.descripcion','oferta.medida','oferta.duracion')->where('oferta.idcategoria','=',$request->idcategoria)
        ->get();
        return $ofertas;
    }
    
    public function mostrarOferta($idoferta){
      $ofertas=DB::table('oferta')
      ->join('institucion','institucion.idinstitucion','=','oferta.idinstitucion')
      ->join('categoria','categoria.idcategoria','=','oferta.idcategoria')
      ->select('categoria.nombrec','institucion.nombrei','oferta.nombref','oferta.descripcion','oferta.medida','oferta.duracion')->where('oferta.idoferta','=',$idoferta)
      ->get();
       return view('usuarios.mostrar_oferta',['ofertas'=>$ofertas[0]]);
    }

    public function mostrarDatosIntitucion($idinstitucion){
        $instituciones=DB::table('institucion')
        ->select('institucion.nombrei','institucion.pagina','institucion.idinstitucion')->where('institucion.idinstitucion','=',$idinstitucion)
        ->get();
        $ofertas=DB::table('oferta')
        ->join('institucion','institucion.idinstitucion','=','oferta.idinstitucion')
        ->join('categoria','categoria.idcategoria','=','oferta.idcategoria')
        ->select('categoria.nombrec','institucion.nombrei','oferta.nombref','oferta.descripcion','oferta.medida','oferta.duracion','oferta.idinstitucion')->where('oferta.idinstitucion','=',$idinstitucion)->where('oferta.estado','=',1)
        ->get();
        $examenes=DB::table('examen')
        ->select('examen.nombrex','examen.fecha','examen.costo','examen.idinstitucion')->where('examen.idinstitucion','=',$idinstitucion)
        ->get();
        return view('usuarios.mostrarDatosinst',['instituciones'=>$instituciones[0]],compact('ofertas','examenes'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * 
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    { 
        $categorias=DB::table('categoria')
        ->select('nombrec','idcategoria')
        ->get();  
        $ofertas=oferta::find($id);
      return view('instituciones.modificar_ofertas_institucion',['ofertas'=>$ofertas],['categorias'=>$categorias]);
      
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
        $ofertas=oferta::find($id);
        if ($request->idcategoria!=0) {
            $ofertas->idcategoria=$request->idcategoria;   
        }
        $ofertas->nombref=$request->nombref;
        $ofertas->duracion=$request->duracion;
        $ofertas->medida=$request->medida;
        $ofertas->descripcion=$request->descripcion;
        $ofertas->save();
         return redirect('oferta');
    }
}
