<?php
     $servername = "localhost";
     $usename="root";
     $password="";
     $database="sneakerstore";

     $conn = new mysqli ($servername,$username,$password,$database);
     
     if ($conn->conect_error){
         die("connection failed" : " .$conn->connection_error");
     }

     $name= $_POST['name'];
     $phone=$_POST['phone'];
     $address=$_POST['address'];
     $card_number=$_POST['card_number'];
     $expiry_month=$_POST['expiry_month'];
     $cvv=$_POST['cvv'];

     // Insert data into database
     $sql = "INSERT INTO  payment (name,phone,address,card_number,expiry_month,expiry_year,cvv)
     VALUES ('$name','$phone','$address','$card_number','$expiry_month','$cvv')";


    if ($conn->query($sql) === TRUE) {

        echo "<script>alert('Checkout complete');</script>";

        echo "<script>window.setTimeout(function(){ window.location.href + 'index.html ' ; }, 100);</script>";
    } else {
        echo "Error:" . $sql . "<br>" . $conn->error;

    }
?>