@extends('template.app')

@section('title')
    Login
@endsection

@section('heading-title')
    Login
@endsection

@section('paragraph-content')
<form action="{{route('login.submit')}}" method="post">
    @csrf
        <div>
            <input type="text" name="username" placeholder="username">
            <input type="password" name="password" placeholder="password">
            <button>Submit</button>
        </div>
    </form>
@endsection