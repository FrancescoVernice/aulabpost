<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Abbiamo ricevuto una richiesta</h1>
    <h4>Richiesta per il ruoli di {{$info['role']}}</h4>
    <p>Ricevuta da {{$info['email']}}</p>

    <h4>Messaggio:</h4>
    <p>{{$info['message']}}</p>
</body>
</html>