<?php

class Service{
	public function sayHello(string $name): string
	{
		return 'Hello'.$name;
	}
}
try{
	$server = new SoapServer('wsdl.xml');
	$server->serClass('Service');
	$server->handle();
}catch(SoapFault $e){
	die($e->getMessage().PHP_E0L);
}

?>