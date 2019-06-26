<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\examenes;
use App\instituciones;
class ExamenesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
        $examenes=DB::table('examen')
        ->select('examen.idexamen','examen.fecha','examen.costo','examen.estado','examen.nombrex')
        ->get();
        return view('instituciones.examenes_institucion',['examenes'=>$examenes]);
        }catch(Exception $e){
           return "fatal error -".$e->getMessage();
        }
    }
    public function mostrar(){
        $examenes=DB::table('examen')
        ->select('examen.fecha','examen.costo')
        ->get();        
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
    //crear
    public function store(Request $request)
    {
        try {
            $examenes=new examenes;
            // $examenes->idinstitucion=
            $examenes->nombrex = $request->nombrex;
            $examenes->fecha=$request->fecha;
            $examenes->costo=$request->costo;
            $examenes->estado=1;
            if ($examenes ->save()) {
                $message = "Examen guardado con éxito";
                $status = "alert-success";
            }else{
               $message = "Fallo al registrar el examen";
               $status = "alert-danger";
            }
            return redirect('examen')->with('status',$status)->with('message',$message);
        } catch (Exception $e) {
            
            return "fatal Error -".$e->getMessage();

        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $examenes=examenes::find($id);
        return view('instituciones.modificar_examenes_institucion',['examenes'=>$examenes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
   // actualizar
    public function update(Request $request, $id)
    {
        try {
            $examenes=examenes::find($id);
            //$examenes->idinstitucion = $request->idinstitucion;
            $examenes->fecha = $request->fecha;
            $examenes->costo = $request->costo;
            $examenes->save();
            return redirect('examen');
        } catch (Exception $e) {
            
            return "fatal Error -".$e->getMessage();

        }
       
    }

    public function disable($id){
        try{
        $examenes = examenes::find($id); 
        if ($examenes->estado==1) {
          $examenes->estado=2;
          $examenes->save();
          return redirect('examen');
        }else{
            $examenes->estado=1;
            $examenes->save();
            return redirect('examen');
        }     
        } catch(Exception $e){
           
        }
    }

}
