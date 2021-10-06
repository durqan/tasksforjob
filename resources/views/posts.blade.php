@extends('head')

@section('posts')
    <body class="login-page">
    <main>
        <div class="login-block">
            <h1>Сообщения</h1>
            @foreach($user->group as $key => $value)
                @if($value->id == 6)
                    <h7>Вы сможете отправлять сообщения после прохождения модерации</h7>
                @endif
            @endforeach
            <br>
            <a href="/personal_page"><input class="btn btn-primary btn-block" value="В ЛИЧНЫЙ КАБИНЕТ"></a>
            <br>
            <a href="/"><input class="btn btn-primary btn-block" value="НА ГЛАВНУЮ"></a>
        </div>
    </main>
    </body>
@endsection
