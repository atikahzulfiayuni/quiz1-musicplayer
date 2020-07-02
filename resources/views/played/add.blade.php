@extends('layouts.app')
@section('content')

<div class="container">
	<h3>Tambah Data Played</h3>
	<form action="{{ url('/played') }}" method="POST">
		$csrf

		<table>
			<tr>
				<td>Nama Artist</td>
				<td><input type="text" name="artist_id"></td>
			</tr>
			<tr>
				<td>Nama Album</td>
				<td><input type="text" name="album_id"></td>
			</tr>
			<tr>
				<td>Nama Track</td>
				<td><input type="text" name="track_id"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
</div>

@endsection
