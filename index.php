<?php

// Include the Menu class
include_once 'Menu.php';

// Check if all required parameters are set in $_GET array

    // Extract the values
    $sessionId = $_POST['sessionId'];
    $phoneNumber = $_POST['phoneNumber'];
    $serviceCode = $_POST['serviceCode'];
    $text =$_POST["text"];

    // Assuming you determine the user's registration status somehow, you can set $isRegistered accordingly
    $connect=new PDO("mysql:host=localhost;dbname=register","root","");
    $sel="SELECT * from creatte where phonenumber=:phone";
    $st=$connect->prepare($sel);
    $st->execute(["phone"=>$phoneNumber]);
    $rw=$st->fetchAll(PDO::FETCH_ASSOC);
    $sel2="SELECT * from pay where `number`=:phone";
    $st2=$connect->prepare($sel2);
    $st2->execute(["phone"=>$phoneNumber]);
    $rw2=$st2->fetchAll(PDO::FETCH_ASSOC);
    $sel3="SELECT * from `admin` where `Phonenumber`=:phone";
    $st3=$connect->prepare($sel2);
    $st3->execute(["phone"=>$phoneNumber]);
    $rw3=$st3->fetchAll(PDO::FETCH_ASSOC);
    $finish=count($rw3);
    $payed=count($rw2);
    $isRegistered=count($rw);
    // Instantiate Menu class
    $menu = new Menu($text, $sessionId);
    $textArray = explode("*",$text);
    if ($isRegistered) {
       if ($text=="") {
        $menu->mainMenuRegistered($textArray, $phoneNumber);
       }
       else{
        $password=$rw[0]["password"];
        switch ($textArray[0]) {
            case $password:
                if ($payed) {

                  
                        if (count($textArray)>1) {
                            switch ($textArray[1]) {
                             case '1':
                                 $menu->menuregisterr($textArray,$phoneNumber);
                                 break;
                             default:
                                 echo "END invalid choice";
                                 break;
                         } 
                         }
                         else{
                             $menu->menuregisterr($textArray,$phoneNumber);
                         }
                    
                  
                    
                    
                }
                else{
                    $menu->menupayregister($textArray,$phoneNumber);
                    
                }
                
                break;
            
            default:
                echo "END invalid pin";
                break;
        }
       }
    }
    else{
        if ($text=="") {
            $menu->MenuRegister($textArray, $phoneNumber);
        }
        else{
            
            $menu->MenuRegister($textArray, $phoneNumber);
                   
                
             
            }
        }

