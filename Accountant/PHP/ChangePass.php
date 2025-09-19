<?php
    session_start();
    include 'ServerStart.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $currentpass = $_POST['old_pass'];
        $newpass = $_POST['new_pass'];
        $confirmpass = $_POST['confirm_pass'];
        
        $id = $_COOKIE['id'];

        if($newpass != $confirmpass) {
            echo "<script>alert('Pass Mismatch');</script>";
        } else {
            $sql = "SELECT Employee_password FROM Employee_Table WHERE Employee_Id='$id'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($row['Employee_password'] == $currentpass) {
                $sql1 = "UPDATE Employee_Table SET Employee_password='$newpass' WHERE Employee_Id='$id'";
                if($conn->query($sql1) == TRUE) {
                    header("Location: ../View/Profile.php");
                    echo "<script>alert(Password Changed);</script>";
                } else {
                    echo "<script>alert('Password Not Set');</script>";
                };
            } else {
                echo "<script>alert('Current Password is incorrect.');</script>";
            }
        }
    }

?>