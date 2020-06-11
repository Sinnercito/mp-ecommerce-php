<?php

    MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');

    switch($_POST["type"]) {
        case "payment":
            
            $payment = MercadoPago\Payment.find_by_id($_POST["id"]);
            http_response_code(200);
            $json_string = json_encode($payment); 
            $file = 'pago.json';
            file_put_contents($file, $json_string);
            echo("entro lo q podia");
            break;
        case "plan":
            $plan = MercadoPago\Plan.find_by_id($_POST["id"]);
            break;
        case "subscription":
            $plan = MercadoPago\Subscription.find_by_id($_POST["id"]);
            break;
        case "invoice":
            $plan = MercadoPago\Invoice.find_by_id($_POST["id"]);
            break;
    }

?>