@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Libros</h1>
            <a href="{{ route('libros.create') }}" class="btn btn-primary">Crear</a>

            @if(sizeOf($books) != 0)
            <div class="row mt-5">
                <table>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('Título') }}</th>
                    <th scope="col">{{ __('Autor') }}</th>
                    <th scope="col">{{ __('Editar') }}</th>
                    <th scope="col">{{ __('Eliminar') }}</th>
                    </tr>
                </thead>
                <tbody>
                   
                @foreach ($books as $book)
                    <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td><a href="{{ route('libros.edit', $book->id) }}" class="btn btn-warning">{{ __('Actualizar') }} </a> </td>
                    <td> <form action="{{ route('libros.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                    </tr>
                @endforeach
                </tbody>
                </table>

            </div>
            @endif
            
            
            @if(Session::has('success'))
            <div class="alert alert-success text-center mt-5">
                {{Session::get('success')}}
            </div>
        @endif    
    </div>
</div>
@endsection
