<?php

require "insert.php";

ini_set('soap.wsdl_cache_enabled', '0');

function InsertNewClient(
	$name,
	$email,
	$pass,
	$office,
	$salary,
	$CPF,
	$RG,
	$assignments,
	$startDate,
	$birthDate
)
{
	$response = greetings($name, $email, $pass, $office, $salary, $CPF, $RG, $assignments, $startDate, $birthDate);
	return ($response);
}

// initialize SOAP Server
$server = new SoapServer('client.wsdl');

// register available function
$server->addFunction('InsertNewClient');
// start handling requests
$server->handle();

?>