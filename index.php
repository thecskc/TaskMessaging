<?php
/**
 * Created by PhpStorm.
 * User: santh
 * Date: 5/8/2017
 * Time: 7:18 PM
 */

header("content-type: text/xml");
require_once "vendor/autoload.php";
require_once "ParseInitialize.php";
use Twilio\Twiml;

$pUser = new ParseInitialize();

$body = $POST['Body'];

$array = explode(',',$body);

$email = $array[0];
$password = $array[1];


$messageSend = $pUser->retrieveTasks($email,$password);



$response = new Twiml();

$response->message($messageSend);

print($response);


$pUser->logout();








/*

$response = new Twiml();
$response->message("Hello World");
print $response;


*/






?>