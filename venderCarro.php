<?php
    include(conexao.php);

    $idCarro = $_POST['idCarro'];
    $idConc = $_POST['idconcessionarias'];

    $comando = $pdo->prepare("UPDATE alocacao SET quantidade = quantidade - 1 
    WHERE automoveis.idautomoveis = :id AND concessionarias_idconcessionarias = :idconc");

    $comando->bindParam(':id',$idCarro);
    $comando->bindParam(':idconc',$idConc);
    $comando->execute();


    $comandoArea = $pdo->prepare("SELECT area FROM alocacao 
    WHERE automoveis_idautomoveis = :id
    AND concessionarias_idconcessionarias = :idconc");

    $comando->bindParam(':id',$idCarro);
    $comando->bindParam(':idconc',$idConc);
    $comando->execute();

    $idArea = ($comando->rowCount() > 0) {
        header("Location: ../index.php?id=" .$idArea['area']);
        exit();
    }


?>