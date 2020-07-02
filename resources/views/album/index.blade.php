@extends('layouts.app')

@section('content')

</form>
<div class="container">

	<h3>Daftar Album </h3>
	
	<table>

		<tr>
			<td>Nama Album</td>
			<td>Artist</td>
			<td>Hapus</td>
			<td>Edit</td>
		</tr>

@foreach($rows as $row)

<tr>
	<td>{{ $row->album_name }}</td>
	<td>{{ $row->artist_id }}</td>
	<td><form action="{{ url('album/' . $row->album_id) }}" method="POST">
	<input name="_method" type="hidden" value="DELETE">
	@csrf
	<button>Hapus</button>
	</form></td>
	<td><a href="{{ url('album/' . $row->album_id . '/edit') }}">Edit</a></td>
</tr>

@endforeach
</table>
<a href="{{ url('album/create') }}">Tambah Data</a>
</div>

@endsection