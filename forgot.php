<html>
    <head>
        <title>Forgot</title>
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
            width: 150px;
            margin-left: 40px;
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
         

                if(isset($_POST['submit'])){
                    
                    
                   $email=$_POST['email'];

                
                
    
                    $con= new mysqli("localhost","root","Pranav.vyas@1297","signup");
                  
                    $sql="SELECT * from details where email='$email'";
                    
                    $result= $con->query($sql);
    
    
                   if(mysqli_num_rows($result) ==1){
    
                
    
                    header('location: todo.php');
                   
                    } else{
                        echo "invalid input";   
                    }
                    
                }else{
                    echo "wrong input"; 
                }


            ?>
            <div id="wrapper">
                <form method="post">

                <p><b>Enter Email ID that has account associated with To-do list.</b></p> <br><br>
                <span><b>Email Id</b></span><input type="text" name="email"> <br><br>

                <span></span><input type="submit" name="submit" value="submit" id="submit">
                </form>
            </div>

        </body>
</html>