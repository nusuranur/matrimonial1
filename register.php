<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>
<<<<<<< HEAD
<?php register(); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony
 | Register :: Matrimony
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!--font-Awesome-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!--font-Awesome-->
=======
<?php 
// Call register() and capture any feedback message
$message = register() ?: ['type' => 'error', 'text' => 'Registration failed.'];
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner - Matrimony | Register :: Matrimony</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> 
    addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
    function hideURLbar(){ window.scrollTo(0,1); } 
</script>

<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">

<!-- Custom style for background -->
<style>
.grid_3 {
    background-image: url('images/pic12.png'); /* Ensure this path is correct */
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
    padding: 50px 0;
}

/* Style for feedback messages */
.message {
    text-align: center;
    margin-bottom: 20px;
    padding: 10px;
    border-radius: 5px;
}

.message.success {
    color: green;
    background-color: #e0ffe0;
}

.message.error {
    color: red;
    background-color: #ffe0e0;
}
</style>

>>>>>>> 9ea47ce (Initial commit with .gitignore)
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
<<<<<<< HEAD
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
=======
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
>>>>>>> 9ea47ce (Initial commit with .gitignore)
            $(this).toggleClass('open');       
        }
    );
});
</script>
<<<<<<< HEAD

</head>
<body>
<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
=======
</head>
<body>

<!-- ============================  Navigation Start =========================== -->
<?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->

>>>>>>> 9ea47ce (Initial commit with .gitignore)
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
<<<<<<< HEAD
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
	  	    <div class="form-group">
		      <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="name" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="password" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text required">
		    </div>
		    <div class="form-group">
		      <label for="edit-name">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-name" name="email" value="" size="60" maxlength="60" class="form-text required">
		    </div>
		    <div class="age_select">
		      <label for="edit-pass">Age <span class="form-required" title="This field is required.">*</span></label>
=======
        <span class="divider"> | </span>
        <li class="current-page">Register</li>
     </ul>
   </div>
   <!-- Display feedback message if exists -->
   <?php if (!empty($message)): ?>
       <div class="message <?php echo $message['type']; ?>">
           <?php echo $message['text']; ?>
       </div>
   <?php endif; ?>
   <div class="services">
   	  <div class="col-sm-6 login_left">
	     <form action="" method="POST">
		     <div class="form-group">
                <label for="edit-name">Username <span class="form-required" title="This field is required.">*</span></label>
                <input type="text" id="edit-name" name="name" value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>" size="60" maxlength="60" class="form-text red-box">
            </div>

		    <div class="form-group">
		      <label for="edit-pass">Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-pass" name="pass" size="60" maxlength="128" class="form-text red-box">
		    </div>
		    <div class="form-group">
		      <label for="edit-pass-confirm">Confirm Password <span class="form-required" title="This field is required.">*</span></label>
		      <input type="text" id="edit-pass-confirm" name="pass_confirm" size="60" maxlength="128" class="form-text red-box">
		    </div>
		    <div class="form-group">
		      <label for="edit-email">Email <span class="form-required" title="This field is required.">*</span></label>
		      <input type="email" id="edit-email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" size="60" maxlength="255" class="form-text red-box">
		    </div>
        <div class="form-group">
    <label for="edit-religion">Religion <span class="form-required" title="This field is required.">*</span></label>
    <select name="religion" id="edit-religion" class="form-text red-box" required>
        <option value="">Select Religion</option>
        <?php
        $religions = ['Hindu', 'Muslim', 'Christian', 'Sikh', 'Jain', 'Buddhist', 'Parsi', 'Jewish', 'Other'];
        foreach ($religions as $religionOption) {
            $selected = (isset($_POST['religion']) && $_POST['religion'] === $religionOption) ? 'selected' : '';
            echo "<option value=\"$religionOption\" $selected>$religionOption</option>";
        }
        ?>
    </select>
</div>

		    <div class="age_select">
		      <label for="edit-pass">Date of Birth <span class="form-required" title="This field is required.">*</span></label>
>>>>>>> 9ea47ce (Initial commit with .gitignore)
		        <div class="age_grid">
		         <div class="col-sm-4 form_box">
                  <div class="select-block1">
                    <select name="day">
	                    <option value="">Date</option>
<<<<<<< HEAD
	                     <option value="1">1</option>
		                    <option value="2">2</option>
		                    <option value="3">3</option>
		                    <option value="4">4</option>
		                    <option value="5">5</option>
		                    <option value="6">6</option>
		                    <option value="7">7</option>
		                    <option value="8">8</option>
		                    <option value="9">9</option>
		                    <option value="10">10</option>
		                    <option value="11">11</option>
		                    <option value="12">12</option>
		                    <option value="13">13</option>
		                    <option value="14">14</option>
		                    <option value="15">15</option>
		                    <option value="16">16</option>
		                    <option value="17">17</option>
		                    <option value="18">18</option>
		                    <option value="19">19</option>
		                    <option value="20">20</option>
		                    <option value="21">21</option>
		                    <option value="22">22</option>
		                    <option value="23">23</option>
		                    <option value="24">24</option>
		                    <option value="25">25</option>
		                    <option value="26">26</option>
		                    <option value="27">27</option>
		                    <option value="28">28</option>
		                    <option value="29">29</option>
		                    <option value="30">30</option>
		                    <option value="31">31</option>
                    </select>
                  </div>
            </div>
            <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
	                    <option value="01">January</option>
	                    <option value="02">February</option>
	                    <option value="03">March</option>
	                    <option value="04">April</option>
	                    <option value="05">May</option>
	                    <option value="06">June</option>
	                    <option value="07">July</option>
	                    <option value="08">August</option>
	                    <option value="09">September</option>
	                    <option value="10">October</option>
	                    <option value="11">November</option>
	                    <option value="12">December</option>
