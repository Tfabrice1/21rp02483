<?php
class Menu {
    protected $text;
    protected $sessionID;

    function __construct($text, $sessionId) {
        $this->text = $text;
        $this->sessionID = $sessionId;
    }
    

    public function mainMenuUnregistered() {
        echo "CON Welcome to Student Payement Schoolfees System \ n1. Register";
    }
    

    public function MenuRegister($textArray, $phoneNumber) {
        // Do something
        $level = count($textArray);

        if ($textArray[0] == "") {
            echo "CON Set your PIN to register\n";
        } 
        elseif ($level == 1) {
            echo "CON Confirm your PIN to register\n";
        } 
        elseif ($level == 2) {
            $pin = $textArray[0];
            $confirm_pin = $textArray[1];
            if ($pin != $confirm_pin) {
                echo "END PINs do not match, retry";
            } else {
                // Register user
                // Send SMS
                $con = mysqli_connect("localhost", "root", "");
                mysqli_select_db($con, "register");
                $ins = mysqli_query($con, "INSERT INTO creatte VALUES('', '$phoneNumber', '$pin', '$pin', 'not_pay')");

                echo "END $phoneNumber You have successfully registered";
            }
        }
    }

    public function mainMenuRegistered() {
        // Do something  
            echo "CON Login here,\n";
            echo "Enter your PIN\n";
    }
    public function menupayregister($text,$phone) {
        $response = "CON Pay here,\n";
        $response .= "Enter Fee to register\n";
        if (count($text)==1) {
           echo $response;
        }
        
        elseif (count($text)==2) {
           $amount=$text[1];
           $conn = new PDO("mysql:host=localhost;dbname=register", "root", "");
            $in="INSERT INTO pay values('$amount','$phone')";
            $st=$conn->prepare($in);
            $st->execute();
            echo "END thank you";
        }
    }
    public function menuregisterr($textArray,$phoneNumber) {
         // Do something
         $level = count($textArray);
        if ($level==1) {
            echo "CON Enter Your details To Pay  fees\n1. Enter Your details";
        }
        elseif ($level == 2) {
            echo "CON Enter your Names";
        } elseif ($level == 3) {
            echo "CON Enter your Regnumber ";
        } elseif ($level == 4) {
            echo "CON Enter your Department ";
        } elseif ($level == 5) {
            echo "CON Enter your Campus \n ";
        }
        elseif ($level == 6) {
            echo "CON Amount (FRW) \n ";
        }  
        else {
            $conn = new PDO("mysql:host=localhost;dbname=register", "root", "");
            $query = "INSERT INTO admin VALUES('','$textArray[2]','$textArray[3]','$textArray[4]','$textArray[5]','$textArray[6]','$phoneNumber')";
            $st=$conn->prepare($query);
            $st->execute();

            echo "END $textArray[2] $textArray[3] successful pay your schoolfees\n";
        }
    }


}

header("content-type:text/plain");
?>
