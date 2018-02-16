@extends('layouts.app')
@section('title', '| Welcome')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('orders.create') }}" role="button">Order Now &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">
            @foreach($orders as $order)
                <div class="col-md-4">
                    <h2>{{ $order->first_name }} {{ $order->last_name }}</h2>
                    <p>{{ substr(strip_tags($order->details), 0, 200) }} {{ strlen(strip_tags($order->details)) > 200 ? "..." : "" }}</p>
                    <p><a class="btn btn-default" href="{{ route('orders.show', $order->id) }}" role="button">View order &raquo;</a></p>
                </div>
            @endforeach
        </div>
        <hr>
    </div> <!-- /container -->

@endsection