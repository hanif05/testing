@extends('layouts/app')

@section('content')

	<table class="table table-striped" >
		
		<tr>
			<th>No</th>
			<th>Kode</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Nomer Hp</th>
			<th>Alamat</th>
		</tr>
		<?php $i= 0; ?>
		@foreach ($data_p as $data)
		<?php $i++?>
		<tr>
			<td>{{ $i }}</td>
			<td>{{ $data->id_pegawai }}</td>
			<td>{{ $data->nama }}</td>
			<td>{{ $data->jk }}</td>
			<td>{{ $data->no_hp }}</td>
			<td>{{ $data->alamat }}</td>
			
		</tr>	
		@endforeach
	</table>
	


@stop