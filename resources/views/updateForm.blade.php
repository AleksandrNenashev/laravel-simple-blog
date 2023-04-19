@extends('layouts.layout')

@section('title')Редактирование@endsection

@section('content')

<form action="{{ route('contact-update', $data->id) }}" method="post">
@csrf
<div class="form-group">
    <label for="name">Ваше имя</label>
    <input type="text" name="name" value="{{ $data->name }}" id="name" placeholder="Антон" class="form-control">
</div>
<div class="form-group">
    <label for="email">Ваш email</label>
    <input type="text" name="email" value="{{ $data->email }}" id="email" placeholder="youremail@mail.ru" class="form-control">
</div>
<div class="form-group">
    <label for="theme">Тема обращения</label>
    <input type="text" name="theme" value="{{ $data->theme }}" id="theme" placeholder="Где мой заказ?" class="form-control">
</div>
<div class="form-group">
    <label for="message">Текст сообщения</label>
    <textarea type="text" name="message" id="message"  class="form-control">{{ $data->message }}</textarea>
</div>
<button type="submit" class="mt-3 btn btn-success">Обновить</button>
</form>
@endsection
