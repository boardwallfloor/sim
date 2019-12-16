@extends('adminlte::page')
@section('title', 'Test Export Page')

@section('content_header')
    <h1 class="m-0 text-dark">Test Export Page</h1>
@stop

<div class="container">

    <div class="card bg-light mt-3">


        <div class="card-body">

            <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">

                @csrf

                <input type="file" name="file" class="form-control">

                <br>

                <button class="btn btn-success">Import User Data</button>

                <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>

            </form>

        </div>

    </div>

</div>

   

</body>

</html>