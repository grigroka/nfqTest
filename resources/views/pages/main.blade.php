@extends('layouts.app')
@section('title', '| Welcome')

@section('content')

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Welcome to companyX</h1>
            <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. In eleifend dolor vitae dapibus dictum. Proin enim arcu, ornare at consequat eget, pulvinar et est. Ut laoreet rhoncus diam, a aliquam felis iaculis at. Nam ac orci nec metus viverra iaculis sollicitudin eu diam. Ut eu nisl lacinia, rutrum nisl id, porta felis. Etiam rutrum tortor malesuada, suscipit libero eu, cursus ante. Aliquam aliquam quam a turpis viverra, eget laoreet lacus mollis. Vivamus dapibus accumsan felis convallis convallis.</p>
            <p><a class="btn btn-primary btn-lg" href="{{ route('orders.create') }}" role="button">Order Now &raquo;</a></p>
        </div>
    </div>

    <div class="container">
        <h2>Latest orders by:</h2>
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