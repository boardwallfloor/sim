@extends('adminlte::page')

@section('title', 'Test Page')

@section('content_header')
    <h1 class="m-0 text-dark">Test Page</h1>
@stop

@section('content')
    <div>
    	<table>
    	<tr>
            <th>No</th>
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
            <th>action</th>
    	</tr>
    	@foreach ($mahasiswa as $mahasiswa)
    	<tr>
            <td>{{++$i}}</td>
    		<td>{{$mahasiswa->niu}}</td>
    		<td>{{$mahasiswa->nif}}</td>
    		<td>{{$mahasiswa->nama}}</td>
    		<td>{{$mahasiswa->no_telp}}</td>
    		<td>{{$mahasiswa->email}}</td>
    		<td>{{$mahasiswa->alamat}}</td>
    		<td>{{$mahasiswa->angkatan}}</td>
    		<td>{{$mahasiswa->no_rek}}</td>
    		<td>{{$mahasiswa->nama_pemilik_rek}}</td>
    		<td>{{$mahasiswa->bank}}</td>
            <td> 
                <form action="{{route ('mahasiswa.destroy', $mahasiswa->id)}}" method="POST">
                    <a class="btn btn-primary" href="{{route('mahasiswa.edit',$mahasiswa->id)}}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
    	</tr>
    	@endforeach
</table>
    </div>
@stop
