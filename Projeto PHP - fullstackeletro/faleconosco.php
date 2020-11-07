<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "fullstackeletro";

    //criando a conexão
    $conn = mysqli_connect($servername, $username, $password, $database);

    //verificando a conexão
    if(!$conn){
        die("A conexão ao BD falhou: " . mysqli_connect_error());
    }

  
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];



        $sql ="insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }

?>

<!DOCTYPE html>
<html lang="Pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Contato - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/style.css">
    </head>

    <body>
        <!-- Incio do Menu-->
        <?php
            include('menu.html');
        ?>
        <!--Fim do Menu-->
        <h2>Contato</h2>
        <hr>
        <div class="contato">
            <div class="contatos">
                 <img src="./imagem/o-email (1).png" width="50px" alt="E-mail">
                <font face="Arial" size="4">contato@fullstackeletro.com</font>
            </div>

            <div class="contatos">
                <img src="./imagem/whatsapp.png" width="50px" alt="whatsapp">
                <font face="Arial" size="4">(11) 99999-9999</font>
            </div>           
        </div>

        <form class="formulario" method="post" action="">
            <h4>Nome:</h4>
            <input type="text" name="" id="" style="width: 400px;"><br>
            
            <h4>Mensagem:</h4>
            <textarea style="width: 400px;"></textarea><br>

            <input type="submit" name="submit" value="Enviar"><br>
        </form>

        <?php

$sql = "select * from comentarios";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while( $rows = $result-> fetch_assoc()){
    echo "Data: ", $rows ['data'], "<br>"; 
    echo "Nome: ", $rows ['nome'], "<br>"; 
    echo "Mensagem: ", $rows ['msg'], "<br>";  
    echo "<hr>";

}
} else {
echo "Nenhum comentario ainda!";
}
?>     

        <hr>

        <br> <br> <br> <br> <br>
        <footer id="rodape">
            <p id="forma_pagamento">Formas de pagamento<p>            
            <img class="pagamento" src="./imagem/cartao.jpeg" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>