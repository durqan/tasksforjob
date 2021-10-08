@extends('head')

@section('content')
    <main>
        <div class="login-block">
            <h1>Сообщения</h1>
            <br>
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#Unread"
                        aria-expanded="false" aria-controls="collapseExample">
                    Непрочитанные сообщения
                </button>
                <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#Read" role="button"
                        aria-expanded="false"
                        aria-controls="collapseExample">
                    Прочитанные сообщения
                </button>
            </p>
            @if($read && $read->count())
                @foreach($read as $key => $value)
                    <div class="collapse" id="Read" style="width: 20%;">
                        <a href="/message/{{$value->id}}">
                            <div class="card card-body">
                                <span>{{$value->head}}</span>
                                <span>{{$value->section->name}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="collapse" id="Read">
                    <div class="card card-body">
                        <span>Нет сообщений</span>
                    </div>
                </div>
            @endif
            @if($unread && $unread->count())
                @foreach($unread as $key => $value)
                    <div class="collapse" id="Unread" style="width: 20%;">
                        <a href="/message/{{$value->id}}">
                            <div class="card card-body">
                                <span>{{$value->head}}</span>
                                <span>{{$value->section->name}}</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            @else
                <div class="collapse" id="Unread">
                    <div class="card card-body">
                        <span>Нет сообщений</span>
                    </div>
                </div>
            @endif
            <br>
            <a href="/post_add"><input class="btn btn-primary btn-block" value="НАПИСАТЬ СООБЩЕНИЕ" style="width: 20%"></a>
            <br>
            <a href="/personal_page"><input class="btn btn-primary btn-block" value="В ЛИЧНЫЙ КАБИНЕТ"></a>
            <br>
            <a href="/"><input class="btn btn-primary btn-block" value="НА ГЛАВНУЮ"></a>
        </div>
    </main>
@endsection
