<html>
    
        <style>
        h1{
            color: red;
        }
        
        
        </style>
        <body>
        <?php 

         

        
            $con= new mysqli("localhost","root","Pranav.vyas@1297","task");

            if($con->connect_error){
                die("ERROR:" .$con->connect_error);
            }


            $sql= "DELETE FROM naruto
            WHERE title='$a'";
            
            $result= $con->query($sql);
            
            while( $row=mysqli_fetch_array($result) ){
        
            echo "<div class='box'>";
            echo "<div class='orange'>";
            echo "<button class='inside'>  <i class='fa fa-close'></i>  </button>";
            echo "</div>";
            echo "<div class='cont'>";
            echo " <b> Title: </b>:<span>" .$row['title']." </span><br><br>";
            echo " <b> Task1: </b>: " .$row['task1']."<br><br>";
            echo " <b> Task2: </b>: " .$row['task2']."<br><br>";
            echo " <b> Task3: </b>: " .$row['task3']."<br><br>";
            echo " <b> Priority: </b>: " .$row['priority']."<br><br>";
           
            echo "</div>";
            echo  " </div>";
            
            


        ?>
        
     
    </body>
</html>