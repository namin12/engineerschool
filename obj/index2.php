<?php

require_once('obj_client.php');

$client = new client();
$res = $client->get_client_information();
echo $res;



?>
