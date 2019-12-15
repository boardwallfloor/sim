@extends('adminlte::page')

@section('title', 'Test Input Page')

@section('content_header')
    <h1 class="m-0 text-dark">Test Input Page</h1>
@stop

@section('content')
<form method="POST" action="{{route('mahasiswa.store')}}">
	@csrf
	 <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">NIU:</label>
            <div class="col-md-2">
                <input id="niu" type="text" class="form-control" name="niu">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">NIF</label>
            <div class="col-md-2">
                <input id="nif" type="text" class="form-control" name="nif">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Nama</label>
            <div class="col-md-2">
                <input id="nama" type="text" class="form-control" name="nama">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Angkatan</label>
            <div class="col-md-2">
                <input id="angkata" type="text" class="form-control" name="angkatan">
            </div>
        </div>
        <div class="form-group row">
            <label for="country" class="col-md-4 col-form-label text-md-right">Bank</label>
            <div class="col-md-2">
                <input id="angkata" type="text" class="form-control" name="bank">
            </div>
        </div>
      <div class=" form-group row">
          <div class="col-md-4"></div>
          <div class="col-md-2">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
</form>
@stop
