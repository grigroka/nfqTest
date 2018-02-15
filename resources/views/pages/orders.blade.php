@extends('layouts.app')
@section('title', '| Orders')

@section('content')

    <table class="table table-bordered">
        <tr>
            <th width="80px">@sortablelink('id')</th>
            <th>@sortablelink('first_name')</th>
            <th>@sortablelink('last_name')</th>
            <th>@sortablelink('email')</th>
            <th>@sortablelink('details')</th>
            <th>@sortablelink('created_at')</th>
        </tr>

        @if($orders->count())
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->first_name }}</td>
                    <td>{{ $order->last_name }}</td>
                    <td>{{ $order->email }}</td>
                    <td>{{ $order->details }}</td>
                    <td>{{ $order->created_at->format('d-m-Y') }}</td>
                </tr>
            @endforeach
        @endif

    </table>

    {!! $orders->appends(\Request::except('page'))->render() !!}

@endsection
