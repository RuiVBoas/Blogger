<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Home fst_pag</title>
	</head>
	<body>
		<form method="post">
		<div>
			<h5>
				Título:
				<input name="titulo" type="text"/>
				<?= form_error("titulo")?>
			</h5>
		</div>
		<div>
			<h5>
				Conteúdo:
				<input name="conteudo" type="text" class="textBox" style="width:300px; height:300px" size="500"/>
				<?= form_error("conteudo")?>
			</h5>
		</div>
		<div>
			<h5>
				Autor:
				<input name="autor" type="text"/>
				<?= form_error("autor")?>
			</h5>
		</div>
		<input type="submit" value="Submit"/>
		</form>
	</body>
</html>
