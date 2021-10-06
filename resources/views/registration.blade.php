@extends('head')

@section('registration')
    <body class="login-page">
    <main>
        <div class="login-block">
            <h1>Давайте познакомимся</h1>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                    <input type="text" id="name" class="form-control" placeholder="Ваше имя">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                    <input type="text" id="email" class="form-control" placeholder="Email">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                    <input type="text" id="phone" class="form-control" placeholder="Номер телефона">
                </div>
            </div>
            <br>
            <div class="form-group">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                    <input type="password" id="password" class="form-control" placeholder="Ваш пароль">
                </div>
            </div>
            <br>
            <div class="form-check">
                <label class="form-check-label" for="flexCheckDefault">
                    Подписаться на обновления?
                </label>
            </div>
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <div>
            <input class="btn btn-primary btn-block" type="submit" id="submit" value="ЗАРЕГИСТРИРОВАТЬСЯ">
            </div>
        </div>

        <div class="login-links">
            <p class="text-center">Есть аккаунт? <a class="txt-brand" href="/"><font color=#29aafe>Войти</font></a></p>
        </div>
    </main>

    </body>
@endsection
