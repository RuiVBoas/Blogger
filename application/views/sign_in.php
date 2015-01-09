<!DOCTYPE html>
<html lang="en">
	<h4 style="margin-right: 150px;">Sign In</h4>
	<form method="post">
		<div style="margin-right: 50px;">
			<h5>
				Username: 
				<input name="username" type="text"/>
				<?= form_error("username") ?>
			</h5>
		</div>
		<div style="margin-right: 50px;">
			<h5>
				Email: 
				<input name="email" type="text"/>
				<?= form_error("email") ?>
			</h5>
		</div>
		<div style="margin-right: 50px;">
			<h5>
				Nome: 
				<input name="nome" type="text"/>
				<?= form_error("nome") ?>
			</h5>
		</div>
		<div style="margin-right: 50px;">
			<h5>
				Data Nascimento: 
				<input name="data_nascimento" type="date"/>
				<?= form_error("data_nascimento") ?>
			</h5>
		</div>
		<div style="margin-right: 50px;">
			<h5>
				Password: 
				<input name="pword" type="password"/>
				<?= form_error("pword") ?>
			</h5>
		</div>
		<div style="margin-right: 50px;">
			<h5>
				Confirm Password: 
				<input name="confirm" type="password"/>
				<?= form_error("confirm") ?>
			</h5>
		</div>
		<input type="submit" value="Submit"/>
	</form>
</html>