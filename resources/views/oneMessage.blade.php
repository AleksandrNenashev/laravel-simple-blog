@extends('layouts.layout')

@section('title'){{ $data->theme }}@endsection

@section('content')
        <div class="alert alert-info">
            <h1>{{ $data->theme }}</h1>
            <p><small>{{ $data->created_at }}</small></p>
            <p>{{ $data->name }} - {{ $data->email }}</p>
            <p>{{ $data->message }}</p>
            <a href="{{ route('contact-updateform', $data->id) }}"><button class="btn btn-warning">Редактировать</button></a>
            <a href="{{ route('contact-delete', $data->id) }}"><button class="btn btn-danger">Удалить</button></a>
        </div>
@endsection
