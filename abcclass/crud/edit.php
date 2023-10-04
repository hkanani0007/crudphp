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

     if (isset($_GET["id"])) {
          $getid = $_GET["id"];

          $sql = "SELECT * FROM cru WHERE id = '$getid'";
          $result = mysqli_query($conn, $sql);

          if ($result->num_rows > 0) {
               while ($row = $result->fetch_assoc()) {
                    // echo "<pre>";
                    // print_r($result);
                    // echo "</pre>";

                    $gender = $row["gender"];
                    $language = explode(',', $row["language"]);
                    $city = $row["city"];

     ?>


                    <div class="container">
                         <h2>PLAYERS DETAILS</h2>

                         <form action="update.php" class="roe g-3" method="post" enctype="multipart/form-data">
                              <div class="col-md-6">
                                   <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">

                    
                                   <label for="name" class="form-label">Name :</label>
                                   <input type="text" class="form-control" name="name" id="name" value="<?php echo $row['name'] ?>">
                              </div>
                              <div class="col-md-6">
                                   <label for="email" class="form-label">Email :</label>
                                   <input type="email" class="form-control" name="email" id="email" value="<?php echo $row['email'] ?>">
                              </div>
                              <div class="col-md-6">
                                   <label for="phone" class="form-label">Phone :</label>
                                   <input type="phone" class="form-control" name="phone" id="phone" value="<?php echo $row['phone'] ?>">
                              </div>
                              <div class="col-md-6">
                                   <label for="address" class="form-label">Address :</label>
                                   <input type="address" class="form-control" name="address" id="address" value="<?php echo $row['address'] ?>">
                              </div>


                              <div class="col-md-6">
                                   <label for="">Gender :</label>
                                   <div class="form-check form-check-inline">
                                        <input type="radio" class="form-check-input" name="gender" id="male" value="male" <?php if ($gender == "male") {
                                                                                                                                  echo "checked";
                                                                                                                             } ?>>
                                        <label for="male" class="form-check-label">Male</label>
                                   </div>
                                   <div class="form-check form-check-inline mt-3">
                                        <input type="radio" class="form-check-input" name="gender" id="female" value="female" <?php if ($gender == "female") {
                                                                                                                                       echo "checked";
                                                                                                                                  } ?>>
                                        <label for="female" class="form-check-label">Female</label>
                                   </div>
                              </div>


                              <div class="col-md-6 mt-3">
                                   <label for="">Language :</label>
                                   <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="language[]" id="gujarati" value="gujarati" <?php if (in_array('gujarati', $language)) {
                                                                                                                                                 echo "checked";
                                                                                                                                            } ?>>
                                        <label for="gujarati" class="form-check-label">Gujarati</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="language[]" id="hindi" value="hindi" <?php if (in_array('hindi', $language)) {
                                                                                                                                            echo "checked";
                                                                                                                                       } ?>>
                                        <label for="hindi" class="form-check-label">Hindi</label>
                                   </div>
                                   <div class="form-check form-check-inline">
                                        <input type="checkbox" class="form-check-input" name="language[]" id="english" value="english" <?php if (in_array('english', $language)) {
                                                                                                                                            echo "checked";
                                                                                                                                       } ?>>
                                        <label for="english" class="form-check-label">English</label>
                                   </div>
                              </div>


                              <div class="col-md-6">
                                   <label for="city" class="form-label">City :</label>
                                   <select name="city" id="city" class="form-control">
                                        <option value="">Select your country...</option>
                                        <option value="UK" <?php if ($city == "UK") {
                                                                 echo "selected";
                                                            } ?>>UK</option>
                                        <option value="US" <?php if ($city == "US") {
                                                                 echo "selected";
                                                            } ?>>US</option>
                                        <option value="CANADA" <?php if ($city == "CANADA") {
                                                                      echo "selected";
                                                                 } ?>>CANADA</option>
                                        <option value="INDIA" <?php if ($city == "INDIA") {
                                                                      echo "selected";
                                                                 } ?>>INDIA</option>
                                        <option value="GERMANY" <?php if ($city == "GERMANY") {
                                                                      echo "selected";
                                                                 } ?>>GERMANY</option>
                                   </select>
                              </div>

                              <div class="col-md-6">
                                   <label for="file" class="form-label">Select a file :</label>
                                   <div class="">
                                        <input type="file" class="form-control" name="file" id="file">
                                        <img src="<?php echo $row['file'] ?>" width="50">
                                   </div>
                              </div>

                              <div class="col-md-6">
                                   <label for="password" class="form-label">Password :</label>
                                   <input type="password" class="form-control" name="password" id="password" value="<?php echo $row['password'] ?>">
                              </div>

                              <div class="col-12 mt-3">
                                   <button type="submit" name="submit" class="btn btn-primary">Update</button>
                              </div>





                         </form>
                    </div>
     <?php
               }
          }
     }
     ?>
</body>

</html>