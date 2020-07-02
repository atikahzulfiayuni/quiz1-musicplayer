<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;

class TrackController extends Controller
{
    
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }
    
    public function create()
    {
        $rows = Track::all();
        return view('track.add', compact('rows'));
    }
    
    public function store(Request $request)
    {
        $track = new Track();
        $track->track_name = $request->track_name;
        $track->artist_id = $request->artist_id;
        $track->album_id = $request->album_id;
        $track->save();
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

   public function edit($id)
    {
       $row = Track::findOrFail($id);
       return view('track.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $row = Track::findOrFail($id);
        $row ->update([
            'track_name' => request('track_name'),
            'artist_id' => request('artist_id'),
            'album_id' => request('album_id'),
        ]);
        return redirect('/track');
    }

    public function destroy($id)
    {
       $row = Track::findOrFail($id);
       $row->delete();
       return redirect('track');
    }
}
