<?php
$conn = mysqli_connect("localhost","root","","data") or die("query failed");
echo $_POST["action"].'action-----';
if(isset($_POST["action"])){
  if($_POST["action"] == "insert"){
    insert();
  }
  else if($_POST["action"] == "edit"){
    edit();
  }
  else{
    delete();
  }
}

// function insert(){
//   global $conn;

//   $name = $_POST["name"];
//   $email = $_POST["email"];
//   $gender = $_POST["gender"];

//   $query = "INSERT INTO new_test VALUES('', '$name', '$email', '$gender')";
//   mysqli_query($conn, $query);
//   echo "Inserted Successfully";
// }

function edit(){
  global $conn;
echo "hrtr";
  $id = $_POST["id"];
  $name = $_POST["name"];
  $dob = $_POST["dob"];
  $gender = $_POST["gender"];
  $pic = $_FILES['image']['name']; 
  $folder = "upload-image/".$pic;
  move_uploaded_file($_FILES['image']['tmp_name'],$folder);
  $subject = $_POST["subject"];
  $add = $_POST["address"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $mobile = $_POST["mobile"];
  $check = $_POST["check"];
echo "test1";
   $query = "UPDATE `users` SET `id`='$id',`name`='$name',`dob`='$dob',`gender`='$gender',`pic`='$folder',`subject`='$subject',`address`='$add',`email`='$email',`password`='$password',`mobile`='$mobile',`check`='$check'  WHERE id = $id";
   echo $query;
  $res= mysqli_query($conn, $query);
  
if($res){
  echo "Updated Successfully";
}else{
  echo"Data Not updated";
}
}

function delete(){
  global $conn;

  $id = $_POST["action"];

  $query = "DELETE FROM users WHERE id = $id";
  mysqli_query($conn, $query);
  echo "Deleted Successfully";
}
?>