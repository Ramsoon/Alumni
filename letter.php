

<?php
   include("db.php");
   @session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['email']);
      $mypassword = mysqli_real_escape_string($db,$_POST['passwords']);
      
      
      $sql = "SELECT * FROM alumas WHERE email = '$myusername' and passwords = $mypassword";
      $result = mysqli_query($db,$sql);
    //  $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
        
      if($count == 1) {
         //session_register("myusername");
        $_SESSION['login_user'] = $myusername;
         echo "<script>alert('Welcome to your Home page');

         </script>";
       //  header("location: letter.php");
      }else {
         echo "<script>alert('Sorry you have not been registered on this system'); window.location='deployment.php';</script>
         ";
         exit;
      }
   }
?><?php
//include('sess.php');
$user =  $_SESSION['login_user'];
$sql = "SELECT * FROM alumas WHERE id = '$user'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>


<head>
<script type="text/javascript">
   
   function populate(s1,s2){
        var s1 = document.getElementById(s1);
        var s2 = document.getElementById(s2);
        s2.innerHTML = "";
        if(s1.value == "Art & Social Sciences"){
            var optionArray = ["Economics|Economics","English Language Studies|English Language Studies", "Mass Communication|Mass Communication", "Political Science & International Relation|Political Science & International Relation"];
        }else if(s1.value == "College of Health Sciences"){
            var optionArray = ["Anatomy|Anatomy", "Community Medicine|Community Medicine", "Basic Clinical Science|Basic Clinical Science", "Pre Med|Pre Med"];
        }else if(s1.value == "Engineering"){
            var optionArray = ["Chemical Engineering|Chemical Engineering", "Civil Engineering|Civil Engineering", "Computer Engineering|Computer Engineering", "Electrical & Electronic|Electrical & Electronic"];
        }else if(s1.value == "Law"){
            var optionArray = ["Private and Islamic Law|Private and Islamic Law", "Public and International|Public and International"];
        }else if(s1.value == "Management Sciences"){
            var optionArray = ["Accounting|Accounting", "Banking and Finance|Banking and Finance", "Business Administration|Business Administration", "Public Administration|Public Administration"];
        }else if(s1.value == "Natural & Applied Sciences"){
            var optionArray = ["Biochemistry|Biochemistry", "Biology|Biology", "Biotechnology|Biotechnology", "Computer Science|Computer Science", "Information Technology|Information Technology", "Microbiology|Microbiology", "Software Engineering|Software Engineering"];
        }
        for(var option in optionArray){
            var pair = optionArray[option].split("|");
            var newOption = document.createElement("option");
            newOption.value = pair[0];
            newOption.innerHTML = pair[1];
            s2.options.add(newOption);
        }
    }
</script>
  <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <?php include 'alinks.php'; ?>
  <title>::Transport Cluster System</title>
    <style type="text/css">

body {
        background-color: #ECD2CC;
      }
      a:active{
        color: white;
      }
    </style>

