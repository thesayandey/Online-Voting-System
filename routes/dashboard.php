<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }

    $userdata = $_SESSION['userdata'];
    $groupsdata = $_SESSION['groupsdata'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
        
        .top{
            background-color: orange;
            padding: 10px;

        }

        .heading{
            display: grid;
            grid-template-columns: 1fr 2fr 1fr;
        }

        .title{
            display: grid;
            justify-content: center;  
        }

        #back{
            float: left;
            margin-top: 25px;
            font-size: larger;
        }

        #logout{
            float: right;
            margin-top: 25px;
            font-size: larger;
        }

        #profile{
            border: 2px solid black;
            border-radius: 10px;
            /* width: 30%; */
            padding: 20px;
            /* margin-top: 150px; */
            float: left;
        }

        #group{
            border: 2px solid black;
            border-radius: 10px;
            /* width: 70%; */
            padding: 20px;
            /* margin-top: 150px; */
            float: right;
        }

        .main{
            display: grid;
            grid-template-columns: 2fr 3fr;
            margin-top: 15px;
            grid-gap: 15px;
        }
    </style>

</head>
<body>
    <div class="top">
    <div class="heading">
        <div class="back">
            <input type="button" value="Back" id="back">
        </div>    
    
        <div class="title">
            <h1>Dashboard</h1>
        </div>
       
        <div class="logout">
            <input type="button" value="Logout" id="logout">
        </div>
       

    </div>
    </div>
    
    <!-- <h1 id="tit">Dashboard</h1>
    <input type="button" value="Back" id="back">
    <input type="button" value="Logout" id="logout">
     -->
    
    <div class="main">
        <div id="profile">
            <center><img src="../uploads/<?php echo($userdata['photo']); ?>" alt="User image" height="120" width="120"></center>
            <hr>
            <br><br>
            <b>Name: </b><?php echo($userdata['name']); ?> <br><br>
            <b>Mobile: </b><?php echo($userdata['mobile']); ?> <br><br>
            <b>Address: </b><?php echo($userdata['address']); ?> <br><br>
            <b>Status: </b><?php echo($userdata['status']); ?>
        </div>

        <div id="group">
            <?php 
                if($_SESSION['groupsdata']){
                    for($i=0; $i<count($groupsdata); $i++){ 
                        //count() calculates the length of the array
                        ?>
                            <div id="grp">
                                <img src="../uploads/<?php echo($groupsdata[$i]['photo']); ?>" alt="Party photo" height="120" width="120"><br><br>
                                <b>Group Name: </b><?php echo($groupsdata[$i]['photo']); ?><br><br>
                                <b>No of votes: <?php echo($groupsdata[$i]['votes']); ?></b>
                                <form action="">
                                    <input type="hidden" name="gvotes">
                                    <!-- <input type="hidden" name=""> -->
                                    <input type="button" value="Vote" name="votebtn" id="votebtn">
                                </form>
                            </div>
                        <?php
                    }
                }
                else{

                }
            ?>
        </div>

    </div>

  

</body>
</html>