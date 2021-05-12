<html>
    <head>
        <title>Logout</title>
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


         #image{
            margin-left: 470px;
       
        }

        img{
            border-radius: 50%  ;
        
        }
        #login{
            top: 1%;    
            right: 10%;
            position: absolute;
            display: inline-block;  
            background: transparent;
            color: black;
            width: 100px;
            height: 30px;
        }
        #login:hover{
            background: red;
        }
  </style>
    </head>

    <body>
        <?php

            if(isset($_POST['submit'])){

                $name=$_POST['fname'];
                $pass= $_POST['pass'];
                $email=$_POST['email'];
                $zip= $_POST['zip'];
                $count=$_POST['sel'];

                // $sexm=$_POST['sexm'];
                // $sexf=$_POST['sexf'];

                echo  "<b style='color:red'>".$name.$pass.$email.$zip.$count."</b>";


                $con= new mysqli("localhost","root","Pranav.vyas@1297","signup");

                $sql= "INSERT INTO details values('$name','$pass','$email','$zip','$count')";

                $result= $con-> query($sql);    

                echo '<script>alert("User Registered Successfully")</script>';
             }
        ?>

    <div id="image">
        <img id= "img" src="i2.jpeg" alt="logo" height="200" width="200">
    </div>
             <button id="login">Login</button>

    <div id="wrapper">
        <form method="post" >

            <span>  <b> Name:</b> </span><input type="text" name="fname"> <br><br>
            <span><b> Password: </b> </span><input type="password" name="pass"> <br><br>
            <span> <b>  Email: </b> </span><input type="text" name="email"> <br><br>
            <span><b>zip</b></span><input type="text" name="zip"> <br><br>
            <span><b>Country</b></span>  
            <select id="sel" name="sel"> 
            <option value="">default </option>
            <option value="India"> India </option>
            <option value="Africa">Africa</option>
            <option value="America">America</option>
            <option value="China">China</option>
            </select> <br><br>
            <span> <b>Gender </b> </span><input type="radio" name="sexm" value="1" id="male" > <b> male </b>
              <input type="radio" name="sexf" id="female" onclick= "ram()" value="2"> <b> Female </b> <br><br>    
                
              <input type="submit" name="submit" value="sign up" id="submit" > <br><br>
              
              </form>
    </div>
    <script>
       
       $("#male").click(function(){
        $("img").attr('src','male.png');
        var a=$(this).val();
        alert(a);
    });


     $("#female").click(function(){

        $("img").attr('src','female.png');
        var a=$(this).val();
        alert(a);
     
     });

     $("#login").click(function(){

         location.href="index.php";

     });
     
   
    </script>
    </body>
</html>

<!--


 font-size: 17px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    background: url("i1.jpg");
    background-repeat: no-repeat;
    background-size: 100%;    
-->