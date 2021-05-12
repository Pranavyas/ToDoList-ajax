<html>
    <head>
        <title>manage</title>
    </head>
    <body>
        <?php

        $con= new mysqli("localhost","root","Pranav.vyas@1297","task");

        if($con->connect_error){
            die("ERROR:" .$con->connect_error);
        }

        $sql="SELECT title from naruto";

        $result= $con->query($sql);

        while($row= mysqli_fetch_array($result)){

            echo " <br> <button class='btnx'>".$row['title']."</button> <br>" ;
        }

        ?>
    </body>
</html>