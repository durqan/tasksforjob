@extends ('head')

@section('authorizate')
    <body class="login-page">
    <main>
        <div class="login-block">
            <h1>Введите свои данные</h1>
            <form action="/authorizate" method="get">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user ti-user"></i></span>
                        <input type="text" class="form-control" name="email" placeholder="Ваш логин">
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock ti-unlock"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Ваш пароль">
                    </div>
                </div>
                <input class="btn btn-primary btn-block" type="submit" value="ВОЙТИ НА САЙТ">
                <br>
                @if($authorizate == 1)
                    <a href="/personal_page"><input class="btn btn-primary btn-block" value="В ЛИЧНЫЙ КАБИНЕТ"></a>
                @endif
            </form>
        </div>

        <div class="login-links">
            <p class="text-center">Еще нету аккаунта? <a class="txt-brand" href="/sign_up"><font color=#29aafe>Регистрируйся</font></a>
            </p>
        </div>

    </main>

    </body>
@endsection
