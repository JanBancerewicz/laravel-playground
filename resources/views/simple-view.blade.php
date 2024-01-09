@extends('layouts.app')

@section('title', 'Testowy blade')

@section('content')
    <h1>Witaj, {{$name}}</h1>
    <p>Twoj numer: {{$number}}</p>
    
    @if($number %2==0)
         <p>Numer parzysty</p>
    @else
        <p>Numer nieparzysty</p>
    @endif
       
@endsection
