@extends('layout.app')

@section('content')
    @forelse ($trains as $train)
        <h4>{{ $train->agency }}</h4>
    @empty
        <h2>Sorry, i havan't ticket!! 😭😭😭</h2>
    @endforelse
@endsection
