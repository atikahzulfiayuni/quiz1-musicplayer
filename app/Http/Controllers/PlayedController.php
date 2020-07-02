<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Played;

class PlayedController extends Controller
{
    
    public function index()
    {
        $rows = Played::all();
        return view('played.index', compact('rows'));
    }
    
    public function create()
    {
        $rows = Played::all();
        return view('Played.add', compact('rows'));
    }


    
    public function store(Request $request)
   {
        $played = new Played();
        $played ->artist_id = $request->artist_id;
        $played ->album_id = $request->album_id;
        $played ->track_id = $request->track_id;
        $played->save();
        return redirect('/track');
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
       $row = Played::findOrFail($id);
       return view('played.edit', compact('row'));
    }
    
     public function update(Request $request, $id)
    {
        $row = Played::findOrFail($id);
        $row ->update([
            'artist_id' => request('artist_id'),
            'album_id' => request('album_id'),
            'track_id' => request('track_id'),
        ]);
        return redirect('/played');
    }


    public function destroy($id)
    {
       $row = Played::findOrFail($id);
       $row->delete();
       return redirect('played');
    }
}
