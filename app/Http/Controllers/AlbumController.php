<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumController extends Controller
{
    
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }
    
    public function create()
    {
        return view('album.add');
    }

   
   
    public function store(Request $request)
   {
        $request->validate([
            'album_name' => 'required',
            'artist_id' => 'required'
        ],
        [
            'album_name.required' => 'Nama Wajib Diisi',
            'artist_id.required' => 'Artist Wajib Diisi'
        ]);

        Album::create([
            'album_name ' => $request->album_name,
            'artist_id ' => $request->artist_id
        ]);

        return redirect('album');
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
       $row = Album::findOrFail($id);
       return view('album.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'album_name' => 'required',
            'artist_id' => 'required'
        ],
        [
            'album_name.required' => 'Nama Wajib Diisi',
            'artist_id.required' => 'Artist Wajib Diisi'
        ]);

        $row = Album::findOrFail($id);
        $row->update([
                        'album_name' => $request->album_name,
                        'artist_id' => $request->artist_id
                    ]);

        return redirect('album');
    }

    public function destroy($id)
    {
       $row = Album::findOrFail($id);
       $row->delete();
       return redirect('album');
    }
}
