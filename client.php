<?php

echo 'Create and Consume SOAP Service using PHP';
echo nl2br("\n\n");

$client = new SoapClient('http://localhost/PDWA5/client.wsdl');

$name = "teste";
$email = "teste";
$password = "teste";
$office = "teste";
$salary = 500;
$CPF = 524315;
$RG = 252142;
$assignments = "teste";
$startDate = "2002-09-24";
$birthDate = "2002-09-24";

try {
	$response = $client->InsertNewClient($name, $email, $password, $office, $salary, $CPF, $RG, $assignments, $startDate, $birthDate);

	echo 'Resposta..: ' . $response;
} catch (SoapFault $sf) {
	//echo $sf;
	echo 'Error..: ' . $sf->getMessage();
}
?>