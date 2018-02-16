@extends('layouts.app')
@section('title', '| New Order')

@section('stylesheets')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'#details',
            plugins: 'link',
            menubar: false
        });</script>
@endsection

@section('content')

    <div class="row">
        <div class="col-md-offset-3 col-md-6">
            <h1>Place a new order</h1>
            <hr>
            <form action="{{ route('orders.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First name:</label>
                    <input id="first_name" name="first_name" type="text"  class="form-control">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input id="last_name" name="last_name" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" class="form-control">
                </div>
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea id="details" name="details" class="form-control" rows="7"></textarea>
                </div>
                <input type="submit" value="Place Order" class="btn btn-success btn-block">
            </form>
        </div>
    </div>

@endsection