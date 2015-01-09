<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home fst_pag</title>

		<script src="<?= base_url() ?>/source/scripts/test.js" type="text/javascript"></script>
		<link rel="stylesheet" type="text/css" href="<?=base_url()?>/source/css/stylesheet.css" />

	</head>
	<body>
		<a href="<?= site_url('fst_pag/sign_in_open'); ?>">Sign In</a>
		<form method="post">
			<div id="container" align="center">
				<h1>Login<h1>
				<div>
					<h6>
						Username: 
						<input name="username" type="text">
						<?= form_error("username") ?>
					</h6>
				</div>
				<div>
					<h6>
						Password: 
						<input name="pword" type="password">
						<?= form_error("pword") ?>
					</h6>
				</div>
				<input type="submit" value="Login">
			</div>
		</form>
	</body>
</html>