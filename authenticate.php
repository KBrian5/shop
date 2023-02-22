<?php session_start();

$hashed_pwd = '$2y$10$BMcKSABQyyciPbUWl.pE9.6zv1tbk.O0QXlX/NMLxWt7vLxOCx/h.';

$username = $_POST['uname'];
$pwd = $_POST['pwd'];
// TODO: PHP Form Validation (see the example under Validate Form Data With PHP)
$my_hash = password_hash($pwd, PASSWORD_DEFAULT);
//echo($my_hash);

echo password_verify($pwd, $hashed_pwd);


    

?>
<!DOCTYPE html>
<html>
    <body>
        Invalid username and/or password.

        <a href="index.php">Homepage</a>
    </body>
</html>
