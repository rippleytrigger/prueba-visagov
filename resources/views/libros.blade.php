@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Libros</h1>
            <a href="{{ route('libros.create') }}" class="btn btn-primary">Crear</button>
    </div>
</div>
@endsection
