<?php
session_start();
include("connection.php");
include("functions.php");
$user_data=check_login($con);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
</head>
<body>
    <style>
        a {
            color: #70be51;
            display:inline-block;
            text-decoration: none;
            font-weight: 800;
            }
        a:hover{
            color: red;
        }
        .button {
            background-color: Crimson;  
            border-radius: 5px;
            color: white;
            padding: .5em;
            text-decoration: none;
            margin:10px;

            .button:focus,
            .button:hover {
            background-color: FireBrick;
            color: black;
            }

            
            h1{
                text-align:center;
            }
        
        </style>
    
             
    
    Hello, Welcome  <?php echo $user_data['user_name']; ?><br>
    <a href="logout.php"class="button">Logout</a>
   
    
</body>
</html>