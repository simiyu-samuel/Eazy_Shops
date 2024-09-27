<?php
if(isset($_POST['login'])){
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $sql = "SELECT * FROM users where username = '$username' AND password = '$password'";
    $res = mysqli_query($con, $sql);

    if(mysqli_num_rows($res) > 0){
        echo "
        <script>
           alert('Successfull Loged in!!');
           window.location.href = '../views/frontend/home.php';
        </script>";
    } else{
        echo "
        <script>
           alert('Wrong username or password!!');
           window.location.href = '../views/frontend/login.php';
        </script>";
    }
}