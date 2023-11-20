<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pátio de Veículos</title>
</head>
<body>

    <?php
        include(conexao.php);
        if(isset($_GET['id'])==true) {
            echo "<script>coloreArea(".$_GET['id']."); </script>
        }
    ?>


    <main id="patio">
        <div id="area1" class="areas" onclick="exibirArea('1')">Área 1</div>
        
        <div id="area2" class="areas" onclick="exibirArea('2')">Área 2</div>

        <div id="area3" class="areas" onclick="exibirArea('3')">Área 3</div>

    </main>
</body>
</html>