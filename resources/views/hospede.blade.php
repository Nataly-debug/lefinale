<!DOCTYPE html>

<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>teste crud</title>
</head>

<body>
<body>
	<h1>Hospedes</h1>

	<h2>
	@foreach ($hospedes as $hospede)
		{{$hospede->nome}} - {{$hospede->senha}} - {{$hospede->cpf}} - {{$hospede->num_telefone}} - {{$hospede->pergunta_chave}}<br>


	</h2>
	@endforeach

	<h2>
	@forelse ($hospedes as $hospede)
		{{$hospede->nome}} - {{$hospede->senha}} - {{$hospede->cpf}} - {{$hospede->num_telefone}} - {{$hospede->pergunta_chave}}<br>	
	@empty		
		<p>Não há hóspedes!</p>
	@endforelse

	</h2>
</body>
</body>

</html>