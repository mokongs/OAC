<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

	$room = $_POST['roomname'];
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];

	$conn = mysqli_connect($servername, $username, $password);

	/*$db = "CREATE DATABASE db_oneasia;";
	mysqli_query($conn, $db);
	*/

	$db = "USE db_oneasia;";
	mysqli_query($conn, $db);

	/*$table = "CREATE TABLE tbl_list(
				list_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				room_name NVARCHAR(30) NOT NULL,
				checkin DATE NOT NULL,
				checkout DATE NOT NULL
				)";
	mysqli_query($conn, $table); */

 

	$insert = "INSERT INTO tbl_list (list_id, room_name, checkin, checkout) VALUES ('','$room','$checkin','$checkout')";
	mysqli_query($conn, $insert);

  $insert1 = "INSERT INTO tbl_transaction (transaction_id, customer_id, room_name) VALUES ('',1,'$room')";
  mysqli_query($conn, $insert1);
 

	mysqli_close($conn);


?>

<html>
	<head>
		<link rel="stylesheet" href="src/dist/semantic.min.css">
		<link rel="stylesheet" href="src/custom.css">
		<link rel="stylesheet" href="src/iziModal.min.css">
    <link rel="icon" type="image/png" href="src/img/favicon.png">
    <title>One Asia Center</title>
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

    <!--SERVICES MENU-->
    <div class="ui grid">
    <div class="four wide column">
     <div class="ui secondary vertical pointing menu">
      <h4>Our Services:</h4>
      <a class="active item" href="services.html">Serviced Offices</a>
      <a class="item" href="virtual.html">Virtual Offices</a>
      <a class="item" href="meeting.html">Meeting Rooms</a>
      <a class="item" href="training.html">Training & Events Facilities</a>
      <a class="item" href="bss.html">Business Support Services</a>
     </div></div>
   <div class="ten wide column">
   	<br/><br/>
   	<h4>Reservation List</h4>
   		<?php
   			$conn = mysqli_connect($servername, $username, $password);
   			$db = "USE db_oneasia;";
			mysqli_query($conn, $db);


   			$select = "SELECT * FROM tbl_list;";
   			$result = mysqli_query($conn, $select);

   			if (mysqli_num_rows($result)>0) {
   				echo "<table class='ui striped table'>";
   				echo "<tr>"; 
   				echo "<th style='padding: 15px 0px'>List ID</th>";
   				echo "<th style='padding: 15px 0px'>Room Name</th>";
   				echo "<th style='padding: 15px 0px'>Check in</th>";
   				echo "<th style='padding: 15px 0px'>Check out</th>";
   				echo "</tr>";
   			while ($row = mysqli_fetch_array($result)){
   				echo "<tr>";
   				echo "<td>".$row['list_id']."</td>";
   				echo "<td>".$row['room_name']."</td>";
   				echo "<td>".$row['checkin']."</td>";
   				echo "<td>".$row['checkout']."</td>";
   				echo "</tr>";
   				}
   				echo "</table>";
   			}


   			mysqli_close($conn);
   		?>
   			<button class="ui positive button"><a href="form.php" id="form">Proceed</a></button>
   </div>
   <div class="two wide column"></div>
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
<script>
  function myFunction(){
    alert("Successfully added to list!");
  }
</script>

  </body>

</html>