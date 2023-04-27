<!DOCTYPE html>
<html>
<head>
    <title>Animal Facts</title>
</head>
<body>
    <h1>Animal Facts</h1>
    <ul>
        @foreach($animals as $animal)
            <li>{{ $animal->name }} ({{ $animal->type }}) - {{ $animal->fact }}</li>
        @endforeach
    </ul>
    <a href="/animals/create">Add a new animal</a>
</body>
</html>
