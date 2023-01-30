<?php
    $con =mysqli_connect("localhost:3306","root","root","users");
    /* $sql ="insert into login_user(id,name,username,password)VALUES(2,'thuthu','thuthu','111111')"; */
     $sql ="select * from login_user";
    $res = mysqli_query($con,$sql);
    while($row =mysqli_fetch_assoc($res)){
        echo '<pre>';
        print_r($row);
    }
?>