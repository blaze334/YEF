<?php

//Include authentication
//require("process/auth.php");

//Include database connection
require("config/db.php");

//Include class Voters
require("classes/Voters.php");

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator Login</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style_admin.css">
      <!-- Bootstrap CSS File -->
  <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="../lib/animate/animate.min.css" rel="stylesheet">
  <link href="../lib/venobox/venobox.css" rel="stylesheet">
  <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<div class="container" style="height:400px; padding:80px; font-size:8px;">
    <div class="row">
        <div class="col-md-4">
            <?php
            if(isset($_POST['submit'])) {
                $name       = trim($_POST['name']);
                // $course     = trim($_POST['course']);
                // $year       = trim($_POST['year']);
                $stud_id    = trim($_POST['stud_id']);

                $insertVoter = new Voters();
                $rtnInsertVoter = $insertVoter->INSERT_VOTER($name, $course, $year, $stud_id);
            }
            ?>
            <h4>Add Voters</h4><hr>
            <form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>" role="form">
                <div class="form-group-sm">
                    <label for="name">Name</label>
                    <input required type="text" name="name" class="form-control" placeholder="LName, FName MI.">
                </div>
                <!-- <div class="form-group-sm">
                    <label for="course">Course</label>
                    <select required name="course" class="form-control">
                         <option value="">*****Select Course*****</option>
                        <option value="BSIT">Computer Science</option>
                        <option value="COE">Biology</option>
                        <option value="BEE">Chemistry</option>
                        <option value="BSE">Physic</option>
                        <option value="BSA">Mathematics</option>
                        <option value="BSF">Geography</option>
                        <option value="BHRM">Economics</option>
                        <option value="BSHT">Political Science</option>
                        <option value="CRIMINOLOGY">Scoilogy</option>
                        <option value="MIDWIFERY">English</option>
                    </select>
                </div> -->
                <!-- <div class="form-group-sm">
                    <label for="year">Year</label>
                    <select required name="year" class="form-control">
                        <option value="">*****Select Level*****</option>
                        <option value="100Lvl">100Lvl</option>
                        <option value="200Lvl">200Lvl</option>
                        <option value="300Lvl">300Lvl</option>
                        <option value="4000Lvl">400Lvl</option>
                        
                    </select>
                </div> -->
                <div class="form-group-sm">
                    <label for="stud_id">Phone Number.</label>
                    <input required type="phone" name="stud_id" class="form-control">
                </div><hr>
                <div class="form-group-sm">
                    <input type="submit" name="submit" value="Submit" class="btn btn-info">
                    <a href="index.php" class="btn btn-info">Login</a>
                </div>
            </form>
        </div>

        
        </div>
    </div>
</div>
<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

</body>
</html>