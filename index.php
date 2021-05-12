<html>
    <head>
        <title>Login</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
         
         body{

            margin: 0px;
            background: url("i1.jpg");
            padding: 5px;
            background-repeat: no-repeat;
            background-size: 100%;
            font-size: 17px;
            font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        }
        #fpass,#signup{
            background: transparent;
            display: inline-block;
            color: black;
        }
        #fpass:hover{
            color:white;
            background:red;
        }
        #signup:hover{
            color:white;
            background:red;
        }
        #fpass{
            margin-left: 60px;
        }
        #signup{
            margin-left: 30px;
        }
        input{
            background: transparent;
            
            color: black;
        }
        select{
            background: transparent;
        }
        span{
            display: inline-block;
            
            margin-right: 23px;
            width: 100px;
        }
        #wrapper{
            top:40%;
            position: absolute;
            left: 30%;
            
        }
        #submit{
            width: 300px;
            margin-left: 20px;
        }

        input:hover{
            box-shadow: 2px 1px;

        }
        #submit:hover{
            background: red;
            color: white;
        }


        </style>
    </head>
    <body>
    <?php

        session_start();
            if(isset($_POST['submit'])){
                
                
                $name=$_POST['name'];
                $pass= $_POST['pass'];

                $con= new mysqli("localhost","root","Pranav.vyas@1297","signup");
              
                $sql= "SELECT * from details where name= '$name' and password='$pass' ";

                $result= $con->query($sql);


               if(mysqli_num_rows($result) ==1){

                $_SESSION['name']= $name;

                header('location: todo.php');
                $_SESSION['name']= $name;
               
                } else{
                   echo "invalid password";
               }

               if(isset($_GET['logout'])) {

                     session_unregister('name');
                     echo "done"; 
                }
            }
        ?>


        <div id="wrapper">
            <form  method="POST">
                <label for="name"></label>
                <span> <b> NAME </b></span><input type="text" name="name" >
                <br><br>
                <span> <b> Password </b></span><input type="password" name="pass" > <br><br> <br>
            
             <input type="submit" value="LOGIN" name="submit" id="submit" > 
          
            </form>
            
        <button id="signup" > Sign up          </button> 
        <button id="fpass" > Forgot password  </button>
       
    </div>
        <script>
            $("#signup").click(function(){

                location.href="signup.php";
            });
            $("#fpass").click(function(){
                location.href="forgot.php";
            });

            
        </script>
    </body>
</html>