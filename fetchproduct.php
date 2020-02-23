<?php
function FetchProduct($barCode){
	//ini_set('display_errors', 'On');
	//error_reporting (E_ALL);

	$service_port = numero da porta;
	$address = ip;

	$socket = socket_create (AF_INET, SOCK_STREAM, 0);
	if ($socket < 0) {
		echo "socket_create() failed: reason: " . socket_strerror (socket_last_error()) . "\n";
	} else {
	
	}

	$result = socket_connect ($socket, $address, $service_port);
	if ($result < 0) {
		echo "socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)) . "\n";
	} else {
	
	}

	$in = "<xml><barra>".$barCode."</barra></xml>";
	$out = '';

	socket_write ($socket, iconv('UTF-8', 'CP1252',$in."\r\n"), strlen ($in."\r\n"));

	socket_set_block($socket);
	$out = socket_read ($socket, 2048);
	//echo 'Retorno do socket remoto: "',htmlentities($out),'".';

	socket_close ($socket);

	return $out;

}