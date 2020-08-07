<?php
    include "database.php";
    
    if(isset($_POST['submit'])){
        $user=mysqli_real_escape_string($conn,$_POST['user']);
        $msg=mysqli_real_escape_string($conn,$_POST['message']);
        
        //set timezone
        date_default_timezone_set('Asia/Kolkata');
        $time=date('h:i:s',time());

        //
        if(!isset($user)|| $user=='' ||!isset($msg) || $msg==''){
            $error="**Please fill in your name and message";
            header("Location: index.php?error=".urlencode($error));
            exit();
        }else{
            $query="insert into messages(user,message,time)
                    values('$user','$msg','$time')";
            if(!mysqli_query($conn,$query)){
                die('Error:'.mysqli_error($conn));
            }else{
                header("Location:index.php");
                exit();
            }
        }
    }