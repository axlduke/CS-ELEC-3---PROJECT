<?php
    include '../includes/connection.php';
    session_start();

    if (isset($_POST['login_button'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $check_email = "SELECT email FROM users WHERE email = '$email'";
        $result_email = mysqli_query($connection, $check_email);
        
        if ($result_email->num_rows > 0) {
            $get_email = mysqli_fetch_array($result_email);

            $check_password = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            $result_password = mysqli_query($connection, $check_password);
            
            if ($result_password->num_rows > 0) {
                $get_data = mysqli_fetch_array($result_password);

                $_SESSION['session_id'] = $get_data['id'];
                $_SESSION['session_email'] = $get_data['email'];
                
                header('location: ../index.php');
            }else{
                echo "Email or password did not mactch";
                header("Refresh:1; url=../login.php");
            }
        } else {
            echo 'Email address does not exist.';
        }    
    }

    mysqli_close($connection);
?>