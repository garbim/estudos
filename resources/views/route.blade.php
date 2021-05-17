@extends('layouts.app', ['title' => $title, 'action' => 'route'])

@section('content')

<h1>{{ $name }}</h1>

<div>
    <div class="row">
        @foreach($dias as $dia)
        <div class="col-md-1 border rounded-circle px-2 primary">{{$dia}}</div>
        @endforeach
    </div>
</div>



@endsection