@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div>
    	<tr>
    		<th>niu</th>
    		<th>nif</th>
    		<th>nama</th>
    		<th>no telp</th>
    		<th>email</th>
    		<th>alamat</th>
    		<th>angkatan</th>
    		<th>no rek</th>
    		<th>nama pemilik rek</th>
    		<th>bank</th>
    	</tr>
    	@foreach ($data as $data)
    	<tr>
    		<td>{{$data->nama}}</td>
    	</tr>
    	@endforeach
    </div>
@stop
