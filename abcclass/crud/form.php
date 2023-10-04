<!DOCTYPE html>
<html lang="en">

<head>
     <title>Bootstrap Example</title>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
     <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
     <?php
     include "hedar.php";
     include "db.php";

     if(isset($_POST['submit'])){
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $address = $_POST['address'];
          $gender = $_POST['gender'];
          $language =implode(',',$_POST['language']);  
          $city = $_POST['city'];
          $password = md5($_POST["password"]);

          $file_name = $_FILES['file']['name'];
          $tmp_name = $_FILES['file']['tmp_name'];
          $filepath = "../images/" .uniqid() ."-" .$file_name;
          move_uploaded_file($tmp_name,$filepath);
          
          $sql = "   INSERT INTO cru(name,email,phone,address,gender,language,city,password,file)
          VALUES('$name',' $email','$phone','$address','$gender','$language','$city',' $password','$filepath')";

          mysqli_query($conn,$sql);
          header("location:index.php");
     }
     ?>


<div class="container">
     <h2>PLAYERS DETAILS</h2>

     <form action="<?php echo $_SERVER["PHP_SELF"]?>" class="row g-3" method="post" enctype="multipart/form-data">
     <div class="col-md-6">
          <label for="name" class="form-label">Name :</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="enter your name..">
     </div>
     <div class="col-md-6">
          <label for="email" class="form-label">Email :</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="enter your email..">
     </div>
     <div class="col-md-6">
          <label for="phone" class="form-label">Phone :</label>
          <input type="phone" class="form-control" name="phone" id="phone" placeholder="enter your phone..">
     </div>
     <div class="col-md-6">
          <label for="address" class="form-label">Address :</label>
          <input type="address" class="form-control" name="address" id="address" placeholder="enter your address..">
     </div>


     <div class="col-md-6">
          <label for="">Gender :</label>
          <div class="form-check form-check-inline">
               <input type="radio" class="form-check-input" name="gender" id="male" value="male">
               <label for="male" class="form-check-label">Male</label>
          </div>
          <div class="form-check form-check-inline mt-3">
               <input type="radio" class="form-check-input" name="gender" id="female" value="female">
               <label for="female" class="form-check-label">Female</label>
          </div>    
     </div>


     <div class="col-md-6 mt-3">
          <label for="">Language :</label>
          <div class="form-check form-check-inline">
               <input type="checkbox" class="form-check-input" name="language[]" id="gujarati" value="gujarati">
               <label for="gujarati" class="form-check-label">Gujarati</label>
          </div>
          <div class="form-check form-check-inline">
               <input type="checkbox" class="form-check-input" name="language[]" id="hindi" value="hindi">
               <label for="hindi" class="form-check-label">Hindi</label>
          </div>
          <div class="form-check form-check-inline">
               <input type="checkbox" class="form-check-input" name="language[]" id="english" value="english">
               <label for="english" class="form-check-label">English</label>
          </div>
     </div>


     <div class="col-md-6">
          <label for="city" class="form-label">City :</label>
          <select name="city" id="city" class="form-control">
          <option value="">Select your country...</option>
               <option value="UK">UK</option>
               <option value="US">US</option>
               <option value="CANADA">CANADA</option>
               <option value="INDIA">INDIA</option>
               <option value="GERMANY">GERMANY</option> 
          </select>
     </div>

     <div class="col-md-6">
          <label for="file" class="form-label">Select a file :</label>
          <input type="file" class="form-control" name="file" id="file">
     </div>

     <div class="col-md-6">
          <label for="password" class="form-label">Password :</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="enter your password..">
     </div>

     <div class="col-12 mt-3">
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
     </div>

     
     


</form>
</div>

</body>

</html>