<?php
include "hedar.php";
include "db.php";

if(isset($_POST['submit'])){
     $id = $_POST['id'];
     $name = $_POST['name'];
     $email = $_POST['email'];
     $phone = $_POST['phone'];
     $address = $_POST['address'];
     $gender = $_POST['gender'];
     $language = implode(',',$_POST['language']);

     
     $city = $_POST['city'];
     $password = md5($_POST["password"]);

     $file_name = $_FILES['file']['name'];
     
     if($file_name > 1){
     $tmp_name = $_FILES['file']['tmp_name'];
     $filepath = "../images/" .uniqid() ."-" .$file_name;

     move_uploaded_file($tmp_name,$filepath);
     
     $sql = "UPDATE cru SET name='$name', email='$email' , phone='$phone' , address='$address' , gender='$gender' , language='$language' , city='$city' , password='$password' , file='$filepath'
     WHERE id = '$id'";
     }else{
          $sql = "UPDATE cru SET name='$name', email='$email' , phone='$phone' , address='$address' , gender='$gender' , language='$language' , city='$city' , password='$password'
     WHERE id = '$id'";
     }

     mysqli_query($conn,$sql);
     header("location:index.php");
     }

     ?>