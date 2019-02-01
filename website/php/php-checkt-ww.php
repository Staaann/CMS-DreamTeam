<? php 
require 	'wwconnect.php';

if (isset($_POST["reset-ww-knop"])) {
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["ww"];
	$passwordRepeat = $_POST["ww-repeat"];

	if(empty($password)|| empty($passwordRepeat)) {
		header("Location: register.php?newww=empty");
		exit();

	} else if ($password != $passwordRepeat ) {
		header("Location: register.php?newww=wwnotsame");
		exit();
	}

	$currentDate = date("U");


	$sql = "SELECT * FROM wwReset WHERE wwResetSelector=? AND wwResetExpires >= ?";
	$stmt = mysqli_stmt_init($conn);
	if (!mysli_stmt_prepare($stmt, $sql)) {
			echo "there was an error!";
			exit();
		}	else{
			mysqli_stmt_bind_param($stmt, "s", $selector, $currentDate);
			mysqli_stmt_execute($stmt);

			$result = mysqli_stmt_get_result($stmt);

			if (!$row = mysqli_fetch_assoc($result)) {
				echo "You need to re-submit your reset request.";
				exit(); } else{

					$tokenBin = hex2bin($validator);
					$tokenCheck = password_verify ($tokenBin, $row ["wwResetToken"]);

					if (&tokenCheck === false) {
						echo "You need to re-submit your reset request.";
						exit();
						} elseif (&tokenCheck === true) {
							$tokenEmail = $row ['wwResetEmail'];

							$sql = "SELECT * FROM users WHERE email=?;";

							$stmt = mysqli_stmt_init($conn);
							if (!mysli_stmt_prepare($stmt, $sql)) {
							echo "there was an error!";
							exit();
							}	else{ 
								mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
								mysqli_stmt_execute($stmt);

								if (!$row = mysqli_fetch_assoc($result)) {
								echo "there was an arror!";
								exit();
								 } else{
								 	$sql = "UPDATE user SET password=? WHERE email=?";

									 $stmt = mysqli_stmt_init($conn);
									if (!mysli_stmt_prepare($stmt, $sql)) {
									echo "there was an error!";
									exit();
									}	else{ 

									$newWWHash= password_hash($password, PASSWORD_DEFAULT);
									mysqli_stmt_bind_param($stmt, "ss", $newWWHash, $tokenEmail);
									mysqli_stmt_execute($stmt);

									$sql="DELETE FROM wwReset WHERE wwResetEmail=?";
									$stmt = mysqli_stmt_init($conn);
									if (!mysqli_stmt_init($stmt, $sql)) {
										echo "there is an error! ";
										exit();

									}else{
										mysqli_stmt_bind_param($stmt, "s" $tokenEmail);
										mysqli_stmt_execute($stmt);
										header("Location: register.php")
									}

									}

									}
						}
				}
		}


}else{
	header("Location: index.php")
}


?>