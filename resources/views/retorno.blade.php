<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,
initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Novo Welcome</title>
</head>
<body>
    <h1>Teste index Hospede</h1>
    <h2>foreach</h2>
    @foreach ($hospedes as $hospede)
        {{$hospede->nome}} - {{$hospede->cpf}}<br>

    @endforeach
    <h2>forelse</h2>
    @forelse ($hospedes as $hospede)
        {{$hospede->nome}} - {{$hospede->cpf}}<br>
    @empty
        <p>não existem hospedes</p>
        @endforelse
        
</body>
</html>