</head>
<body>
    <div class="cd-main-header" style="height: auto; width: 100%; background-color: black;"> 
    <?php include 'aisha_h.php'; ?>
        <nav class="navbar-success">
        <div class="container">
        <div class="navbar-header">
            <button type ="button" class="navbar-toggle" data-toggle="collapse" data-target = "#myMenu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="myMenu">
            <ul class = "nav navbar-nav">
                <!--<li><a href = "index.php">Home</a></li>-->
                
              <!--  <li><a href = "reg.php">Register mySchedule</a></li>-->
                
                <li><a href = "letter.php" style="color: white;"> My Home</a></li>
                <li><a href = "deployment.php">Log me out</a></li>
                <button type ="button" class="btn btn-success" data-toggle="modal" data-target = "#comment" align="right" style="margin-top: 8px; margin-left: 650px;">Leave a Comment</button>
                
                </ul>
            </div></nav>

    </div>
    



            <script type="text/javascript">
              function p(){
                window.print();
              }
            </script>
  <p style="margin-top: 40px; font-size: 24px; color: #900C3F; text-align: center; font-family: cursive;">Hi <?php echo " ".$row['names']. ", "; ?> Welcome  to your home page </p>
    <div class="container" align="center" style="background-color: white; padding-top: 10px; width: 60%; margin-top: 0px;">
        <!--<img src="img/Nigerian-Navy-Logo.jpg" style="width: 200px; height: 150px;" align = "center">-->
		<h3 title="fill in the form to register" style="color: purple; text-align: center; font-weight: bold;"> <?php echo $row['dept']." "."from Faculty of ".$row['faculty']; ?></h3>
		<p style="color: navy; text-align: center;text-decoration: underline; font-size: 18px;"> Please ensure to make changes where necceary</p>
		<div class="panel panel-success" style="padding: 20px 20px 20px 20px;">
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Weekdays</th>
      <th scope="col">Lecture Begins</th>
      <th scope="col">Lecture Ends</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Monday</td>
      <td><?php echo $row['mon'];?></td>
      <td><?php echo $row['mon_e'];?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tuesday</td>
      <td><?php echo $row['tue']; ?></td>
      <td><?php echo $row['tue_e'];?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Wednesday</td>
      <td><?php echo $row['wed'];?></td>
      <td><?php echo $row['wed_e'];?></td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>Thursday</td>
      <td><?php echo $row['thu'];?></td>
      <td><?php echo $row['thu_e'];?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Friday</td>
      <td><?php echo $row['fri'];?></td>
      <td><?php echo $row['fri_e'];?></td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Saturday</td>
      <td><?php echo $row['sat'];?></td>
      <td><?php echo $row['sat_e'];?></td>
    </tr>
  </tbody>
