<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qqson;

class QqsonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $qqsons=Qqson::all();

        return view('Qqson.qqson_show', compact('qqsons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Qqson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'FIO'=>'required'
            
        ]);

        $qqson = new Qqson([
            'FIO'=> $request->get('FIO'),
            'publication_name'=> $request->get('publication_name'),
            'journal'=> $request->get('journal'),
            'date'=> $request->get('date'),
            'page'=> $request->get('page')
            
            #'isVerified' => $request->get('isVerified')
        ]);
        $qqson->save();
        return redirect('/qqsons')->with('success', 'qqson saved!');
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
        return view();
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
        $qqson = qqson::find($id);
        return view('Qqson.edit', compact('qqson'));
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
        $request->validate([
            'FIO'=>'required'
            
        ]);

        $qqson = qqson::find($id);
        $qqson->FIO= $request->get('FIO');
        $qqson->publication_name= $request->get('publication_name');
        $qqson->journal= $request->get('journal');
        $qqson->date= $request->get('date');
        $qqson->page= $request->get('page');
        #$qqson->isVerified = $request->get('isVerified');
        $qqson->save();

        return redirect('/qqsons')->with('success', 'qqson updated!');
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
        $qqson = qqson::find($id);
        $qqson->delete();

        return redirect('/qqsons')->with('success', 'qqson deleted!');
    }
}
