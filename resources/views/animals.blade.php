<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">

        <!-- navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary mb-4">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link active" aria-current="page" href="/animals">Animali</a>
                        <a class="nav-link" href="/cars">Macchine</a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- navbar fin -->
        <div>
            <h2 class="mb-4">Elenco animali:</h2>
            <ul>
                @foreach ($animals as $animal )
                <li>{{ $animal }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</body>

</html>