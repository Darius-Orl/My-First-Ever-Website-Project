<?php
    if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
    
    if(!empty($name) && !empty($email) && !empty($message)) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $from = "$email";
        $to = "darius.orlovas6@gmail.com";
        $subject = "Nauja zinute";
        $autorius = 'Nuo: ' . $name . ', ' . $email;
        $zinute = htmlspecialchars($message);
        //mail($to, $subject, $autorius, $zinute, $from);
        //echo "<script>alert('dekojame. jusu zinute gauta.');</script>";
    }
}    

include('db.php');
    }