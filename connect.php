<?php
    
    $DBServerName = "localhost";
    $DBUserName = "lifeofst_lfs";
    $DBPwd = "01944652575@lifeofstory";
    $DBName = "lifeofst_members_info";
    
    $connect = mysqli_connect($DBServerName,$DBUserName,$DBPwd,$DBName);
    if($connect==false)
    {
        echo "Database could not connected".mysqli_error(); 
    }
?>