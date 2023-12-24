
<?php
if($_SERVER['REQUEST_METHOD'] =="POST"){
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
if(isset($_POST['sub'])){
$host="localhost";
$user="root";
$pass="";
$db="health";
$conn=mysqli_connect($host,$user,$pass,$db);
$insert="insert into contact values('$name','$email','$message')";
mysqli_query($conn,$insert);
if($conn){
echo("the registrstion is done");
}
else{
echo("the registration is failed");
}}}



$host="localhost";
$user="root";
$pass="";
$db="health";
$conn=mysqli_connect($host,$user,$pass,$db);

$r=mysqli_query($conn,'select* from breakfast');
while ($row = mysqli_fetch_array($r)) {
    echo ".fast" . $row['name'];
    echo "#break.onclick" . $row['ingredients'];
}
?>
