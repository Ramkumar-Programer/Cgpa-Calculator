<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
    <link rel="stylesheet" type="text/css" href="css/result.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body class="body">
  <div class="container">
    <img src="img/logo.jpeg" class="logo col-sm-12" ><br>
<?php 

   if (isset($_POST['calculate'])) {
   	//grade points
  	$sub1 = $_POST['grade1'];
    $sub2 = $_POST['grade2'];
    $sub3 = $_POST['grade3'];
    $sub4 = $_POST['grade4'];
    $sub5 = $_POST['grade5'];
    $sub6 = $_POST['grade6'];
    $sub7 = $_POST['grade7'];
    $sub8 = $_POST['grade8'];

    //credit
    $gra1 = $_POST['credit1'];
    $gra2 = $_POST['credit2'];
    $gra3 = $_POST['credit3'];
    $gra4 = $_POST['credit4'];
    $gra5 = $_POST['credit5'];
    $gra6 = $_POST['credit6'];
    $gra7 = $_POST['credit7'];
    $gra8 = $_POST['credit8'];

    
    $gpa=(($sub1*$gra1)+($sub2*$gra2)+($sub3*$gra3)+($sub4*$gra4)+($sub5*$gra5)+($sub6*$gra6)+($sub7*$gra7)+($sub8*$gra8))/($gra1+$gra2+$gra3+$gra4+$gra5+$gra6+$gra7+$gra8);?>
    <center>
     <div class="main col-sm-12" >
        <div class="form_re">
                 <div class="title_re"><h2>GPA</h2></div>
             <div class="result">
                  <h4>Your GPA is:<span style="color: red;"> <?php echo"$gpa";?></span></h4><br>
                  <h6>Good Try and Good Job</h6>
             </div>
             <center><strong><hr><div class="cgpa" style="text-align-last: center; padding-top: 20px;">Will you like to calucate?<a href="index.html" style="text-decoration: none;color: #71b7e6;">CGPA</a></div></strong></center>
        </div>
     </div></center>

  <?php } ?>
  </div>
  <footer >
    <div id="footer">
      <div class="copyright">
        &copy; Copyright <strong><a href="http://kamarajengg.edu.in/cse.php" target="_blanck">KCET/CSE Dept</a></strong>
      </div>
      <div class="credits">
       Designed by <a href="#">Pirdeep Roshan/</a><a href="#"> Ramkumar/</a><a href="#">Yogesh</a>
      </div>
    </div>
  </footer>
  </body>
</html>