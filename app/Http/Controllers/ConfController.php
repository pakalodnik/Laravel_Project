<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Conf;

class ConfController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        
        $confs=Conf::all();

        return view('conf.conf_show', compact('confs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('conf.conf_create');
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
            'FIO'=>'required',
            'title'=>'required',
            'date'=>'required',
            'page'=>'required',
            'url'=>'required'
        ]);

        $conf = new Conf([
            'FIO'=> $request->get('FIO'),
            'publication_name'=> $request->get('publication_name'),
            'conf'=> $request->get('conf'),
            'place'=> $request->get('place'),
            'date'=> $request->get('date'),
            'page'=> $request->get('page')
            
            #'isVerified' => $request->get('isVerified')
        ]);
        $conf->save();
        return redirect('/confs')->with('success', 'conf saved!');
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
        $conf = conf::find($id);
        return view('conf.conf_edit', compact('conf'));
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

        $conf = conf::find($id);
        $conf->FIO= $request->get('FIO');
        $conf->publication_name= $request->get('publication_name');
        $conf->conf= $request->get('conf');
        $conf->place= $request->get('place');
        $conf->date= $request->get('date');
        $conf->page= $request->get('page');
        #$conf->isVerified = $request->get('isVerified');
        $conf->save();

        return redirect('/confs')->with('success', 'conf updated!');
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
        $conf = conf::find($id);
        $conf->delete();

        return redirect('/confs')->with('success', 'conf deleted!');
    }
}
