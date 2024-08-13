<?php

require "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$zipCode = $_POST["z"];
$address1 = $_POST["ad1"];
$address2 = $_POST["ad2"];
$city = $_POST["c"];

if(empty($fname)){
    echo ("Please enter your First Name !!!");
}else if(strlen($fname) > 50){
    echo ("First Name must have less than 50 characters");
}else if(empty($lname)){
    echo ("Please enter your Last Name !!!");
}else if(strlen($lname) > 50){
    echo ("Last Name must have less than 50 characters");
}else if (empty($email)){
    echo ("Please enter your Email !!!");
}else if(strlen($email) >= 100){
    echo ("Email must have less than 100 characters");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email !!!");
}else if (empty($password)){
    echo ("Please enter your Password !!!");
}else if(strlen($password) < 5 || strlen($password) > 20){
    echo ("Password must be between 5 - 20 charcters");
}else if(empty($mobile)){
    echo ("Please enter your Mobile !!!");
}else if(strlen($mobile) != 10){
    echo ("Mobile must have 10 characters");
}else if(!preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo ("Invalid Mobile !!!");
}else if(empty($zipCode)){
    echo("Please enter your zip code !!!");
}else if(empty($address1)){
    echo("Please enter your address line1");
}else if(empty($address2)){
    echo ("Please enter your address line2");
}else if(empty($city)){
    echo("Please enter your city");
}


$rs = Database::search("SELECT * FROM `user` WHERE `user_email`='".$email."' OR `phone_number`='".$mobile."'");
$n = $rs->num_rows;

if($n > 0){
    echo ("User with the same Email or Mobile already exists.");
}else{
    
    Database::iud("INSERT INTO `users` 
    (`first_name`,`last_name`,`user_email`,`phone_number`,`password`,`zipcode`,`address_line1`,`address_line2`,`city`) VALUES 
    ('".$fname."','".$lname."','".$email."','".$mobile."','".$password."','".$zipCode."','".$address1."','".$address2."','".$city."')");

    echo "success";

}
    


?>