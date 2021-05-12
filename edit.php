<html>
    <head>
        <title> add </title>
    </head>
    <body>
        <?php

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
          echo strlen($d)."<br>";



           
           $con= new mysqli("localhost","root","Pranav.vyas@1297","task");

           if($con->connect_error){
                die("ERROR:" .$con->connect_error); 
           }

            $sql="UPDATE naruto set task1='$b',priority='$c',dt='$d' where title='$a'";

           
           $result= $con->query($sql);


        ?>

    </body>
</html>