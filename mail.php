<?php
session_start();

$errors =[];
$msg = "";
$token = md5(uniqid(rand(), true));

if(isset($_POST['name'],$_POST['email'],$_POST['message'],$_POST['phone'])){
    $fields=[
        'name'=>$_POST['name'],
        'email'=>$_POST['email'],
        'phone'=>$_POST['phone'],
        'message'=>$_POST['message']
    ];
    foreach($fields as $field=>$data){
        if(empty($data)){
            $errors[]='The '.$field . ' field is required.';
        }
    }

    $pattern = "/^(\+44\s?7\d{3}|\(?07\d{3}\)?)\s?\d{3}\s?\d{3}$/";
    $match = preg_match($pattern,$_POST['phone']);
    if ($match == false) {
        $errors[]='The phone We have an invalid phone number UK.';
    }

    $email = $_POST["email"];
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $errors[] = "Invalid email format";
    }

    if(strlen($_POST['message']) < 25 ){
        $errors[] = "The message must be greater than 25 characters";
    }

    if(empty($errors)){

        //Coneect to db
        $servername = "localhost";  
        $dbname = "exam";
        $username = "root";
        $password = "";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "INSERT INTO myguests (name, email, phone,message,ip)
        VALUES ('". $_POST['name']."', '". $_POST['email']."', '". $_POST['phone']."','". $_POST['message']."','".$_SERVER['REMOTE_ADDR']."')";

        if ($conn->query($sql) === TRUE) {
            $msg =  "New record created successfully";
        } else {
            $msg =  "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}else{
    $errors[]= 'Something went wrong';
}
$_SESSION['errors']=$errors;
$_SESSION['fields']=$fields;
$_SESSION['msg']= $msg;
$_SESSION['token']= $token;
header ('Location:contact.php');