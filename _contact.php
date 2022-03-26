<?php

    require("./_conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`, `date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp())";
        $ans = mysqli_query($conn,$sql);

        if ($ans) {
            header("Location:response.php");
        }
        else{
            header("location: ../index.php?save=false");
        }
            
    }

?>