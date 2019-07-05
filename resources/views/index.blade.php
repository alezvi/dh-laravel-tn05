<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @include('partials.navbar')

    @for($i = 0; $i < 10; $i++)

        <p>{{ $i }}</p>

    @endfor

    @if (date('d') == 2)

        <p>Hoy es dia 2 de Julio</p>

    @endif

</body>
</html>