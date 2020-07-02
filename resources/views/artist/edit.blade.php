@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Edit Data Artist</h3>
	<a href="{{ url('artist') }}">Data Artist</a>
	<form action="{{ url('/artist/'. $row->artist_id) }}" method="POST">
		<input name="_method" type="hidden" value="PATCH">

		$csrf

		<table>
			<tr>
				<td>Nama Artist</td>
				<td><input type="text" name="artist_name" value="{{ $row->artist_name }}"></td>
			</tr>
			<tr>
			<td></td>
			<td><input type="submit" value="UPDATE"></td>
		</tr>
		</table>
	</form>
</div>

@endsection