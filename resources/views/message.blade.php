@extends('head')

@section('content')
    <main>
        <div class="login-block">
            <h1>Сообщение</h1>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Заголовок: </span>
                    <span>{{$message->head}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Дата отправки: </span>
                    <span>{{$message['date_time']}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Кто отправил: </span>
                    <span>{{$message->sender->name}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Email отправителя: </span>
                    <span>{{$message->sender->email}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Текст сообщения: </span>
                    <span>{{$message->body}}</span>
                </div>
            </div>
            <br>
            <a href="/posts"><input class="btn btn-primary btn-block" value="СООБЩЕНИЯ"></a>
            <br>
            <a href="/"><input class="btn btn-primary btn-block" value="НА ГЛАВНУЮ"></a>
        </div>
    </main>
@endsection

