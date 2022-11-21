<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<h1>Registration Successful</h1>";
    echo "<div> Your details are: </div>";
    echo "<div> Name: ". htmlspecialchars($_POST['name']). "</div>";
    echo "<div> Email: ". $_POST['email']. "</div>";
    echo "<div> Password: ". password_hash($_POST['password'], PASSWORD_BCRYPT). "</div>";
}else {
    echo "<h1>We only accept post requests </h1>";
}

?>
