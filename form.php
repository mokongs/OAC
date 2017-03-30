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

		

		<!--FORM-->
		<div class="ui grid">
    <div class="three wide column"></div>
    <div class="ten wide column">
      <br/>
      <h3 id="header">Reservation</h3>
      <form class="ui form segment" action="info.php" method="post">
        <p id="form-header">Personal Information</p>
        <div class="three fields">
          <div class="field">
            <label>First Name</label>
            <input placeholder="First Name" name="firstname" type="text">
          </div>
          
          <div class="field">
            <label>Middle Name</label>
            <input placeholder="Middle Name" name="middlename" type="text">
          </div>
          
          <div class="field">
            <label>Last Name</label>
            <input placeholder="Last Name" name="lastname" type="text">
          </div>
        </div>
        
        <div class="three fields">
          <div class="eight wide field">
            <label>Complete Address</label>
            <input placeholder="Address" name="address" type="text">
          </div>
    
          <div class="four wide field">
            <label>City</label>
            <input type="text" name="city" placeholder="City">
          </div>
          
          <div class="four wide field">
            <label>Country</label>
            <select class="ui fluid dropdown" name="country">
                    <option value="">Country</option>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Canada">Canada</option>
                    <option value="Denmark">Denmark</option>
                    <option value="England">England</option>
                    <option value="Finland">Finland</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Holland">Holland</option>
                    <option value="India">India</option>
                    <option value="Korea">Korea</option>
                    <option value="London">London</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russia</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="Zimbabwe">Zimbabwe</option>
              </select>
          </div>
        </div>
        
        <div class="two fields">
          <div class="eight wide field">
            <label>Email Address</label>
            <input placeholder="Email" name="email" type="email">
          </div>
    
          <div class="eight wide field">
            <label>Contact Number</label>
            <input type="text" name="contactnumber" placeholder="Contact Number">
          </div>  
        </div>
        

        <input class="ui primary submit button" type="submit" value="Submit">
        <div class="ui error message"></div>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
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
      </form>


    </div>
    <div class="three wide column"></div>

  
	</div> <!--UI GRID-->
  <br/><br/>
  
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
      $('.ui.form')
  .form({
    fields: {
      firstname: {
        identifier: 'firstname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your first name'
          }
        ]
      },
    middlename: {
        identifier: 'middlename',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your middle name'
          }
        ]
      },
    lastname: {
        identifier: 'lastname',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your last name'
          }
        ]
      },
    address: {
        identifier: 'address',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your address'
          }
        ]
      },
    city: {
        identifier: 'city',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your city'
          }
        ]
      },
    country: {
        identifier: 'country',
        rules: [
          {
            type   : 'empty',
            prompt : 'Please enter your country'
          }
        ]
      },
     email: {
        identifier: 'email',
        rules: [
          {
            type   : 'email',
            prompt : 'Please enter your email'
          }
        ]
      },
     contactnumber: {
        identifier: 'contactnumber',
        rules: [
          {
            type   : 'integer',
            prompt : 'Please enter your contact number'
          }
        ]
      }
    }
  })
;
    </script>

  </body>

</html>