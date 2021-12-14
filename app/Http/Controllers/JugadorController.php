<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Requests\CreateJugadorRequest;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth')->except('index','show');
    }

    public function index()
    {

        return view('jugadores.index', [
            'equipo' => Project::get()
        ]);
    }

    public function create()
    {
        return view('jugadores.create', [
            'project' => new Project
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJugadorRequest $request)
    {
        Project::create($request->validated());

        return redirect()->route('jugadores.index')->with('status',"El jugador fue creado.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('jugadores.show', [
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {
        return view('jugadores.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Project $project, CreateJugadorRequest $request)
    {
        $project->update($request->validated());

        return redirect()->route('jugadores.show', $project)->with('status',"El jugador fue actualizado.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return redirect()->route('jugadores.index')->with('status',"El jugador fue borrado.");
    }
}
