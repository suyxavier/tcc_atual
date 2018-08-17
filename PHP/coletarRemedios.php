<?php
    $query = "SELECT * FROM inventario WHERE cod_posto = $posto"; 
    $stmt = $pdo->query($query); // pega a linha de cima, e faz rodar no banco 
    $remedios = $stmt->fetchALL(PDO::FETCH_ASSOC);//cria um array associativo com as info do bd 
   
?>