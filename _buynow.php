<?php

    require("./_conn.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $pincode = $_POST['pincode'];
        $landmark = $_POST['landmark'];

        $sql = "INSERT INTO `buynow` (`name`, `email`, `phone`, `address`, `pincode`, `landmark`, `date`) VALUES ('$name', '$email', '$phone', '$address', '$pincode', '$landmark', current_timestamp())";
        $ans = mysqli_query($conn,$sql);

        if ($ans) {
            header("Location:response.php");
        }
        else{
            header("location: ../websiteproject/buynow.php?save=false");
        }
            
    }

?>