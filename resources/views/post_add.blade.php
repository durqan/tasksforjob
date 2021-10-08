@extends('head')

@section('content')
    <main>
        <div class="login-block">
            <h1>Сообщение</h1>
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <input type="text" id="head" class="form-control" placeholder="Заголовок">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <textarea class="form-control" id="body" placeholder="Текст сообщения"></textarea>
                    </div>
                </div>
                <br>
                <select class="form-select" id="recipient_id" aria-label="Default select example">
                    <option selected>Выберите пользователя</option>
                    @foreach($users as $user => $value)
                        <option data-id="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
                <br>
                <select class="form-select" id="section" aria-label="Default select example">
                    <option selected>Выберите раздел</option>
                    @foreach($sections as $section => $value)
                        <option data-id="{{$value->id}}"
                                style="color: {{$value->color->name}}">{{$value->name}}</option>
                    @endforeach
                </select>
                <br>
                <div class="btn btn-success" id="send_message" style="width: 20%">Отправить</div>
                <br>
                <a href="/personal_page"><input class="btn btn-primary btn-block" value="В ЛИЧНЫЙ КАБИНЕТ"></a>
                <br>
                <a href="/"><input class="btn btn-primary btn-block" value="НА ГЛАВНУЮ"></a>
            </form>
        </div>
    </main>
@endsection
