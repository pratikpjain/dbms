<?php 
    if (isset($_POST['name'])){
        /* connection established*/
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "sample";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " .  $conn->connect_error);
        }
        $name =  $_POST['name'];
        $r =  $_POST['roll_no'];
        $s =  $_POST['std'];
        $a = $_POST['age'];
        $e =  $_POST['email'];
        $sd = "INSERT INTO `student` (rollno, name  ,age , std , email) VALUES ('$r' , '$name' , '$a' , '$s' , '$e')";
        $res = $conn->query($sd);
        // $row = $res->fetch_assoc();
        // echo $row['name'];
        //         echo "<br>";
        //         echo $row['rollno'];echo "<br>";
        //         echo $row['std'];echo "<br>";
        //         echo $row['age'];echo "<br>";
        //         echo $row['email'];
        //         $row = $res->fetch_assoc();
        //         echo $row['name'];
        //                 echo "<br>";
        //                 echo $row['rollno'];echo "<br>";
        //                 echo $row['std'];echo "<br>";
        //                 echo $row['age'];echo "<br>";
        //                 echo $row['email'];
        // if($row != NULL){
        //     if($row['rollno'] != $_POST['roll_no'])
        //     {
        //         echo "Sorry!! No such entry exists!!!";    
        //     }
        //     else {
        //         echo $row['name'];
        //         echo "<br>";
        //         echo $row['rollno'];echo "<br>";
        //         echo $row['std'];echo "<br>";
        //         echo $row['age'];echo "<br>";
        //         echo $row['email'];
        //     }
        // }
        // else {
        //     echo "Sorry!! No such entry exists!!!";
        // }
        $conn->close();

    }
?>