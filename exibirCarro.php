<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Carros da Área <?=$_GET['id']?> </h1>

    <table>
    <?php
    include("conexao.php");

    $id = $_GET['id'];

    $comando = $pdo->prepare("SELECT automoveis. * FROM automoveis INNER JOIN alocacao 
    ON automoveis.idautomoveis = alocacao.automoveis_idautomoveis WHERE alocacao.quantidade > 0
    AND alocacao.area = :id");

    $comando->bindParam(':id', $id);
    $comando->execute();

    $carros->array();
    while($cadaCarro = $comando->fetch(PDO:FETCH_ASSOC)){
        array_push($carros,$cadaCarro);
    }
    foreach ($carros as $c) { ?>
        <tr>
            <td> Modelo: <?=$c['modelo']?> </td>
            <td> Preço: <?=$c['preco']?> </td>
            <td><form action='venderCarrosForm.php' method='get'>
                <input type='hidden' name='idCarro' value='<?=$c['idautomoveis']?>'>
                <input type='hidden' name='modelo' value='<?=$c['modelo']?>'>
                <button type='submit'>Vender</button></form>

            </td>
    </tr>
    } ?>
    

</body>
</html>