<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = "tb_album";

   protected $primaryKey = 'album_id';

   protected $fillable = [
    'artist_id',
	'album_name'];
}
