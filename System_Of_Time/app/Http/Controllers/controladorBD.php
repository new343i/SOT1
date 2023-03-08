<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Model_maestro;

class controladorBD extends Controller
{
    protected $sot;

    public function __construct(Model_maestro $sot){
        $this->sot=$sot;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        $T_maestro=new Model_maestro([
            'N_maestro'=>$req->input("N_maestro"),
            'Num_maestro'=>$req->input("Num_maestro"),
            'Area_maestro'=>$req->input("Area_maestro"),
            'Tutorado'=>$req->input("Tutorado"),
            'Clave_materia'=>$req->input("Clave_materia")
        ]);
        $T_maestro->save();
        return redirect('/addMaestro');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
