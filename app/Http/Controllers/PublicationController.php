<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $publications=Publication::all();

        return view('publications.publication_show', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('publications.create');
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
            'title'=>'required',
            'year'=>'required',
            'page'=>'required',
            'url'=>'required'
        ]);

        $publication = new Publication([
            'title' => $request->get('title'),
            'year' => $request->get('year'),
            'url' => $request->get('url'),
            'page' => $request->get('page'),
            'city' => $request->get('city'),
            #'isVerified' => $request->get('isVerified')
        ]);
        $publication->save();
        return redirect('/publications')->with('success', 'Publication saved!');
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
        $publication = Publication::find($id);
        return view('publications.edit', compact('publication'));
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
            'title'=>'required',
            'year'=>'required',
            'page'=>'required',
            'url'=>'required'
        ]);

        $publication = Publication::find($id);
        $publication->title =  $request->get('title');
        $publication->year = $request->get('year');
        $publication->url = $request->get('url');
        $publication->page = $request->get('page');
        $publication->city = $request->get('city');
        #$publication->isVerified = $request->get('isVerified');
        $publication->save();

        return redirect('/publications')->with('success', 'Publication updated!');
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
        $publication = Publication::find($id);
        $publication->delete();

        return redirect('/publications')->with('success', 'Publication deleted!');
    }
}
