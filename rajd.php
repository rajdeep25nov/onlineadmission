<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";
$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn)
{
    die("Connection Failed:" .mysqli_connect_error());

}
if(isset($_POST['submit']))
{
$name=$_POST['firstname'];
$address1=$_POST['address1'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$dob=$_POST['mydate'];
$cgpahighschool=$_POST['cgpahighschool'];
$cgpainter=$_POST['cgpainter'];
$checkage=$_POST['checkage'];
$age=$_POST['age'];
$describetext=$_POST['describetext'];
$gender=$_POST['mygender'];
$college=$_POST['college'];
$query ="INSERT INTO formdetail (firstname, address1, email, phone, mydate, cgpahighschool, cgpainter, checkage, age, describetext, mygender, college) VALUES ('$name','$address1','$email','$phone','$dob','$cgpahighschool','$cgpainter','$checkage','$age','$describetext','$gender','$college')";
//"INSERT INTO formdetail (firstname, Class, Email, Phone, age) VALUES ('$name','$class','$email','$phone','$age')";
if (mysqli_query($conn, $query))
{
    echo "Data Hyped into Database successfully👍";

}

else{
    echo "no connection". $sql."".mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>