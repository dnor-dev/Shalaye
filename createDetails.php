<?php
$conn = mysqli_connect('localhost', 'root', '', 'shalaye_db');
$message = '';


if (isset ($_POST['submit'])){
    $email = $_POST['email'];


    $query = "INSERT INTO capture (email) VALUES ('$email')";
    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
        alert('Successfully Subscribed');
             </script>";
    }else{
        echo "<script>
        alert('Unsuccessful');
             </script>";
    }
}