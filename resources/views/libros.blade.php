@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{__('libros.header') }}</h1>
            <a href="{{ route('libros.create') }}" class="btn btn-primary">{{ __('libros.create') }}</a>

            @if(sizeOf($books) != 0)
            <div class="row mt-5">
                <table>
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('libros.table.title') }}</th>
                    <th scope="col">{{ __('libros.table.author') }}</th>
                    <th scope="col">{{ __('libros.table.edit') }}</th>
                    <th scope="col">{{ __('libros.table.delete') }}</th>
                    </tr>
                </thead>
                <tbody>
                   
                @foreach ($books as $book)
                    <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author }}</td>
                    <td><a href="{{ route('libros.edit', $book->id) }}" class="btn btn-warning">{{ __('libros.buttons.edit') }} </a> </td>
                    <td> <form action="{{ route('libros.destroy', $book->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">{{ __('libros.buttons.delete') }}</button>
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
