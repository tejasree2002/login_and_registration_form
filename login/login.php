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
         
         
         $query="select * from users where user_name='$user_name' limit 1";
         $result=mysqli_query($con,$query);
         if($result)
         {
                    if($result && mysqli_num_rows($result)>0)
                {
                    $user_data=mysqli_fetch_assoc($result);
                    if($user_data['password']=== $password)
                    {
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("Location: index.php");
                        
                        die;
                    }
                }
         }
         
         echo "<script> alert('wrong username or password')</script>";
    }else
    {
        echo "<script> alert('wrong username or password')</script>";
    }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
            background-color: #a8e5ed;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color: #183a1d;
            border: none;
            border-radius:25px;

        }
        #button:hover{
            background:#f0a04b;
        
        }
        #box{
            
            background-color: #fefbe9;
            margin:auto;
            width:300px;
            padding:20px;
            border-radius:20px;
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
        
        #text{
            height:25px;
            border-radius:5px;
            padding: 4px;
            border: solid thin #aaa;
            width: 100%;
        }

    </style>
    <div id="box">
        <form action="#" method="post">
            <div style="font-size:20px;margin: 10px;color:183a1d;">Login</div>
            <input id="text" type="text" placeholder="Username"name="user_name" required><br><br>
            <input id="text"type="password"placeholder="Password" name="password" required><br><br>
            <input id="button"type="submit" value="login"><br><br>
            <span stlye="align:center;">Don't have an account ?</span>
            <a href="signup.php">Signup Now</a><br><br>
        </form>
    </div>
</body>
</html>