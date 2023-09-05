<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://kit.fontawesome.com/99b07ad12a.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    @vite(['resources/sass/dashboard.scss'])
</head>
<body style="background-color: rgba(0,0,0,.2) !important;">
    
    <div class="dashboard">
        <menu>
            <div class="options">
                <h4>Cukamonga Site</h4>
                <a href="javascript:void(0);" style="right: 40px;" title="Notificações"><i class="fa-solid fa-bell"></i></a>
                <a href="{{ route('dashboard-logout') }}" title="Sair"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
            <div class="foto">
                <img src="/img/users/caiomoizes.png" alt="" />
            </div>
            <h3>Caio Moizés Santos</h3>
            <ul>
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="/dashboard/usuarios">Usuários</a></li>
            </ul>
        </menu>
    </div>

</body>
</html>