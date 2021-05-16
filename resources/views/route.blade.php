@extends('layouts.app', ['title' => $title, 'action' => 'route'])

@section('content')

<h1>{{ $name }}</h1>

<div>
    <div class="row">
        @foreach($dias as $dia)
        <span class="col-md-1 border rounded-circle ml-1 px-2 primary">{{$dia}}</span>
        @endforeach
    </div>
</div>


@endsection