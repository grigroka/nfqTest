@extends('layouts.app')
<?php $titleTag = htmlspecialchars($order->first_name); ?>
@section('title', "| $titleTag Order")

@section('content')

    <div class="row">
        <div class="container-fluid col-md-8 col-md-offset-2">
            <h4>{{ $order->first_name }} {{ $order->last_name }}</h4>
            <small>{{ $order->email }}</small>
            <div></div>
            <small>{{ date('F jS, Y - G:i' ,strtotime($order->created_at)) }}</small>
            <hr>
            <p>{!! $order->details !!}</p>
        </div>
    </div>
    <hr>

@endsection