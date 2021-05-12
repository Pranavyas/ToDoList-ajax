<html>
    <head>
        <title> Insert </title>
    </head>
    <body>
        <?php
        $a= $_POST['a'];
        
        // echo $a.'<br>';
        // echo strlen($a);

        $con= new mysqli("localhost","root","Pranav.vyas@1297","task");
        
                    if($con->connect_error){
                        die("ERROR:" .$con->connect_error);
                    }
        
        
                    $sql= "SELECT * FROM naruto WHERE title= '$a'";

                 
                    $result= $con->query($sql);
                    
                 while( $row=mysqli_fetch_array($result) ) {

                    // echo $row['title'];
                    // echo strlen($row['title'])."<br>";
                    
                    // echo $row['task1']."<br>";
                    
                    // echo strlen($row['task1'])."<br>";
                    // echo $row['priority']."<br>";
                    
                    // echo strlen($row['priority'])."<br>";


                        $count=0;
                        $arr = explode("@#$",$row['task1']);
                        $len =sizeof($arr);
            
                    echo " 

                        <div class='container' style='color:red'>

                        <h1><span id='flower'>".$row['title']."<span></h1>

                        
                        </div>
                        <hr>
                    ";

                    while($count<$len){
                        echo "
                        
                        <div class='form-group' >
                        <lable for='task1'><b>TASK:</b></label>

                                <input type='text' name='task1' class='tasks form-control' value='".$arr[$count]."'>
                        </div>
                        <br>
                        ";

                        $count++;
                    }

                    echo "
                    
                    <div class='form-group'>
                    <lable for='priorit'><b>Priority:</b></label>

                    <select id='priority' class='form-control' name='priorit'>
                    <option value='Urgent'>Urgent</option>
                    <option value='Next month'>Next month</option>
                    <option value='week'>With in a week </option>
                    <option value='today'>Today</option>
                    <option value='next week'>Next week</option>
                    </select>                    
                    </div>

                 ";
                 
                 echo "
                 
                 <div class='form-group'>

                 <lable for='date1'><b>TITLE:</b></label>

                 <input type='date' name='date1' class='form-control' id='date1' value='".$row['dt']."'>
                 
                </div>
                 <br>
                 ";

                echo "<br> 

                <div class='form-group'>
                    
                <button class='btn btn-primary form-control' id='clever'>UPDATE<button>
                
                </div>

                ";

                break;
                 }

               /*   echo "<div class='box'>";
                    echo "<div class='orange'>";
                    echo "<button class='inside'>  <i class='fa fa-close'></i>  </button>";
                    echo " <b> <span id='set'>" .$row['title']." </span> </b><br><br>";
                    echo "</div>";
                    echo "<div class='cont'>";
                    echo "<br>";
                    echo " <b> Task1: </b>: " .$row['task1']."<br><br>";
                    echo " <b> Task2: </b>: " .$row['task2']."<br><br>";
                    echo " <b> Task3: </b>: " .$row['task3']."<br><br>";
                    echo " <b> Priority: </b>: " .$row['priority']."<br><br>";
                   
                    echo "</div>";
                    echo  " </div>";
                 */

                    
        ?>
    </body>
</html>