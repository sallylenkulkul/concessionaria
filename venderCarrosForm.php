<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vender Carro</title>
</head>
<body>
    <h1> Carro <?=$_GET['modelo'];?> </h1>
    <form action='venderCarro.php' method="post">
        <input type="hidden" name="idCarro" value="<?=$id?>">
        <select name="idConcessionaria">
            <?php
            foreach($concessionaria as $c) { ?>
                <option value="<?=$c['idconcessionaria']?>">
                <?=$c['concessionaria']?>
            </option>
            <?php } ?>
        </select>

        <select name="clientes">
            <?php
            foreach($clientes as $c) { ?>
                <option value="<?=$c['idclientes']?>">
                <?=$c['nomecliente']?>
            </option>
            <?php } ?>
        </select>

        <button type="submit">Vender carro</button>
        
    </form>
</body>
</html>