</table>
            <input type="button" class="btn btn-info" name="button" value="Update Profile" data-toggle ="modal" data-target="#aishat">
            <input type="button" class="btn btn-info" name="button" value="Change Lecture Schedules" data-toggle="modal" data-target="#aisha">

  <?php
                                
        
       if(isset($_SESSION['login_user']))
        {     
                  $eid = $_SESSION['login_user']; 
            if (isset($_POST['update_rc'])){
                              $hq  = $_POST['sname'];
                              $cof  = $_POST['faculty'];  
                              $we  = $_POST['dept'];    
                              $r = $_POST['level'];
      
      mysqli_query($db,"UPDATE students SET sname='$hq', faculty='$cof', dept='$we', level='$r' where pid = '$eid' ");
      
                     ?>

                     
                          <script>
                              document.write("Updated");
                                   alert('Record Updated');
                                   window.location='letter.php';
                          </script>

                     <?php

                exit;
            }
         
           $SADIQ = mysqli_query($db, "SELECT * FROM students WHERE pid = '$eid'        ");
           $row =  mysqli_fetch_array($SADIQ);
            
         ?>

         <!--comment-->
            <!-- Modal content-->
         <div id="comment" class="modal fade" role = "dialog">
           <div class="modal-dialog">
             
      
         <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss = "modal">&times;</button>
             <h4 class="modal-title">
               Leave us a comment 
             </h4>
           </div>
           <div class="modal-body">
             <form role = "form" action=""  method="post" align="left" style="margin: 20px;">
    <!-- personal form-->
    
    
        <div class="row" style="padding: 10px 10px 10px 10px;">
        <div class="col-md-12">
        <div class="md-form">
            
            <textarea name="com" rows="5" cols="50" placeholder="Drop your comment" style="border-width: 0px; border-color: rgb(2,3,3);"></textarea>
            </div>
          </div>
        </div></div>
<div class="modal-footer">
            
              <button name="comment" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Comment</button>    
             <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
           </div>
      </form>
</div></div>
</div>


          

            <!-- Modal content-->
         <div id="aishat" class="modal fade" role = "dialog">
           <div class="modal-dialog">
             
      
         <div class="modal-content">
           <div class="modal-header">
            <button type="button" class="close" data-dismiss = "modal">&times;</button>
             <h4 class="modal-title">
               Update Profile 
             </h4>
           </div>
           <div class="modal-body">
             <form role = "form" action="upprofile.php"  method="post" align="left" style="margin: 20px;">
    <!-- personal form-->
    
    
        <div class="row" align="left" style="padding: 10px 10px 10px 10px;">
        <div class="col-md-12">
        <div class="md-form">
            <label for="PID">Reg Number </label>
            <input type="text" class="form-control" id = "pid" name="pid" value="<?php echo $row['pid'];?>" disabled >
            </div>
            <div class="md-form">
            <label for="PID">Full Name </label>
            <input type="text" class="form-control" id="sname" name="sname" value="<?php echo $row['sname'];?>" required data-validation-required-message="this field can not be empty.">
            </div>
           </div>
        
        <div class="col-md-12">
        <div class="md-form">

        <label for="title">Faculty </label>
        <select class="form-control" id="slct1"  name="faculty" onchange ="populate(this.id,'slct2')" required>
            <option value="<?php echo $row['faculty'];?>">
                <?php echo $row['faculty'];?>
            </option>
            <option value="Art & Social Sciences">
                Art & Social Sciences
            </option>
            <option value="College of Health Sciences">
                College of Health Sciences
            </option>
            <option value="Engineering">
                Engineering
            </option>
            <option value="Law">
                Law
            </option>
             <option value="Management Sciences">
                Management Sciences
            </option>
            <option value="Natural & Applied Sciences">
                Natural & Applied Sciences
            </option>
        </select>
        <label for="title">Department </label>
        <select class="form-control" id="slct2" name="dept">
           <option value="<?php echo $row['dept'];?>">
               <?php echo $row['dept'];?>
            </option>
        </select>
        <label for="title">Level </label>
        <select class="form-control" name="level">
            <option value="<?php echo $row['level'];?>">
              <?php echo 'Level '.$row['level'];?>
            </option>
            <option value="1">
                Level 1
            </option>
            <option value="2">
                Level 2
            </option>
            <option value="3">
                Level 3
            </option>
            <option value="4">
                Level 4
            </option>
            <option value="5">
                Level 5
            </option>
        </select>
        </div></div></div>
    
    
           </div>
           <div class="modal-footer">
            
              <button type="submit" name="update_p" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>    
             <button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
           </div>

</form>
         </div>
         </div>
         </div>

         <?php
 // require_once 'db.php';
 
  if(isset($_POST['update'])){
    $user_id = $_SESSION['login_user'];
    $sname = $_POST['sname'];
    $faculty = $_POST['faculty'];
    $dept = $_POST['dept'];
    $level = $_POST['level'];
 
    mysqli_query($db, "UPDATE `students` SET `sname` = '$sname', `faculty` = '$faculty', `dept` = '$dept', `level` = '$level' WHERE `pid` = '$user_id'") or die(mysqli_error($db));
    echo "<script> alert('Profile Updated');</sript>";
    //header("location: letter.php");
    exit();
  }

?>

         <!-- schedules-->
         <!-- Trigger the modal with a button -->


<!-- Modal -->
       
<div id="aisha" class="modal fade" role="dialog" align="left">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content"> 

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Update Lecture Schedules</h4>
      </div>
      <form role = "form" method="post" action="uplecture.php">
       <div class="row" style="padding: 10px 10px 10px 10px;">
    <div class="col-md-12">
        <div class="row" style="padding: 10px 10px 10px 10px;">
        <div class="col-md-3">
        
        <div class="md-form">
        
        <label for="title">Monday Starts</label>
        <input type="time" id="mon" name="mon" class="form-control" value="<?php echo $row['mon'];?>">
       
        <label for="title">Tuesday Starts</label>
        <input type="time" id="tue" name="tue" class="form-control" value="<?php echo $row['tue'];?>">
        <label for="title">Wedesday Starts </label>
        
        <input type="time" id="wed" name="wed" class="form-control" value="<?php echo $row['wed'];?>">
        </div></div>
    <div class="col-md-3">
    <div class="md-form">
        
        <label for="title">Monday Ends</label>
        <input type="time" id="mon_e" name="mon_e" class="form-control" value="<?php echo $row['mon_e'];?>">
        <label for="title">Tuesday Ends</label>
        <input type="time" id="tue_e" name="tue_e" class="form-control" value="<?php echo $row['tue_e'];?>">
        <label for="title"> Wedesday Ends</label>
        <input type="time" id="wed_e" name="wed_e" class="form-control" value="<?php echo $row['wed_e'];?>">
        
    </div></div>
<!-- lecture ends-->
<div class="col-md-3">
        
        <div class="md-form">
        
        <label for="title"> Thursday Starts</label>
        
        <input type="time" id="thu" name="thu" class="form-control" value="<?php echo $row['thu'];?>">
       
        <label for="title"> Friday Starts</label>
        
        <input type="time" id="fri" name="fri" class="form-control" value="<?php echo $row['fri'];?>">
        
        <label for="title"> Saturday Starts</label>
        
        <input type="time" id="sat" name="sat" class="form-control" value="<?php echo $row['sat'];?>">
        </div></div>
        <!-- ends for thursdays to saturday-->
        <div class="col-md-3">
        <div class="md-form">
        <label for="title">Thursday Ends </label>
        <input type="time" id="thu_e" name="thu_e" class="form-control" value="<?php echo $row['thu_e'];?>">
        <label for="title">Friday Ends </label>
        <input type="time" id="fri_e" name="fri_e" class="form-control" value="<?php echo $row['fri_e'];?>">
      <label for="title">Saturday Ends </label>
      <input type="time" id="sat_e" name="sat_e" class="form-control" value="<?php echo $row['sat_e'];?>">
    </div>
    </div></div>
    
   
      <div class="modal-footer">
        <button class="btn btn-warning" type="submit" name="bello_update"> Update </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>
</form>
  </div>
</div>
          
         <?php

  if (isset($_POST['comment'])) {
    $user_id = $_SESSION['login_user'];
    
   
         
    
    
  // Define the query:
  $pid=$_POST['com'];
  $sname = $row['sname'];
  
  
 
  
  $pid = mysqli_real_escape_string($db,$pid);
 

    
    

  mysqli_query($db, "INSERT INTO res (id, sname, comment, time_date)
  VALUES(NULL, '$sname', '$pid', CURRENT_TIMESTAMP)") or die(mysqli_error($db));
        //echo $query;
  // Execute the query:

  echo "<script>alert('THANK YOU');
      
    </script>";
    

  }

         ?>


         <!--<form method="post" id="reused_form" class="modal fade" role = "dialog">
           <div class="row" style="padding: 10px 10px 10px 10px;">
        <div class="col-md-3">
        
        <div class="md-form">
        
        <label for="title">Monday Starts</label>
        <select class="form-control" name="mon">
            <option value="free">
                Lecture Free
            </option>
            <option value="8:00am">
                8:00am
            </option>
            <option value="8:00am">
                9:00am
            </option>
            <option value="8:00am">
                10:00am
            </option>
            <option value="8:00am">
                11:00am
            </option>
            
        </select>
       <label for="title">Monday Ends</label>
        <select class="form-control" name="mon_e">
            <option value="free">
                Lecture Free
            </option>
            <option value="2:00pm">
                2:00pm
            </option>
            <option value="3:00pm">
                3:00pm
            </option>
            <option value="4:00pm">
                4:00pm
            </option>
            <option value="5:00pm">
                5:00pm
            </option>
            <option value="6:00pm">
                6:00pm
            </option>
        </select>
        <button type="submit" name = "update_rec" id = "insert" class="btn btn-lg btn-success btn-block">Update It! &rarr;</button>
   
                            </form>-->
                       
         <?php
        }
        ?>
         
        </div></div>
  <!-- Click  <a href="deployment.php"> HERE </a> to check another Officer   <input type="button" name="button" value="print" onclick="p()">-->
    </div>   <?php include 'foot.php'; ?> 
<script src="js/jquery.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
</body>

</html>