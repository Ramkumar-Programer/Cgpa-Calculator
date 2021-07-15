<!DOCTYPE html>
<html>
<head>
  <title>CGPA</title>
  <link rel="stylesheet" type="text/css" href="css/gpa.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
  <div class="main">
      <?php 
         if (isset($_POST['value'])) {
           $dept = $_POST['dept'];
           $semester = $_POST['sem'];
       $con = mysqli_connect("localhost","root","","$dept");


           $query="select * from $semester";
           $result= mysqli_query($con,$query);
       ?>
     <center>
      <div class="container">
          <div class="title"><?php 
           if($con){ ?> <center class="top"> <h3> <?php echo "Dept: $dept |  Sem: $semester";?></h3></center><br> <?php }?></div>

           <form action="result.php" method="post" class="body"> 
               <div class="sub-details">
                 <?php 
                   $i=0; 
                   while($value = mysqli_fetch_array($result)){
                      $i++;
                 ?>

                 <div class="select-box">
	                     <span class="subname"><?php echo "$value[0]. $value[1]---$value[2]"; ?></h4></span><br><br>
                       <label class="label" hidden>Credit: </label>
                       <input size="3" type="text" class="input" name="credit<?php echo("$i");?>" value="<?php echo $value[3]; ?>" required="required" hidden>

                       <label class="label">Grade: </label>
                       <select name="grade<?php echo("$i"); ?>">
            
                             <option value=10 data-hover="O">O</option>
                             <option value=9 data-hover="A+">A+</option>
                             <option value=8 data-hover="A">A</option>
                             <option value=7 data-hover="B+">B+</option>
                             <option value=6 data-hover="B">B</option>
                             <option value=0 data-hover="RA">RA</option>
                      </select><br><br><hr> <br>
                </div><?php } ?>
             </div>
                 <div class="gpabtn" ><input type="submit" value="Calculate" name="calculate" /></div><br><br>
        
                     <center><div class="cgpa" style="text-align-last: center;">Will you like to calucate?<a href="index.html" style="text-decoration: none;color: #71b7e6;">CGPA</a></div></center>
    
          </form>
    </div></center><?php } ?><br>
</div>

<footer id="footer">
      <div class="copyright">
        &copy; Copyright <strong><a href="http://kamarajengg.edu.in/cse.php">KCET/CSE Dept</a></strong>
      </div>
      <div class="credits">
       Designed by <a href="#">Pirdeep Roshan/</a><a href="#"> Ramkumar/</a><a href="#">Yogesh</a>
      </div>
  </footer>
</body>
</html>