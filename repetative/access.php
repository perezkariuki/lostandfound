<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM credentials WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            $_SESSION['id'] = $fetch_info['id'];
            if($code != 0){
              
                header('Location: reset_otp.php');
            }
        }else{
            header('Location: check_otp.php');
        }
    }
}else{
    header('Location: http://localhost/lostandfound/login.php');
}
?>