<html>
	<head>
		<link rel="stylesheet" href="src/dist/semantic.min.css">
		<link rel="stylesheet" href="src/admin.css">
		<link rel="stylesheet" href="src/iziModal.min.css">
		<link rel="stylesheet" type="text/css" href="src/lightbox2-master/dist/css/lightbox.min.css">
    <link rel="icon" type="image/png" href="src/img/favicon.png">
    <title>One Asia Center</title>
	</head>

	<body>
		<!--HERO-->
		<div class = "parallax-window" data-parallax="scroll" data-image-src="src/img/hero.png">
			 
	<!--BANNER CONTENT-->
		<div class="ui grid">
			<div class="three wide column"></div>
			<div class="six wide column">
				<form class="ui form segment">
  					<h3>LOG IN</h3>
    					<div class="field">
      						<label>Username</label>
      						<input placeholder="Username" name="username" type="text">
    					</div>
    					<div class="field">
      						<label>Password</label>
      						<input type="password" name="password">
 						</div>
  					<div class="ui primary submit button">Login</div>
  					<div class="ui error message"></div>
				</form>
			</div>
			<div class="three wide column"></div>
		</div><!--UI GRID-->	
		
		</div><!--PARALLAX-->
	

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
	<script>
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
	<script src="src/lightbox2-master/dist/js/lightbox.min.js"></script>
	</body>

</html>
