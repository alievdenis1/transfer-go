@extends('layouts.app')

@section('content')
    <step4 class="mt-5" :user-id="{{ Auth::user()->id }}" :order-id="{{ $order_id }}"></step4>
@endsection
