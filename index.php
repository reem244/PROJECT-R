<?php
 $name=$_REQUEST['name'];
 $skintype=$_REQUEST['skintype'];
 $age=$_REQUEST['age'];
 $email=$_REQUEST['email'];



 if(isset($_POST["btntest"]))
 
 

    $host="localhost";
    $user="root";
    $password="
    $db="table4";




    
    
    
    $conn = mysqli_connect($host,$user,$password,$db);
    
    
    $insert="insert into table4 values"('name','skintype','age','email');
    

    $mysqli_query($conn,$insert);

    if($conn){
        echo "<h1 style='color:green;'>your registration is done!</h1";
    }
    else{
        echo "<h1 style='color:red;'>your registration is faild!</h1";






 }
 

} 








?>

