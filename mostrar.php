<?php require_once './retorna_array_inicial.php' ?>
<html>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<head>
		<style>
			*{padding:0; margin:0; border:0;}
			table {border:0; border-spacing: 10px;}
			table tr td{padding:1px; margin:0}
            hr {margin 20px;}
            .float-right {float: right;}
		</style>
	</head>
	<body>

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">Quebra cabeças</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="col-md-8">
            <table>
                <tbody>
                <?php for ($l = 0; $l < 6; $l ++) : ?>
                    <tr>
                        <?php for($c=1; $c < 8; $c++) : ?>
                            <td><img src="imagens/<?php echo $mesa[$l][$c]?>.jpg" /></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
            <hr>
            <table>
                <tbody>
                <?php for ($l = 0; $l < 6; $l ++) : ?>
                    <tr>
                        <?php for($c=1; $c < 8; $c++) : ?>
                            <td><img src="imagens/<?php echo $mesa[$l][$c]?>.jpg" /></td>
                        <?php endfor; ?>
                    </tr>
                <?php endfor; ?>
                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <div class="panel panel-primary">
                <div class="panel-heading">Mover</div>
                <div class="panel-body">
                    <a href="./jogo.php" class="btn btn-lg btn-primary btn-block">
                        <i class="glyphicon glyphicon-play"></i> Iniciar novo jogo
                    </a>
                </div>
            </div>
        </div>
    </div>
</html>