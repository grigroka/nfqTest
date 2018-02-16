@extends('layouts.app')
@section('title', '| New Order')

@section('stylesheets')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'#details',
            plugins: [
                'advlist lists charmap print preview anchor textcolor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime table contextmenu paste code help wordcount'
            ],
            toolbar: 'undo redo | bold italic forecolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
            content_css: [
                '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                '//www.tinymce.com/css/codepen.min.css'],
            menubar: false
        });</script>
@endsection

@section('content')

    <div class="row">
        <div class="container-fluid col-md-offset-3 col-md-6">
            <h1>Place a new order</h1>
            <hr>
            <form action="{{ route('orders.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                    <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="details">Details:</label>
                    <textarea id="details" name="details" class="form-control" rows="7">{!! old('details') !!}</textarea>
                </div>
                <input type="submit" value="Place Order" class="btn btn-success btn-block">
            </form>
        </div>
    </div>

@endsection