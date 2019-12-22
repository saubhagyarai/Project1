@extends('layouts.app')

@section('content')
<H1>{{$title}}</H1>
{{-- title is key --}}

@if(count($services) > 0)
{{-- services is key --}}
<ul class="list-group">
    @foreach($services as $service)
    <li class="list-group-item"> {{$service}} </li>
    @endforeach
</ul>
@endif

@endsection