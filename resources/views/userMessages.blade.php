@extends('layouts.layout')

@section('title')Ваши обращения@endsection

@section('content')
    @foreach ($data as $each)
        <div class="alert alert-info">
            <h5>{{ $each->theme }}</h5>
            <p><small>{{ $each->created_at }}</small></p>
            <p>{{ $each->name }}</p>
            <p>{{ $each->email }}</p>
            <a href="{{ route('contact-onemessage', $each->id) }}"><button class="btn btn-warning">Открыть</button></a>
        </div>
    @endforeach
@endsection
