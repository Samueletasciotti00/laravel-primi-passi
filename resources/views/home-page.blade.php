<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel</title>
</head>
<body>
    
    <!-- Print Hello Word -->
    <h1 style=""> {{ $titol }} </h1>

    <!-- Print delle info -->
    <h2 style="">Lista info</h2>

    <!-- List -->

    <!-- IF/Else Condition -->
    @if (isset($info))
    <ul style="list-style: none; margin: 40px;">
        @foreach ($info as $inf)
            <li> {{ $inf }} </li>
        @endforeach
    </ul>
    @else
    <h3>Non ci sono info</h3>
    @endif
    
</body>
</html>