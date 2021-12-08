<?php
    session_start();
    include("connect.php");

    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $check = mysqli_query($connect, "SELECT * FROM user WHERE mobile='$mobile' AND password='$password' AND role='$role' ");

    if(mysqli_num_rows($check) > 0){
        $userdata = mysqli_fetch_array($check); //returns an array
        $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2"); //for fetching party data

        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC); //stores all the data in form of an object

        $_SESSION['userdata'] = $userdata;
        $_SESSION['groupsdata'] = $groupsdata;

        ?>
            <script>
                window.location = "../routes/dashboard.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("User not found!");
                window.location = "../";
            </script>
        <?php
    }
?>