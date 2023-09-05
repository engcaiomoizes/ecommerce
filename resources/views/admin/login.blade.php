<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/sass/app.scss'])
</head>
<body>

    <div class="container-login">
        <form action="{{ route('dashboard-login') }}" method="POST" class="form-login">
            @if(Session::has('success'))
            <div class="alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert-danger">{{ Session::get('fail') }}</div>
            @endif
            @csrf
            <h1>Login</h1>
            <input type="text" name="login" id="login" placeholder="Informe seu login" required>
            <span>@error('login') {{ $message }} @enderror</span>
            <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required>
            <span>@error('senha') {{ $message }} @enderror</span>
            <input type="submit" value="Entrar">
            <span>Esqueceu sua senha? <a href="#">Clique aqui</a></span>
        </form>
    </div>

</body>
</html>