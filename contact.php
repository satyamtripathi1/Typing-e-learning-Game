<?php
echo "hello";
$connection=mysqli_connect("localhost","root","","contact");
if(!$connection){
    echo "<script>alert('database not connected')</script>";
}
$name=$_POST['author'];
$email=$_POST['email'];
$sub=$_POST['subject'];
$message=$_POST['text'];
if(isset($_POST['submit'])){
    $Insert_query="INSERT INTO contact_details(`Name`,`Email`,`Sub`,`Message`) VALUES('$name','$email','$sub','$message')";
    if(mysqli_query($connection,$Insert_query)){
        echo "<script>alert('data inserted')</script>";
        header('location:index.html');

    }
    else{
        echo " data not sended";
        header('location:index.html');
    }
}

?>