<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="mt-5 text-center">
                @if(isset($number))
                <label for="">Numero generado: {{ $number }}</label>
                @else
                <label for="">Genere un nuevo numero</label>
                @endif
                <div class="mt-4">
                    <a href="{{ route('generate.number') }}" class="btn btn-primary">
                    Generar Numero
                    </a>
                </div>
                <div class="mt-4">
                    <form action="{{ route('show.numbers') }} " method="POST">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary"> Ver numeros</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
