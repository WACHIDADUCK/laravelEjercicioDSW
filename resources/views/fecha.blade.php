<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Fecha Actual</h1>
    <p>Hoy es: {{ $dia }} / {{ $mes }} / {{ $ano }}</p>

    <h1>Con compact()</h1>
    <p>Hoy es:{{ $diaCompact }} / {{ $mesCompact }} / {{ $anoCompact }}</p>

    <h1>Con with()</h1>
    <p>Hoy es:{{ $diaWith }} / {{ $mesWith }} / {{ $anoWith }}</p>
</body>

</html>