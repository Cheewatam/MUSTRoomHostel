<?php 
    $cus_name = $_POST["username"];
    $cus_password = $_POST["password"];
    

    include "config.php";

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    else{
        
        $text = checklogin($conn,$cus_name,$cus_password);

 

    }
    
    function checklogin($conn,$cus_name,$cus_password)
    {
        $sql = " select * from customer WHERE cus_name ='" .$cus_name. "'
                And cus_password = '".$cus_password."'";

        if ($conn->query($sql) == TRUE) {
                echo "nnnnnn";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    


        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

       
            while ($row = $result->fetch_assoc()){
            setcookie("cus_name",$cus_name, time() + 3600);
            setcookie("cus_password",$cus_password, time() + 3600);
            session_start();
            // echo $_SESSION["cus_username"] = $row["cus_username"];
            // echo $_SESSION["cus_password"] = $row["cus_password"];

            echo "<br>";
            //echo $row["stu_fname"];
            //setcookie("stu_name", $row["stu_fname"], time() + 3600, '/');
            //echo print_r($_COOKIE);
            // header("Location:listofuser.php");
            // return 1;
             echo "Login Success";
             // $_SESSION["ad_type"] = $row["ad_type"];

            header("Location:index.php");
             return 1;
            }


        } else {
       //header("Location:loginfail.php");
        // return 0;
        echo "Login Error";
        return 0;
        }

        $conn->close();
    }

 ?>