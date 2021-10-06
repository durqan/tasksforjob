@extends('head')

@section('post_add')
    <body class="login-page">
    <main>
        <div class="login-block">
            <h1>Сообщение</h1>
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <input type="text" name="head" class="form-control" placeholder="Заголовок">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <textarea class="form-control" name="body" placeholder="Текст сообщения"></textarea>
                    </div>
                </div>
                <br>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Выберите пользователя</option>
                    @foreach($users as $user => $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
            </form>
        </div>
    </main>
    </body>
@endsection
