<?php
    $sessionId = $_POST['sessionId'];
    $phoneNumber = $_POST['phoneNumber'];
    $serviceCode = $_POST['serviceCode'];
    $text = $_POST['text'];

    if($text == ""){
        $response = "CON Welcome to Child Right Int. USSD portal.\n";
        $response .= "1. Report an abuse.\n";
        $response .= "2. Cancel\n";
    }
    elseif($text == "1"){
        $response = "CON I am a: \n";
        $response .= "1. Victim\n";
        $response .= "2. Witness\n";
    }
    elseif($text == "2"){
        $response =  "END See Something?\n Say Something!!\n";
        $response .= "We are here to protect you!\n";
    }
    elseif($text == "1*1" || $text = "1*2"){
        $response = "CON Abuse type: \n";
        $response .= "1. Rape\n";
        $response .= "2. Physical Abuse\n";
        $response .= "3. Medical\n";
        $response .= "4. Child Neglect\n";
        $response .= "5. Online\n";
    }
    elseif($text == "1*1*1" || $text = "1*2*1" || $text == "1*1*2" || $text = "1*2*2"||$text == "1*1*3" || $text = "1*2*3"||$text == "1*1*4" || $text = "1*2*4"||$text == "1*1*5" || $text = "1*2*5"){
        $response = "END Thank you for reporting...\n";
        $response .= "Please keep the number $phoneNumber on.\n";
        $response .= "Our Child Protection Officer will call you shortly.\n";
    }
    
    header('Content-type: text/plain');
    echo $response;
?>
