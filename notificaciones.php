<?php
  
  require __DIR__ .  '/vendor/autoload.php';
   
  MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
  
  switch($_POST["type"]) {
        case "payment":
            $payment = MercadoPago\Payment::find_by_id($_POST["id"]);
            header('Content-Type: application/json');
            echo json_encode(['HTTP/1.1 200 OK'], 200);
            file_put_contents('cliente.json',json_encode($_POST));
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
            case "test":
                header('Content-Type: application/json');
                echo json_encode(['HTTP/1.1 200 OK'], 200);
                file_put_contents('cliente.json',json_encode($_POST));
                break;
            break;
    }

?>