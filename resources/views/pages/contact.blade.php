@extends('layouts.app')
@section('title', '| Contact Us')

@section('stylesheets')
    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
    <script>tinymce.init({
            selector:'#message',
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
        <div class="col-md-offset-3 col-md-6">
            <h1>Contact Us</h1>
            <hr>
            <form action="{{ url('contact') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input id="email" name="email" type="text" value="{{ old('email') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="subject">Subject:</label>
                    <input id="subject" name="subject" type="text" value="{{ old('subject') }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" class="form-control"><?=htmlspecialchars(old('message'))?></textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success">
            </form>
        </div>
    </div>

@endsection