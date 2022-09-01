<?php
session_start();
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $user_name=$_POST['user_name'];
    $password=$_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
         $user_id=random_num(20);
         
         $query="insert into users(user_id,user_name,password) values('$user_id','$user_name','$password')";
         mysqli_query($con,$query);
         header("Location: login.php");
         die;
    }else
    {
        echo "<script> alert('Enter Valid Information')</script>";
    }
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>
    <style type="text/css">
        *{
            padding:0px;
            margin:0px;
        }
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #3eedc4;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color:#183a1d;
            border: none;
            border-radius:25px;
        }
        #button:hover{
            background:#f0a04b;
        
        }
       #box{
            background-color: #eff0bb;
            margin: auto;
            width:300px;
            padding:20px;
            border-radius:20px;
        }
        #text{
            height:25px;
            border-radius:5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }
        a {
            color: #70be51;
            display:inline-block;
            text-decoration: none;
            font-weight: 800;
            }
        a:hover{
            color: red;
        }
                    
        
    </style>
    <div id="box" >
        <form action="#" method="post" >
            <div style="font-size:20px;margin: 10px;color:#183a1d">Signup</div>
            <input id="text" type="text" placeholder="Username"name="user_name" required><br><br>
            <input id="text"type="password" class="pass"placeholder="Password" name="password" required><br><br>
            <input id="button"type="submit" value="Signup"><br><br>
            <span>Already a member ?   </span>
            <a href="login.php">Click to Login</a><br><br>
        </form>
    </div>
    <script>
        var=
    </script>
</body>
</html>