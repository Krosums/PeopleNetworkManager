<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ninja network</title>

            @vite('resources/css/app.css')

</head>
<body class = "text-center px-8 py-12">
    <h1>Welcome!</h1>
    <p>Click the button below to view the list of all people</p>

    <a href="/people" class="btn">
        Find people
    </a>

    
</body>
</html>