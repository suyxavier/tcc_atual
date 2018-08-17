<?php
if(sizeof($_POST)>1){ // funcao q conta os elementos do array

   
    $query = "INSERT INTO inventario (nome_remedio, qtd, cod_posto)
            VALUES ('".$_POST['nome_r']."', '".$_POST['qtd']."','".$posto."');"; // oq vai pro bd
    $stmt = $pdo->query($query);

    echo '<script language="javascript">';
    echo 'alert("remedio cadastrado com sucesso")';
    echo '</script>';
}