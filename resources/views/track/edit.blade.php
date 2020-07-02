@extends('layouts.app')

@section('content')

<div class="container">
	<h3>Edit Data Track</h3>
	<form action="{{ url('/track/'. $row->track_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">

		$scrf

		<table>
			<tr>
				<td>Nama Track</td>
				<td><input type="text" name="track_name" value="{{ $row->track_name }}"></td>
			</tr>
			<tr>
				<td>Artist</td>
				<td><input type="text" name="artist_id" value="{{ $row->artist_id }}"></td>
			</tr>
			<tr>
				<td>Album</td>
				<td><input type="text" name="album_id" value="{{ $row->album_id }}"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
		</table>
	</form>
</div>

@endsection