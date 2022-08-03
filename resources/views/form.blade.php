@extends('layouts.app')

@section('content')
    <app :user-id="{{ Auth::user()->id }}"></app>
@endsection
