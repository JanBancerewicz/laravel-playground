@extends('layouts.app')

@section('title', 'Testowanie formularza')

@section('content')
<h1>Fill out the form</h1>

<form action="{{route('test.store')}}" method="post">
    <div class="mb-3">
        <label for="user" class="form-label">Username</label>
        <input type="email" class="form-control" id="username" name="email" value="{{old('email')}}">
        @error('email')
            <span>
                {{$message}}
            </span>
        @enderror
        
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
        @error('password')
            <span>
                {{$message}}
            </span>
        @enderror
    </div>
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
    
</form>

<a href="{{route('index')}}">Main page</a><br/>
<a href="{{url()->previous()}}">Previous page</a>


@endsection