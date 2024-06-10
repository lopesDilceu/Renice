<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Renice - @yield('title')</title>
    <style>
        footer{
            position: fixed;
            text-align: center;
            line-height: 50px;
            height: 50px;
            bottom: 0;
            width: 100%;
            background-color: #333;
            color: #fff;
        }
    </style>
    @stack('style')
</head>

<body>
    
    <div class="container">
        @yield('content')
    </div>
    <footer>
        Desenvolvido por <a href="https://github.com/lopesDilceu">Dilceu Lopes</a>&copy;
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    @stack('script')
</body>

</html>