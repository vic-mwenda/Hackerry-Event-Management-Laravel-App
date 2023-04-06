@extends('layouts.app')

@section('content')

<h1 class="d-flex justify-content-center">
    {{$event->name}}
</h1>
<p>
    City:{{$event->city}} <br>
    Venue:{{$event->venue}}
</p>
<h2 class="d-flex justify-content-center">
    Description
</h2>
<p>
    {{ $event->description }}
</p>

@endsection
