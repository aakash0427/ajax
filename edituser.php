<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit User</title>
  </head>
  <body>
    <h2>Edit User</h2>
    <form autocomplete="off" action="" method="post">

      <?php

      $conn = mysqli_connect("localhost","root","","data") or die("query failed");

      $id = $_GET["id"];

      $rows = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
      ?>
      
      <input type="hidden" id="id" value="<?php echo $rows['id']; ?>">
      <label for="">Name</label>
      <input type="text" id="name" value="<?php echo $rows['name']; ?>"> <br><br>
      <label for="">Email</label>
      <input type="text" id="email" value="<?php echo $rows['email']; ?>"> <br><br>
      <label for="">Date of Birth</label>
      <input type="date" id="dob" value="<?php echo $rows['dob']; ?>"> <br><br>
      <label for="">Gender</label>
      <select class="" id="gender">
        <option value="Male" <?php if($rows["gender"] == "Male") echo "selected"; ?> >Male</option>
        <option value="Female" <?php if($rows["gender"] == "Female") echo "selected"; ?> >Female</option>
      </select> <br><br>
      
      <label for="">Picture</label>
      <input type="file" id="pic" name="image" value="<?php echo $rows['pic']; ?>"> <br><br>
      <label for="">Subject</label>

      <select class="" id="sub">
        <option value="Hindi" <?php if($rows["subject"] == "Hindi") echo "selected"; ?> >Hindi</option>
        <option value="English" <?php if($rows["subject"] == "English") echo "selected"; ?> >English</option>
        <option value="Maths" <?php if($rows["subject"] == "Maths") echo "selected"; ?> >Maths</option>
      </select> <br><br>

      <label for="">address</label>
      <input type="textarea" id="add" value="<?php echo $rows['address']; ?>"> <br><br>
      <label for="">Password</label>
      <input type="password" id="pass" value="<?php echo $rows['password']; ?>"> <br><br>
      <label for="">Mobile No.</label>
      <input type="number" id="number" value="<?php echo $rows['mobile']; ?>"> <br><br>
      <label for="">Term & Conditions</label>
      <input type="checkbox" id="check" value="<?php echo $rows['check']; ?>"> <br><br>


      <input type="submit" onclick="submitData('edit');" value="Update" id="update">
    </form>
    <br>
    <a href="index.php">Go To Index</a>
    <?php require 'script.php'; ?>
  </body>
</html>