=======
	                    <?php for ($i=1; $i<=31; $i++) echo "<option value=\"$i\" " . (isset($_POST['day']) && $_POST['day'] == $i ? 'selected' : '') . ">$i</option>"; ?>
                    </select>
                  </div>
                </div>
                <div class="col-sm-4 form_box2">
                   <div class="select-block1">
                    <select name="month">
	                    <option value="">Month</option>
	                    <?php 
	                    $months = array(
	                      "01" => "January", "02" => "February", "03" => "March", "04" => "April",
	                      "05" => "May", "06" => "June", "07" => "July", "08" => "August",
	                      "09" => "September", "10" => "October", "11" => "November", "12" => "December"
	                    );
	                    foreach ($months as $num => $name) echo "<option value=\"$num\" " . (isset($_POST['month']) && $_POST['month'] == $num ? 'selected' : '') . ">$name</option>";
	                    ?>
>>>>>>> 9ea47ce (Initial commit with .gitignore)
                    </select>
                  </div>
                 </div>
                 <div class="col-sm-4 form_box1">
                   <div class="select-block1">
                    <select name="year">
	                    <option value="">Year</option>
<<<<<<< HEAD
		                    <option value="1980">1980</option>
		                    <option value="1981">1981</option>
		                    <option value="1981">1981</option>
		                    <option value="1983">1983</option>
		                    <option value="1984">1984</option>
		                    <option value="1985">1985</option>
		                    <option value="1986">1986</option>
		                    <option value="1987">1987</option>
		                    <option value="1988">1988</option>
		                    <option value="1989">1989</option>
		                    <option value="1990">1990</option>
		                    <option value="1991">1991</option>
		                    <option value="1992">1992</option>
		                    <option value="1993">1993</option>
		                    <option value="1994">1994</option>
		                    <option value="1995">1995</option>
		                    <option value="1996">1996</option>
		                    <option value="1997">1997</option>
		                    <option value="1998">1998</option>
		                    <option value="1999">1999</option>
		                    <option value="2000">2000</option>
		                    <option value="2001">2001</option>
		                    <option value="2002">2002</option>
		                    <option value="2003">2003</option>
		                    <option value="2004">2004</option>
		                    <option value="2005">2005</option>
		                    <option value="2006">2006</option>
=======
	                    <?php 
	                    for ($y = 1980; $y <= 2006; $y++) echo "<option value=\"$y\" " . (isset($_POST['year']) && $_POST['year'] == $y ? 'selected' : '') . ">$y</option>"; 
	                    ?>
>>>>>>> 9ea47ce (Initial commit with .gitignore)
                    </select>
                   </div>
                  </div>
                  <div class="clearfix"> </div>
                 </div>
              </div>
              <div class="form-group form-group1">
                <label class="col-sm-7 control-lable" for="sex">Sex : </label>
                <div class="col-sm-5">
                    <div class="radios">
				        <label for="radio-01" class="label_radio">
<<<<<<< HEAD
				            <input type="radio" name="gender" value="male" checked> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female"> Female
=======
				            <input type="radio" name="gender" value="male" <?php echo (!isset($_POST['gender']) || $_POST['gender'] == 'male') ? 'checked' : ''; ?>> Male
				        </label>
				        <label for="radio-02" class="label_radio">
				            <input type="radio" name="gender" value="female" <?php echo (isset($_POST['gender']) && $_POST['gender'] == 'female') ? 'checked' : ''; ?>> Female
>>>>>>> 9ea47ce (Initial commit with .gitignore)
				        </label>
	                </div>
                </div>
                <div class="clearfix"> </div>
             </div>
			  
			  <div class="form-actions">
			    <input type="submit" id="edit-submit" name="op" value="Submit" class="btn_1 submit">
			  </div>
		 </form>
	  </div>
	  <div class="col-sm-6">
	     <ul class="sharing">
			<li><a href="#" class="facebook" title="Facebook"><i class="fa fa-boxed fa-fw fa-facebook"></i> Share on Facebook</a></li>
		  	<li><a href="#" class="twitter" title="Twitter"><i class="fa fa-boxed fa-fw fa-twitter"></i> Tweet</a></li>
		  	<li><a href="#" class="google" title="Google"><i class="fa fa-boxed fa-fw fa-google-plus"></i> Share on Google+</a></li>
		  	<li><a href="#" class="linkedin" title="Linkedin"><i class="fa fa-boxed fa-fw fa-linkedin"></i> Share on LinkedIn</a></li>
		  	<li><a href="#" class="mail" title="Email"><i class="fa fa-boxed fa-fw fa-envelope-o"></i> E-mail</a></li>
		 </ul>
	  </div>
	  <div class="clearfix"> </div>
   </div>
  </div>
</div>

<<<<<<< HEAD

<?php include_once("footer.php");?>
=======
<?php include_once("footer.php");?>


>>>>>>> 9ea47ce (Initial commit with .gitignore)
