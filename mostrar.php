<?php require_once './retorna_array_inicial.php' ?>
<html>
	<head>
		<style>
			*{padding:0; margin:0; border:0;}
			table {border:0; border-spacing: 10px;}
			table tr td{padding:0; margin:0}
		</style>
	</head>
	<body>
		<table>
			<?php for ($l = 0; $l < 6; $l ++) : ?>
			<tr>
				<?php for($c=1; $c < 8; $c++) : ?>
				<td><img src="imagens/<?php echo $mesa[$l][$c]?>.jpg" /></td>
				<?php endfor; ?>
			</tr>
			<?php endfor; ?>
		</table>
	</body>
</html>