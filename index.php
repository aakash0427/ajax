<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Index</title>
  </head>
  <body>
    <h2>Index</h2>
    <table border : 1>
    <tr>
<th>Id</th>
<th>Name</th>
<th>Dob</th>
<th>Gender</th>
<th>Picture</th>
<th>Subject</th>
<th>address</th>
<th>Email</th>
<th>Password</th>
<th>Mobile</th>
<th>Check</th>
<th>Edit</th>
<th>Delete</th>
</tr>
      <?php
      $conn = mysqli_connect("localhost","root","","data") or die("query failed");

      $rows = mysqli_query($conn, "SELECT * FROM users");
      $i = 1;
      ?>

      <?php foreach($rows as $row) : ?>
      <tr id = <?php echo $row["id"]; ?>>
        <td><?php echo $i++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["dob"]; ?></td>
        <td><?php echo $row["gender"]; ?></td>
        <td><img src='<?php print_r ($row["pic"]);?>' height=100 width=100></td>
        <td><?php echo $row["subject"]; ?></td>
        <td><?php echo $row["address"]; ?></td>
        <td><?php echo $row["email"]; ?></td>
        <td><?php echo $row["password"]; ?></td>
        <td><?php echo $row["mobile"]; ?></td>
        <td><?php echo $row["check"]; ?></td>
        <td>
          <a href="edituser.php?id=<?php echo $row['id']; ?>">Edit</a><br><br></td>
          <td>
          <button type="submit" onclick = "submitData(<?php echo $row['id']; ?>);">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
    <br>
    <a href="adduser.php">Add User</a>
    <?php require 'script.php'; ?>
  </body>
</html>