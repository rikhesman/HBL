<?php
include ('../includes/autoloader.php');
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		include ('../build/head.php');
		?>
	</head>
	<body>
		<?php
		if (!isset($_SESSION['use'])) {// If session is not set that redirect to Login Page
			include ('../build/navbar.php');
		} else {
			include ('../build/navbarlogout.php');
		}
		?>

		<div class="row">
			<div class="col-md-4">
				<!--Linker kant-->
			</div>
			<div class="col-md-4">
				<form method="post" accept-charset="utf-8">

					<p>
						<select required class="form-control" name="Ouder">
							<?php
							foreach (accountManagement::getParents() as $parent) {
								echo'
								<option value="'.$parent['username'].'">'.$parent['username'].'</option>';
							}
							?>
						</select>

						<select required class="form-control" name="Kind">
							<?php
							foreach (accountManagement::getChild() as $child) {
								echo'
								<option value="'.$child['username'].'">'.$child['username'].'</option>';
							}
							?>
						</select>

					</p>
			</div>
	</body>
</html>