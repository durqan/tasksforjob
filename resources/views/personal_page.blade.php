@extends('head')

@section('personal_page')
    <body class="login-page">
    <main>
        <div class="login-block">
            <h1>Ваши данные</h1>
            <div class="form-group">
                <div class="input-group">
                    <span>Ваше имя: </span>
                    <span>{{$auth_user['name']}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Группа: </span>
                    @foreach($auth_user->group as $key => $value)
                        <span>{{$value->name}}</span>
                    @endforeach
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Ваш email: </span>
                    <span>{{$auth_user['email']}}</span>
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span>Ваш телефон: </span>
                    <span>{{$auth_user['phone']}}</span>
                </div>
            </div>
            <br>
            <a href="/posts"><input class="btn btn-primary btn-block" value="СООБЩЕНИЯ"></a>
            <br>
            <a href="/"><input class="btn btn-primary btn-block" value="НА ГЛАВНУЮ"></a>
        </div>
    </main>
    </body>
@endsection
