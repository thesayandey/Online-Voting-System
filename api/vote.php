<?php
    session_start();
    include('connect.php');

    $votes = $_POST['gvotes'];
    $total_votes = $votes + 1;
    $gid = $_POST['gid'];
    $uid = $_SESSION['userdata']['id'];
    //echo ($total_votes);
    $update_votes = mysqli_query($connect, "UPDATE user SET votes='$total_votes' WHERE id='$gid' ");

    $update_user_status = mysqli_query($connect, "UPDATE user SET status='1' WHERE id='$uid' "); 

    if($update_votes and $update_user_status){
        // $groups = mysqli_query($connect, "SELECT id, name, votes, phpto FROM user WHERE role=2 ");

        $groups = mysqli_query($connect, "SELECT * FROM user WHERE role=2"); //for fetching party data

        $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC); //stores all the data in form of an object

        $_SESSION['userdata']['status'] = 1;
        $_SESSION['groupsdata'] = $groupsdata;

        ?>
            <script>
                alert("Voting Successful ");
                // window.location = "../routes/dashboard.php";
            </script>
        <?php
    }
    else{
        ?>
            <script>
                alert("ERROR ");
                window.location = "../routes/dashboard.php";
            </script>
        <?php
    }
?>