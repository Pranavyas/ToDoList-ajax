<html>

    <head>
        <?php
            session_start();
            
        ?>
       <title>Home</title>
        <link rel="stylesheet" href="home.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        
     </head>
    <body>
      
            <div id="bar" style="height:50px;position:fixed">

                  <div id="exp"> <button id="wo" > <i class="fa fa-home" style="color:white;font-size:40px"></i> </button> </div>
                <div id="btn1"> <button  id="btn2" onclick="allmemo()">  All memos </button> </div>

                 <div id="search-btn"> <button id="s" onclick="search()" style="width:120px; height:40px"> Search </button></div>
                 <div id="dots"> <button style="width: 50px; height:42px" id="exp1" > <i class="fa fa-bars"></i> </button> </div>
                 <!--search-->  <div id="search"> <input type="text" id="input-search" placeholder="Search Title" onkeyup="ramesh()" ></div>
                 <div id="cross"> <button id="cross1" onclick="cross()"> <i class="fa fa-close"></i> </button></div>

            </div>


            <div id="profile">

                <img src="male.png" alt="male" id="profile-image">
                
                <div id="prof">
                        <span id="sp"> <?php echo $_SESSION['name']; ?> </span>

                </div>
          
            </div>

        <div id="show" style="margin-top:70px;display:none;overflow:auto">  

            <div id="ram" style="height:50px;margin-left:0px;border:none">
                    <div id="button" style=" margin-left:15px;"> <button id="a">  <i class="fa fa-close"></i> </button></div>   
            </div> 

            <ul id="firstul">
                <br><br>
                <div class="form-group">
                <label for="title"> <strong> Title </strong></label>
                <li><input type="text" id="title" name="title" value="" class="form-control"></li>
                </div>
                <div class="form-group">
                    <label for="task1">Task</label>
                <li><input type="text" name="task1" class="task1 form-control" value=" " ></li> 
        </div>

                <div id="zz">

               </div>

                <div class="form-group">
                <li> <label for="sel">Priority</label>
                    <select id="sel" name="sel" class="form-control">
                        <option value="Urgent">Urgent</option>
                        <option value="Next month">Next month</option>
                        <option value="week">With in a week </option>
                        <option value="today">Today</option>
                        <option value="next week">Next week</option>
                    </select>

            
                </li>
                </div>

                <div class="form-group">
                    <label for="date">Deadline</label>
                    <input type="date" class="form-control" name="date" id="date">
                <br><br>

                <b>
                <button class="btn" id="insert">ADD </button>
                </b>

                <b>
                <button class="btn" id="add">SUBMIT</button>
                </b>

            </ul>
           

        </div>    

        <div id="left" > this  </div>

        <div id="right"> 

            <button id="btnl1"> Manage  </button> <br> 
            <button id="btnl2"> Edit  </button>
            <button id="logout">Logout</button>


        </div>

        <div id="rightd" style="border:2px solid green;
    width: 200px;
    height: 200px;
    position: absolute;
    display: none;
    top: 8%;
    left: 84%;
    background:rgb(239, 133, 11);
    overflow: hidden;">
        
        lasmdnl
          
            
        </div>

       <div id="img" style="border-radius:100%;"> <button onclick="ram()" style="border-radius:100%;"> <img src="button.png" id="btn" style="border-radius:100%;" alt="button logo" height="80" width="70"> </button>  </div> 

        
       <div id="manage">
            
            <div id="man-bar">
            
                <h1 id="h1" >Manage Categories </h1>
                <div id="man-close"><button id="bclose" style="width:50px; height:40px"> <i class="fa fa-close"></i> </button></div>
            </div>

            <div id="free" style="overflow:auto">
                <br>
                

            </div>
        </div>
        

        <div id="wrapper"> 
      <!-- Ajax code-->
     

        </div> 

      

      <script>  
      $("#btnl1").click(function(){

            // mamage by priority.

      });

      $("#logout").click(function(){
         
         location.href= 'index.php';
      });
    
      $("#insert").click(function(){

          //<li><span>TASK 1:</span><input type="text" id="task1"></li>
       // var a= createElement(li);
       var a= $('<div class="form-group">');
       var sp=  $('<label for="walie"><strong> </strong></label>').text('TASK');
       var ip =  $('<input type="text" name="walie" class="task1 form-control">');
        var z= $('</div>');
       var br =  $('<br>');
       
       $('#zz').append(a).append(sp).append(ip).append(z).append(br);

      });


      $("body").on('click','.btnx',function(){

          var a= $(this).text();
            //alert(a.length);
          $.ajax({
              type: "post",
              url: "insert.php",
              data: "a="+a,
              success: function(data){

                    $("#free").html(data);
              }
          });

      });

      $("body").on('change','.ralf',function(){

        var b=$(this).parent().find('span').text();
        
        var c;
        var d;

        if($(this).prop('checked')){

             d="checked";

            alert("Marking "+b+"Completed");

            $.ajax({
                type: "POST",
                url: "home.php",
                data: "a="+b+"&b="+d,
                success: function(data){
                     $("#wrapper").html(data);
                }
            });

        } 

        if(!$(this).prop('checked')){

            c="unchecked";

            alert("Marking "+b+"incomplete");

            $.ajax({
                type: "POST",
                url: "home.php",
                data: "a="+b+"&b="+c,
                success: function(data){
                    
                    $("#wrapper").html(data);
                }
            });

        }  

      });


      $("body").on('click','#clever',function(){
                       
            var text="";

            var a= $("#flower").text();
            var b= $("#priority").val();
            var d=$("#date1").val();

            $(".tasks").each(function(){
                text+= $(this).val()+ '@#$';
            });

            var len=text.length;
            
            text= text.slice(0,len-3);

           alert(a+b+d+text);
            
            $.ajax({
                type: "POST",
                url: "edit.php",
                data: "a="+a+"&b="+text+"&c="+b+"&d="+d,
                success: function(data){
                    alert("DATA UPDATED");
                }
            });

      });

      $("#add").click(function(){

              var task="";
              var a= $("#title").val();
              var c= $("#sel").val();
              var d=$("#date").val();

              $('.task1').each(function(){
               task+=$(this).val()+'@#$';
              
              });
              
              var len=task.length;

               task=task.slice(0,len-3);

                

                   $.ajax({
                    type: "POST",
                    url: "add.php",
                    data: "a="+a+"&b="+task+"&c="+c+"&d="+d,
                    success: function(data){
                        alert("data inserted.");
                    }
                });

          
          });




      $("body").on('click','.inside',function(){
            

            var a= $(this).parent().find('span').text(); 

            alert("You sure you want to delete:"+a);


            $.ajax({
                type:"POST",
                url: "delete.php",
                data: "a="+a,
                success: function(data){

                   $("#wrapper").html(data);
                }
            });
       
          });

    

        function ramesh(){

            var a= $("#input-search").val();
            
           //  alert(a);
           
            $.ajax({
                type: "POST",
                url: "search.php",
                data: "a="+a,
                success: function(data){
                    $("#wrapper").html(data);
                }
            });

        }

          
        $("#wo").click(function(){

            $("#show").css("display","none");
            $("#manage").css("display","none");
            $("#right").css("display","none");
            $("#search-btn").css("display","inline-block");
            $("#dots").css("display","inline-block");
            $("#btn1").css("display","inline-block");
            $("#cross").css("display","none");

            $("#search").css("display","none");
            
            $.ajax({
                type: "POST",
                url: "blank.php",
                success: function(data){
                        $("#wrapper").html(data);
                }
            });
          });




          $("#a").click(function(){
                $("#show").css("display","none");
          });
          
          $("#btnl2").click(function(){

            $("#manage").css("display","inline-block");
            $("#show").css("display","none");
            $("#right").css("display","none");
            $("#wrapper").css("display","none");

            $.ajax({
                  type: "post",
                  url: "manage.php",
                  success: function(data){
                      $("#free").html(data);
                    }
              });
            
          });

          $("#s").click(function(){
            $("#show").css("display","none");
            $("#right").css("display","none");
            $("#manage").css("display","none");
            $("#left").css("display","none");


          });

          $("#bclose").click(function(){
              
              $("#manage").css("display","none");

             
          });

         

          $("#exp1").click(function(){

              $("#right").toggle();
              $("#left").css("display","none");
              $("#manage").css("display","none");
              $("#show").css("display","none");


         });

         $('')

    function allmemo(){

        var a=document.getElementById("show");
        //var b=document.getElementById("left");

        /* 
        $("#show").toggle(1000, function(){
              this.css("display","none");  
        });
        */  

    //    $("#left").toggle();
      
        $("#show").css("display","none");
        $("#right").css("display","none");
        $("#manage").css("display","none");



        a.style.display="none";  

        $("#wrapper").toggle();

            
              $.ajax({
                  type: "POST",
                  url : "home.php",
                  success: function(data){
                        $("#wrapper").html(data);
                  }
              });

       // b.style.display="inline-block";
     
    }

   /* $(function(){

        $("button").click(function(){
            $("#show").attr('display','block');
            
       });

       $("#btn").click(function(){
           alert("hello");
       });
       
    });
    */


  /*  
    $("#btn2").hover(function(){
        $("#left").css("display","inline-block");
        },function(){
            $("#left").css("display","none");

     });
*/
/*
    $("#left").hover(function(){
        $("#left").css("display","inline-block");
        },function(){
            $("#left").css("display","none");

     });
     
*/
   /*  $("#dots").hover(function(){
            $("#right").css("display","inline-block");
            }, function(){
                $("#right").css("display","none")
     });
    */

   

    function search(){
        var searchBtn= document.getElementById("search-btn");
        var button= document.getElementById("btn1");
        var dots= document.getElementById("dots");
        var cross= document.getElementById("cross");
        var search= document.getElementById("search");

        
        searchBtn.style.display= "none";
        button.style.display= "none";
        dots.style.display= "none";
        search.style.display= "inline-block";
        cross.style.display= "inline-block";

        $("#wrapper").empty();
        /*
        $.ajax({
            type: "post",
            url: "blank.php",
            success: function(data){
                $("#wrapper").html(data);
            }
        }); 

     */  
       
    }

    function cross(){

        var searchBtn= document.getElementById("search-btn");
        var button= document.getElementById("btn1");
        var dots= document.getElementById("dots");
        var cross= document.getElementById("cross");
        var search= document.getElementById("search");
        
   
        searchBtn.style.display="inline-block";
        button.style.display= "inline-block";
        dots.style.display= "inline-block";
        search.style.display= "none";
        cross.style.display= "none";

        $.ajax({
            type: "POST",
            url: "blank.php",
            success: function(data){
                $("#wrapper").html(data)
            }
        });

    }


    function button(){
       alert("good");
    }

    function ram(){

        $("#show").toggle();
        $("#right").css("display","none");
        $("#manage").css("display","none");
        $("#left").css("display","none");
        $("#wrapper").css("display","none");
        $('#zz').empty();


    }

    function a(){

        var a=document.getElementById("show");
        a.style.display="none";  
    }

       </script>
     </body>   
</html>
    