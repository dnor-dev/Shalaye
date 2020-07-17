<?php
$conn = mysqli_connect('localhost', 'id14346550_shalaye_user', 'ff*_]a_R%P9w0xEp', 'id14346550_shalaye');
$message = '';


if (isset ($_POST['submit'])){
    $email = $_POST['email'];
    $email = mysqli_real_escape_string($conn, $email);


    $query = "INSERT INTO capture (email) VALUES ('$email')";
    $result = mysqli_query($conn, $query);

    if ($result){
        echo "<script>
        window.location.href = 'index.html';
             </script>";
    }else{
        echo "<script>
        alert('Unsuccessful');
             </script>";
    }
}