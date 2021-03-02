<?php

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        $to = 'tinotendamarufetu@gmail.com';
        $subject = 'Form Submission';
        $message = "Name: ".$name."\n"."Phone: ".$phone."\n"."Wrote the Following: "."\n\n".$msg;
        $headers = "From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
        }else{
            echo "Something Went Wrong!";
        }

    }

?>