
<html>

    <style>
    h1{
        color: red;
    }
    
    #set{
        line-height: 100%;
        display: inline-block;
        margin-top: 10px;
        margin-left: 100px;
    }
    </style>

    <body>
    <?php 

       $b=$_POST['b'];
       $a=$_POST['a'];            
       

        $con= new mysqli("localhost","root","Pranav.vyas@1297","task");

        if($con->connect_error){
            die("ERROR:" .$con->connect_error);
        }

        if( $b=="unchecked"){

          

            $check="UPDATE naruto set complete=0 where title='$a'";
            $ress= $con->query($check);
            
        }else{

        $ram= "UPDATE naruto set complete=1 where title='$a'";
        
        $complete= $con->query($ram);
        
        }

        $del= "DELETE FROM naruto
        WHERE title='$a'";

        $delete= $con->query($del);

        $sql= "SELECT * from naruto order by dt desc";
        
        $result= $con->query($sql);
        
       
        while( $row=mysqli_fetch_array($result) ){

            $count =0;    
            $arr = explode("@#$",$row['task1']);
            $len =sizeof($arr);

            $date=date('y-m-d');

            $date1=date_create($row['dt']);
            $date2=date_create($date);

            $diff=date_diff($date1,$date2);
            $date7=date_create($row['dt']);
            $dt=date_format($date7,"d F y");
            
            //echo $diff->format("%R%a days");
            
    echo "<div class='box' style='border:none'>";

    echo "<div class='orange' style='color:white'>";
    
    if($row['complete']==1){
    echo "<input type='checkbox' style='margin-left:-2px;width:70px;height:20px' checked class='ralf' value='ram'>";
}else{
    echo "<input type='checkbox' style='margin-left:-2px;width:70px;height:20px' unchecked class='ralf' value='ram'>";
    
}
               echo "<button class='inside'>  <i class='fa fa-close'></i>  </button>";
               echo " <b> <span style='margin-left:10px;font-size:22px' value='".$row['title']."'>".$row['title']." </span> </b><br><br>";

            echo "</div>";
            

            echo "<div class='cont'>";
            echo " <b> START DATE: </b>&nbsp&nbsp&nbsp&nbsp&nbsp" .$dt."<br><br>";
            

                    while($count<$len){
                        echo " <b> Task:&nbsp;</b> ".$arr[$count]."<br><br>";
                         $count++;
                    }
                    //     echo " <b> Task1: </b>: " .$row['task1']."<br><br>";

                         echo " <b> Priority: </b>&nbsp&nbsp&nbsp&nbsp&nbsp" .$row['priority']."<br><br>";
                        
                         
                         if(strtotime($row['dt']) > strtotime($date)){

                            if ($row['complete']==1){

                                echo "<strong>Deadline:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>Completed</b></span>";
                                

                            }

                            else{


                             echo "<strong>Deadline:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>" .$diff->format("%a days")." left</b></span>";
                             
      
                            }
                                
                            if($row['complete'] == 1){

                                    echo "<br><br><strong>STATUS:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>ON TIME</b></span>";
                                    
                                }else{
                                    echo "<br><br><strong>STATUS:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>PENDING</b></span>";
                                }

                            }  else{

                                echo "<strong>Deadline:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>OVER</b></span>";

                                if($row['complete'] == 1){
                                    echo "<br><br><strong>STATUS:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>COMPLETED LATE !!!</b></span>";
                                    
                                }else{
                                echo "<br><br><strong>STATUS:&nbsp&nbsp&nbsp&nbsp&nbsp</strong><span style='color:red'><b>PENDING SINCE ".$diff->format("%a days")." </b></span>";
                                }
                        }   
                        
               

             echo "</div>";
            
        
     echo  " </div>";
    }

        ?>
    
 
</body>
</html>