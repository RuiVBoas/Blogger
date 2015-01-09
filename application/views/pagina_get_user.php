<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home fst_pag</title>
	</head>
	<body>
		<button><a href="<?= site_url('fst_pag/go_to_parte_minha'); ?>"> Create a new post</a></button>
	</body>
	<ul>
		<?php for($i=0; isset($lista_users[$i]); $i++){ ?>
			<li><?= $lista_users[$i]->username ?></li>
		<?php	} ?> 
	</ul>
</html>