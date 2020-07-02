@extends('layouts.app')

@section('content')

<div class="container">

	<h3>Daftar Track </h3>
	
	<table>

		<tr>
			<td>Nama Track</td>
			<td>Artist</td>
			<td>Album</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>
@foreach($rows as $row)

<tr>
	<td>{{ $row->track_name }}</td>
	<td>{{ $row->artist_id }}</td>
	<td>{{ $row->album_id }}</td>
	<td><form action="{{ url('track/' . $row->track_id) }}" method="POST">
	<input name="_method" type="hidden" value="DELETE">
	@csrf
	<button>HAPUS</button>
</form></td>
	<td><a href="{{ url('track/' . $row->track_id . '/edit') }}">Edit</a></td>
</tr>

@endforeach
</table>
<a href="{{ url('track/create') }}">Tambah Data</a>
</div>

@endsection