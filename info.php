<?php
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password);
	$db = "USE db_oneasia;";
	mysqli_query($conn, $db);

	/*$table = "CREATE TABLE tbl_customer(
			customer_id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			customer_fname NVARCHAR(20) NOT NULL,
			customer_mname NVARCHAR(20) NOT NULL,
			customer_lname NVARCHAR(20) NOT NULL,
			customer_address NVARCHAR(30) NOT NULL,
			customer_city NVARCHAR(20) NOT NULL,
			customer_country NVARCHAR(20) NOT NULL,
			customer_email NVARCHAR(20) NOT NULL,
			customer_cno INT(20) NOT NULL);
			";
	mysqli_query($conn, $table);*/

	$fname = $_POST['firstname'];
	$mname = $_POST['middlename'];
	$lname = $_POST['lastname'];
	$address = $_POST['address'];
	$city = $_POST['city'];
	$country = $_POST['country'];
	$email = $_POST['email'];
	$cno = $_POST['contactnumber'];

	$insert = "INSERT INTO tbl_customer(
				customer_id, customer_fname, customer_mname, customer_lname, customer_address, customer_city, customer_country, customer_email, customer_cno)
				VALUES ('', '$fname', '$mname', '$lname', '$address', '$city', '$country', '$email', '$cno')";
	      mysqli_query($conn, $insert);

?>


<html>
	<head>
		<link rel="stylesheet" href="src/dist/semantic.min.css">
		<link rel="stylesheet" href="src/custom.css">
		<link rel="stylesheet" href="src/iziModal.min.css">
    <link rel="icon" type="image/png" href="src/img/favicon.png">
    <title>One Asia Center</title>

    <style>
      .ui.form.segment {
        width: 900px;

      }
    </style>
	</head>

	<body>
    <!--HERO-->
    <div class="parallax-window" data-parallax="scroll" data-image-src="src/img/hero.png">

        <!--BANNER CONTENT-->
      <div class="ui grid">
          <div class="four column row">
            <div class="left floated column" id="logo"><img src="src/img/oac+logo.png"></div>
          </div>
          <div id="hero-content"><p>Take your business to the next level.</p></div>           
        </div>  
    </div>

    <!--LIL NAV-->
    <div class="ui three top attached steps">
        <a class="step" href="services.html">
          <i class="settings icon"></i>
            <div class="content">
                <div class="title lilnavtitle">Services</div>
                <div class="description">Choose from our services</div>
            </div>
        </a>
  
        <a class="step" href="testimonials.html">
          <i class="quote left icon"></i>
            <div class="content">
                <div class="title lilnavtitle">Testimonials</div>
                <div class="description">Hear from the people who loved us</div>
            </div>
        </a>
  
        <a class="step" href="business-resources.html">
          <i class="info icon"></i>
            <div class="content">
                <div class="title lilnavtitle">Business Resources</div>
                <div class="description">Helping you start a business</div>
            </div>
        </a>
    </div>

    <!--SUMMARY-->
    <div class="ui grid">
    	<div class="three wide column"></div>
    	<div class="ten wide column">
    		<br/>
    		<center><h3>Summary of Transactions</h3>
    				<table class="ui very basic table">
    					<tr>
    						<th>Name:</th>
    						<td><?php echo $fname." ".$mname." ".$lname ?></td>
    					</tr>

    					<tr>
    						<th>Address:</th>
    						<td><?php echo $address.", ".$city.", ".$country ?></td>
    					</tr>

    					<tr>
    						<th>Email:</th>
    						<td><?php echo $email ?></td>
    					</tr>

    					<tr>
    						<th>Contact Number:</th>
    						<td><?php echo $cno ?></td>
    					</tr>

    					<tr>
    						<th>Booking date:</th>
    						<td><?php $date = date('Y-m-d H:i:s'); echo $date ?></td>
    					</tr>
    				</table>

    				<?php

    				$servername = "localhost";
    				$username = "root";
    				$password = "";

   					$conn1 = mysqli_connect($servername, $username, $password);
   					$db1 = "USE db_oneasia;";
					mysqli_query($conn1, $db1);


   					$select1 = "SELECT * FROM tbl_list;";
   					$result1 = mysqli_query($conn1, $select1);

		   			if (mysqli_num_rows($result1)>0) {
   						echo "<table class='ui striped table'>";
   						echo "<tr>"; 
   						echo "<th style='padding: 15px 0px'>List ID</th>";
   						echo "<th style='padding: 15px 0px'>Room Name</th>";
   						echo "<th style='padding: 15px 0px'>Check in</th>";
   						echo "<th style='padding: 15px 0px'>Check out</th>";
   						echo "</tr>";
   					while ($row1 = mysqli_fetch_array($result1)){
   						echo "<tr>";
   						echo "<td>".$row1['list_id']."</td>";
   						echo "<td>".$row1['room_name']."</td>";
   						echo "<td>".$row1['checkin']."</td>";
   						echo "<td>".$row1['checkout']."</td>";
   						echo "</tr>";
   						}
   					echo "</table>";
   					}

        $truncate = "TRUNCATE tbl_list;";
        mysqli_query($conn, $truncate);
   			mysqli_close($conn1);
   		?>


   		<!--<button class="ui positive button"><a href="status.php" id="form">Proceed</a></button>-->
    		</center>
    	</div>
    	<div class="three wide column"></div>
    </div>

      <!--MAP-->
  <br/><br/><br/>
  <center><img src="src/img/map.png" id="map"></center>

  <!--FOOTER-->
  <footer>
    <center>
    <div class="copy">&copy; One Asia Center - All Rights Reserved</div>
    <ul class="footer-nav">
      <li class="footer-link"><a href="#" id="footer"><i class="facebook icon"></i></a></li>
      <li class="footer-link"><a href="#" id="footer"><i class="instagram icon"></i></a></li>
      <li class="footer-link"><a href="#" id="footer"><i class="linkedin icon"></i></a></li>
      <li class="footer-link"><a href="#" id="footer"><i class="twitter icon"></i></a></li>
    </ul>
    <ul class="footer-nav">
      <li class="footer-link"><a href="about.html" id="footer">About</a></li>
      <li class="footer-link"><a href="contact.html" id="footer">Contact Us</a></li>
    </ul>
  </center>
  </footer>

  <!--SCRIPT-->
  <script src="src/jquery.js"></script>
  <script src="src/dist/semantic.min.js"></script>
  <script src="src/parallax.min.js"></script>
  <script src="src/iziModal.min.js"></script>
  <script>
     $("#modal").iziModal({
        overlayClose: true,
        width: 600,
        autoOpen: false,
        overlayColor: 'rgba(0, 0, 0, 0.6)',
      });
    $(document).on('click', '.trigger', function (event) {
          event.preventDefault();
      $('#modal').iziModal('open');
          });
  </script>
  <SCRIPT>
    $('.tabular.menu .item').tab();
  </script>
  <script>
    $('.ui.checkbox')
        .checkbox()
      ;
  </script>
  <script>
    $('.special.cards .image').dimmer({
        on: 'hover'
        });
  </script>
  <script>$('.activating.element')
  .popup()
;</script>
<script>
  $('.ui.dropdown')
  .dropdown()
;
</script>
</body>
</html>