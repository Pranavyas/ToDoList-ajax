<html>
    <head>
        <title> add </title>
    </head>
    <body>
        <?php
            echo "hello";
            
           $a=$_POST['a'];
           $b=$_POST['b'];
           $c=$_POST['c'];
           $d=$_POST['d'];
           
           echo $a;
           echo strlen($a)."<br>";
           echo $b;
           echo strlen($b)."<br>";
           echo $c;
           echo strlen($c)."<br>";
           echo $d;
           echo strlen($d);
           

           $con= new mysqli("localhost","root","Pranav.vyas@1297","task");

           if($con->connect_error){
                die("ERROR:" .$con->connect_error); 
           }

          

           $sql="INSERT INTO naruto (title,task1,priority,dt,complete) values('$a','$b','$c','$d',0)";
            
           $result= $con->query($sql);


        ?>

    </body>
</html>