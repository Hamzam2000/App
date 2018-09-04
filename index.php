<?php
$mollie = new \Mollie\Api\MollieApiClient();
$mollie->setApiKey("");
$payment = $mollie->payments->create([
    "amount" => [
        "currency" => "EUR",
        "value" => "10.00" // You must send the correct number of decimals, thus we enforce the use of strings
    ],
    "description" => "My first payment",
    "redirectUrl" => "https://webshop.example.org/order/12345/",
    "webhookUrl" => "https://webshop.example.org/payments/webhook/",
    "metadata" => [
        "order_id" => "12345",
    ],
]);