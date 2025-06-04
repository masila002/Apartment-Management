<?php

use Infobip\Configuration;
use Infobip\Api\SmsApi;
use Infobip\Model\SmsDestination;
use Infobip\Model\SmsTextualMessage;
use Infobip\Model\SmsAdvancedTextualRequest;

require __DIR__ . "/vendor/autoload.php";

$message = $_POST["message"];
$phoneNumber = $_POST["phoneNumber"];






$apiURL = "xxxxxx";
$apiKey = "xxxxxxxxxxxxxxxxxxx";

$configuration = new Configuration(host: $apiURL, apiKey:$apiKey);
$api = new SmsApi(config: $configuration);

$destination = new SmsDestination(to: $phoneNumber);

$theMessage = new SmsTextualMessage(
	destinations: [$destination],
	text: $message,
	from: "meshack omwoyo"
);

$request = new SmsAdvancedTextualRequest(messages: [$theMessage]);
$response = $api->sendSmsMessage($request);

echo 'message sent'






?>







