<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
   protected $table = "tb_track";

   protected $primaryKey = 'track_id';

   protected $fillable = ['track_name', 'artist_id', 'album_id','time'];
}
