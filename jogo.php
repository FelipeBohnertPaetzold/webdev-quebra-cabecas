<?php require_once './mostrar_array_jogo.php' ?>
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
                        <?php if(!$atual[$l][$c]) : ?>
                            <td><img width="100px" src="./question.png" /></td>
                            <?php else: ?>
                                <td><img width="100%" src="imagens/<?php echo $atual[$l][$c]?>.jpg" /></td>
                        <?php endif; ?>
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
                        <?php if(!$embaralhado[$l][$c]) : ?>
                            <td><img width="100px" src="./check.png" /></td>
                        <?php else: ?>
                            <td><img width="100%" src="imagens/<?php echo $embaralhado[$l][$c]?>.jpg" /></td>
                        <?php endif; ?>
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
                <form action="jogo.php" method="get">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Linha Origem</label>
                        <input type="number" class="form-control" name="linha_origem" placeholder="Linha origem" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Coluna Origem</label>
                        <input type="number" class="form-control" name="coluna_origem" placeholder="Coluna origem" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Linha Destino</label>
                        <input type="number" class="form-control" name="linha_destino" placeholder="Linha destino" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputPassword1">Coluna destino</label>
                        <input type="number" class="form-control" name="coluna_destino" placeholder="Coluna destino" required>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary float-right">
                            <i class="glyphicon glyphicon-ok"></i>
                            Mover
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</html>