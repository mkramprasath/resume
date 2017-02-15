<!DOCTYPE html>
<html>
<title>contact</title>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-20775561-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>
	</head>

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
  <ul class=" w3-navbar w3-white w3-large ">
  <li><a href="index.php" class="w3-blue">Home Page</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="project.php">Project</a></li>
  <li><a href="goodpeople.php">Good People</a></li>
  

</ul>
  <h2> <center> <strong>CONTACT</strong> </center> </h2>
		<p class="heading__subtitle"> <center> CURRENTLY AVAILABLE FOR FULL-TIME WORK. AND WOULD LOVE TO HEAR FROM YOU. </center> </p>
		
    <!-- Left Column -->
 <div class="w3-half">
	<div class="w3-white w3-text-grey w3-card-4">
        
	<div class="w3-container">
	
	   <p><i class="fa fa-home w3-margin-right w3-large w3-text-teal"></i>29'A', "Ram Kudil", Anna Street, Thanikai Nagar, Tirunagar, Madurai - 625 006.</p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>manderam89@gmail.com</p>
		    <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>+91-9566822148</p>
			<p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>0452-2485152</p>
		  <a style="color:blue;" href=" https://www.linkedin.com/in/ramprasathmk"> Linkedin</a> /
   <a style="color:blue;" href="https://twitter.com/RamMande">  Twitter</a> /
   <a style="color:blue;" href="https://www.facebook.com/ram.prasath.9237"> Facebook</a>
          
	</div>
</div>

<br>
<hr>
    <!-- End Left Column -->
    </div>
	 <!-- Right Column -->
    <div class="w3-half">
	<div class="w3-white w3-text-grey w3-card-4">
	   <div class="w3-container">
	   
	   <h3><center> JUST MESSAGE ME BUDDY!! </center></h3>
	   </div>
		<div class="w3-container-fluid">
		 <div class="row">
		 <div class="col-xs-12 col-md-11 col-md-centered col-lg-10 col-lg-push-1">
		
		 <?php
	include_once('class.phpmailer.php');
	include_once('class.smtp.php');
?>
<html>
<head>
<style>
html,body,h1,h2,h3,h4,h5,h6 
{
	font-family: "Roboto", sans-serif
}
 form {
        text-align: center;
    }
	
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 10px 22px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}

.button:hover {
    background-color: #4CAF50;
    color: white;
	 box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}	

input[type=text] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
   
    border-radius: 4px;
}
input[type=tel] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
   
    border-radius: 4px;
}

 
</style>
</head>
	<body>
		<form name="form-mail" method="post" align="center">
<table width="450px">
<tr>
<td><h4 style="color:black;">Name:</h4></td>
<td>
<input type="text" name="txtFirstName" placeholder="Name"/><br>
</td>
</tr>






<tr>
<td><h4 style="color:black;">
Email:</h4>
</td>
<td>
<input type="text" name="txtEmail" placeholder="Email Id" /><br>
</td>
</tr>


<tr>	
<td><h4 style="color:black;">
MobileNumber:</h4>
</td>
<td>
<input type="tel" name="txtContact" placeholder="Number" /> <br>
</td>
</tr>

<tr>	
<td><h4 style="color:black;">
Message:</h4>
</td>
<td>
<textarea name="txtMessage"  col="50" row="5"> </textarea><br>
</td>
</tr>


<tr>
<td>
<input type="submit" class="button" name="butSubmit" value="Submit" /><br><br>

</td>
</tr>
</table>
</form>		
	</body>
</html>
<?php

if(isset($_POST['butSubmit'])){
	
	$mail = new PHPMailer;
	
	$mail->isSMTP();
	
	/*$mail->SMTPDebug = 2;*/
	
	$mail->Debugoutput = 'html';
	
	$mail->Host = 'smtp.gmail.com';
	
	$mail->Port = 587;
	
	$mail->SMTPSecure = 'tls';
	
	$mail->SMTPAuth = true;
	
	$mail->Username = "mailtoniitsmtp@gmail.com";
	
	$mail->Password = "8760889160";
	
	$mail->setFrom($_POST['txtEmail'], $_POST['txtFirstName']);
	
	$mail->addAddress('manderam89@gmail.com', 'SELF');
	
	$mail->Subject = 'PHPMailer GMail SMTP test';
	
	$data='First Name : ' . $_POST['txtFirstName'] .'<br>';
	
	$data.='Contact : ' . $_POST['txtContact'] .'<br>';
	$data.='Message : ' . $_POST['txtMessage'] .'<br>';
	$mail->msgHTML('<html><body><h1>'. $data . '</h1></body></html>');
	
	
	
	if (!$mail->send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	$message = "Thank You for contacting!!!!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	 
	}
}
?>
</div>
</div>
</div>
</div>        
	
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- footer -->
<br>
<footer class="w3-container w3-teal w3-center w3-margin-top">
<small class="contact">
                    
  <p>Lets get in touch.</p>	

 
  
   <a href=" https://www.linkedin.com/in/ramprasathmk"> <i class="fa fa-linkedin w3-hover-text-indigo w3-large  "></i></a>
   <a href="https://twitter.com/RamMande">  <i class="fa fa-twitter w3-hover-text-light-blue w3-large"></i></a>
   <a href="https://www.facebook.com/ram.prasath.9237"> <i class="fa fa-facebook w3-hover-text-indigo w3-large  "></i></a>
   
  <!-- end of footer -->
</footer>

</body>
</html>







