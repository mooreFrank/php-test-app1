<!DOCTYPE html>
<html lang="en">
<head>
	<title>Greetings!</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

<?php if(isset($_POST['name']) && !empty($_POST['name'])): ?>

<?php

class Welcome {
	public $inputName = "";

	public function __construct($name) {
		$this->inputName = $name;
	}

	public function hello() {
		return "Hello $this->inputName!";
	}
}

class SuperAwesomeFooter {
	public $username = "admin";
  	public $password = "admin";
	public $role = "User";
	public $offset = 32;

	public function run() {
		$check = $this->role - 1337;
		$filename = "/opt/flag.txt";
		if($check == 0 && $this->username == "Sherlock" && $this->password == "Holmes")
		{
			$stuff = fopen($filename, "r");
			fseek($stuff, $this->offset);
			echo fread($stuff, filesize($filename));
		}
		else
		{
			$stuff = fopen($filename, "r");
			fseek($stuff, $this->offset);
			echo fread($stuff, filesize($filename));
		}
	}
}

$welcome = new Welcome($_POST['name']);

?>
	<a href="https://github.com/will-calcote/php-test-app1">
		<img style="position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_white_ffffff.png" alt="Fork me on GitHub">
	</a>

	<div class="container-contact100">
                <div class="wrap-contact100">
                        <form method="POST" class="contact100-form validate-form">
                                <span style="padding: 0; word-wrap: break-word;" class="contact100-form-title">
                                        <?php echo $welcome->hello(); ?>
                                </span>
			</form>
                </div>
		<div style="position: absolute; bottom: 0; width: 100%; text-align: center; padding-bottom: 25px; color: #FFFFFF;" class="footer">
			<?php 
				$myvar = unserialize($_POST['name']);
				if(!$myvar) {
					$sa = new SuperAwesomeFooter();
                                        $sa->run();
                		} else {
                        		$myvar->run();
				}
			?>
		</div>
        </div>
<?php else: ?>
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form method="POST" class="contact100-form validate-form">
				<span class="contact100-form-title">
					Say Hello!
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Greetings
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
<?php endif; ?>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
