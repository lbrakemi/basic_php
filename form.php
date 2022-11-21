<?php
session_start();
//session_start(); is to link a page

$name = $email = $passowrd = $image = "";
$name_error = $email_error = $password_error = $image_error ="";

function get_name(string $data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function uploadFile($file, $allowed_types = [], &$error_message = ''){
        $target_dir = 'uploads/';
        $target_file = $target_dir. rand() . basename($file['name']);
        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if(count($allowed_types) < 1 || in_array($file_extension, $allowed_types)){
        move_uploaded_file($file['tmp_name'], $target_file );
        } else {
            $error_message = "we only allow" . implode(',', $allowed_types);
        }
}
function checkEmpty($data, &$error_str){
    if(empty($data)){
        $error_str = "This input is required";
    }
}
function displayError($error){
    echo "<br><span style='color:red; font-size: 12px'>$error</span>";
}
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    //Assign post data to variables after post
    $name = get_name(trim($_POST['name']));
    $email = get_name($_POST['email']);
    $password = get_name($_POST['password']);


    
    //Check if name is empty
checkEmpty($name, $name_error);
//Check if email is empty
checkEmpty($email, $email_error);
//Check if password is empty
checkEmpty($password, $password_error);

if (!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL)){
 $email_error = "Please enter a valid email address";
}

if (!empty($password) && strlen($password) < 6){
    $password_error = "Password must be at least 6 characters";
}
$allChecks = empty($password_error) && empty($email_error) && empty($name_error);

if (isset($_FILES['image']['name']) && !empty($_FILES['image']['name']) && $allChecks){
    if($allChecks){
        uploadFile($_FILES['image'], [ 'png', 'jpg', 'jpeg', 'gif'], $image_error);
    }
  
  } else {
      $image_error = "the image is required";
  }

if(empty($image_error)){


    //Store the valid data in session

    $_SESSION ['name'] = $name;
    $_SESSION ['email'] = $email;
    $_SESSION ['password'] = $password;

    //Redirect to the success page
    header('location:success.php');
}

}

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <br>
        <input type="text" name="name" id="name" placeholder="Enter a name" value="<?php echo $name ?>">
        <?php echo isset($name_error) && !empty($name_error) ? displayError($name_error):''; ?>
        <br>
        <br>
        <label for="email">Email</label>
        <br>
        <input type="text" name="email" id="email" placeholder="Email Address" value="<?php echo $email ?>">
        <?php echo isset($email_error) && !empty($email_error) ? displayError($email_error):''; ?>
        <br>
        <br>
        <label for="text" >Password</label>
        <br>
        <input type="password" name="password" id="password" placeholder="Enter password">
        <?php echo isset($password_error) && !empty($password_error) ? displayError($password_error):''; ?>
        <br>
        <br>
        <label for="image">Upload Profile Pic</label>
        <br>
        <input type="file" name="image" id="image">
        <?php echo isset($image_error) && !empty($image_error) ? displayError($image_error):''; ?>
        <br>
        <br>
        <input type="submit" value="Register">
    </form>
    
</body>
</html>