@extends('layouts.app')

@section('countent')
    <h1>Wantランキング</h1>
    @include('items.items', ['items' => $items])
@endsection