<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5 text-center">
        <h1 class="mb-4">{{ $title }}</h1>
        <div class="d-flex justify-content-around">
            <div>
                <h2 class="mb-4">Elenco animali:</h2>
                <ul>
                    @foreach ($animals as $animal )
                    <li>{{ $animal }}</li>
                    @endforeach
                </ul>
            </div>

            <div>
                @if (!empty($cars))
                <h2>Elenco macchine</h2>
                <ul>
                    @foreach ($cars as $car)
                    <li>{{ $car }}</li>
                    @endforeach
                </ul>
                @else
                <h2>Nessuna macchina in elenco</h2>
                @endif
            </div>
        </div>
    </div>
</body>

</html>