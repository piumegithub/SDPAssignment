<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $id = mysqli_real_escape_string($conn, $_POST['Id']);
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $complaint = mysqli_real_escape_string($conn, $_POST['complaintR']);
        $action = mysqli_real_escape_string($conn, $_POST['action']);
        $comment = mysqli_real_escape_string($conn, $_POST['Comment']);

        $query = "INSERT INTO officer (id, name, complaint_review, actions, comments) 
        values ('$Id','$name', '$complaintR', '$action', '$commnet')";
        
        $result = mysqli_query($connect, $query);
    if ($result) {
        echo "<script>alert('You have successfully register')</script>";
       
    }else{
        echo "<script>alert('failed register')</script>";
    }
        
    }
?>


