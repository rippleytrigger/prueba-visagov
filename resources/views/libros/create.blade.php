@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Libros</h1>
            <form  method="post" action="{{ route('libros.store') }}" novalidate>
            @csrf
            <div class="form-group mb-2">
                <label>Título</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="title" id="title">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>Autor</label>
                <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author">
                @error('author')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-grid mt-3">
              <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
            </div>
        </form>
    </div>
</div>
@endsection
