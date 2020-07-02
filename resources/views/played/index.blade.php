@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Daftar played </h3>
	
	<table>

		<tr>
			<td>Artist</td>
			<td>Album</td>
			<td>Track</td>
			<td>Played</td>
			
		</tr>

@foreach($rows as $row)

<tr>
	<td>{{ $row->artist_id }}</td>
	<td>{{ $row->album_id }}</td>
	<td>{{ $row->track_id }}</td>
	<td>{{ $row->played }}</td>
</tr>

@endforeach
</table>
<a href="{{ url('played/create') }}">Tambah Data</a>
</div>

@endsection