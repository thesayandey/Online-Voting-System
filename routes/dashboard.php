<?php
    session_start();
    if(!isset($_SESSION['userdata'])){
        header("location: ../");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <style>
     

        .title{
            display: block;
            margin: auto;
            width: 30%;
            text-align: center;
        }

        #back{
            float: left;
        }

        #logout{
            float: right;
        }
    </style>

</head>
<body>
    <div class="top">
    <div class="heading">
        <div class="title">
            <h1>Dashboard</h1>
        </div>
        <input type="button" value="Back" id="back">
        <input type="button" value="Logout" id="logout">

    </div>
    </div>
    

    <div id="profile">

    </div>

    <div id="group">

    </div>

</body>
</html>