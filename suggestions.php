<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="library";

//Creating connection for mysqli

$conn = new mysqli($servername, $username, $password, $db);

//Checking connection

if($conn->connect_error){
 die("Connection failed:" . $conn->connect_error);
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$subject = mysqli_real_escape_string($conn, $_POST['subject']);
$Message = mysqli_real_escape_string($conn, $_POST['Message']);


$sql = "INSERT INTO suggestions (name, email, subject,Message) VALUES ('$name', '$email', '$subject','$Message')";

if($conn->query($sql) === TRUE){
  echo '<script>alert("Your submission has been completed successfully. We will reply to you as soon as possible")</script>';
  echo "<script>window.location.href = 'index.php'</script>";   

}
else
{
 echo '<script>alert("There is a technical error and we are working to fix it as soon as possible, we apologize")</script>';  $conn->error;
 echo "<script>window.location.href = 'index.php'</script>";   

}
$conn->close();

?>