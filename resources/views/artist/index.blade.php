@extends('layouts.app')

@section('content')


<div class="container">

	<h3>Daftar Artist </h3>
	<table>

		<tr>
			<td>Nama Artist</td>
			<td>Edit</td>
			<td>Hapus</td>
		</tr>

@foreach($rows as $row)

<tr>
	<td>{{ $row->artist_name }}</td>
	<td><a href="{{ url('artist/' . $row->artist_id . '/edit') }}">Edit</a></td>
	<td><form action="{{ url('artist/'.$row->artist_id ) }}" method="POST">
			<input type="hidden" name="_method" value="DELETE">
			@csrf
			<button>Hapus</button>
		</form>
	</td>
</tr>
@endforeach
</table>
<div><a href="{{ url('artist/create') }}">Tambah Data Artist</a></div>
</div>

@endsection