<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel</title>
</head>
<body>
    
    <!-- Print Hello Word -->
    <h1 style="text-align: center; margin: 40px;"> {{ $titol }} </h1>

    <!-- Print delle info -->
    <h2 style="text-align: center; margin: 40px;">Lista info</h2>

    <!-- List -->
    <ul>
        @foreach ($info as $inf)
            <li> {{ inf }} </li>
        @endforeach
    </ul>
</body>
</html>