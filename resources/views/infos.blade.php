@extends('layouts.app')

@section('content')

    @if(isset($name) and !empty($name))

        Hello, {{ $name }}.

    @endif



    {!! Form::open(['url' => 'compte']) !!}
    {!! Form::label('nom', 'Entrez votre nom : ') !!}
    {!! Form::text('nom') !!}
    {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
@endsection