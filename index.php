<?php
$client = new SoapClient('http://localhost/PDWA5/client.wsdl');

try {
	$response = $client->GetClients();

	echo 'Resposta..: ' . $response;
} catch (SoapFault $sf) {
	//echo $sf;
	echo 'Error..: ' . $sf->getMessage();
}
?>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PDWA5 - Atividade</title>
	<link rel="stylesheet" href="styles.css">
</head>

<body>
	<header>Bem vindo!!!! Aqui estão os dados dos nossos colaboradores.</header>
	<main>
		<table>
			<tr>
				<th></th>
				<th>ID</th>
				<th>Email</th>
				<th>Trabalho</th>
				<th>Salário</th>
				<th>CPF</th>
				<th>RG</th>
				<th>Atribuições</td>
				<th>Nome</th>
				<th>Data de início</th>
				<th>Data de aniversário</th>
				<th>L
				<th>
			</tr>
			<tr>
				<td>Nome</td>
				<td>ID</td>
				<td>Email</td>
				<td>Trabalho</td>
				<td>Salário</td>
				<td>CPF</td>
				<td>RG</td>
				<td>Atribuições</td>
				<td>Nome</td>
				<td>Data de início</td>
				<td>Data de aniversário</td>
				<td>L
				<td>
			</tr>
		</table>
	</main>
</body>

</html>