<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Domain;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $domains = Domain::all();
     
        return view('domains.index', compact('domains')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('domains.create');
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
            $domain = new Domain;
            $domain->name = $request->name;
            $domain->tld = $request->tld;
            $domain->save();
            return response()->json([
                'msg' => 'Criado com sucesso!',
                'state' => 'OK',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Erro ao criar',
                'state' => 'ERRO',
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function show(Domain $domain)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $domain = Domain::findorFail($id);
        return view('domains.edit', compact('domain'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $domain = Domain::find($id);
            $domain->update($request->except('_token'));
            return response()->json([
                'msg' => 'Editado com sucesso!',
                'state' => 'OK',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Erro ao editar',
                'state' => 'ERRO',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Domain  $domain
     * @return \Illuminate\Http\Response
     */
    public function destroy(Domain $domain)
    {
        try {
            Domain::findorFail($id)->delete();
            return response()->json([
                'msg' => 'Deletado com sucesso!',
                'state' => 'OK',
            ]);
        } catch (\Throwable $th) {
            return response()->json([
                'msg' => 'Erro ao deletar',
                'state' => 'ERRO',
            ]);
        }
    }
}
