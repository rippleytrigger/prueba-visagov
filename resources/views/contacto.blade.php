@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ __('contacto.header')}}</h1>

            <form  method="post" action="{{ route('contacto.send') }}" novalidate>
            @csrf
            <div class="form-group mb-2">
                <label>Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group mb-2">
                <label>{{ __('contacto.message')}}</label>
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message">
                </textarea>
                
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-grid mt-3">
              <input type="submit" name="send" value="{{ __('contacto.send')}}" class="btn btn-dark btn-block">
            </div>

            @if(Session::has('success'))
            <div class="alert alert-success text-center mt-5">
                {{Session::get('success')}}
            </div>
        @endif 
        </form>
    </div>
</div>
@endsection
