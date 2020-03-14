<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('css/app.css')  }}">
    <title>Cadastro de Produtos</title>
</head>
<body>

    <div class="container">
        <main role="main">
            @component('components.navbar')
            @endcomponent
            @hasSection('body') <!--if especial-->
                @yield('body')
            @endif <!--termina aqui-->
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}" type="text/java"></script>
</body>
</html>