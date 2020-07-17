<?php
$conn = mysqli_connect('localhost', 'root', '', 'shalaye_db');
$message = '';


if (isset ($_POST['submit'])){
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);


    $query = "INSERT INTO capture (email) VALUES ('$email')";
    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
        window.location.reload();
             </script>";
    }else{
        echo "<script>
        alert('Unsuccessful');
             </script>";
    }
}