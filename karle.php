 <?php
        if(isset($_POST['submit'])){

            $name=$_POST['fname'];
            $pass= $_POST['pass'];
            $email= $_POST['email'];
            $count=$_POST['sel'];
            $zip= $_POST['zip'];

            echo $name."<br>";

            echo $pass."<br>";
            
            echo $email."<br>";

            
            echo $count."<br>";

            echo $zip."<br>";
            
            

            $con= new mysqli("localhost","root","Pranav.vyas@1297","signup");

            $sql= "INSERT into details values('$name','$pass','$email','$zip','')";

            $result= $con->query(sql);
            

        }    
    
    ?>