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


   
?>


<!DOCTYPE html>
<html lang="Pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Produtos - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/style.css">       
        <link rel="icon" href="./imagem/logo.jpeg" />
        <script src="./Js/funcoes.js"></script>         
    </head>

    <body>
         <!-- Incio do Menu-->
         <?php
             include('menu.html');
        ?>  
         <!--Fim do Menu-->      
       
          <h2>Produtos</h2>
          <hr>
        
         <!--- Começo Categorias-->
        <aside class="categorias">
            <h3>Categorias</h3>
            <ul>
                <li onclick="exibirTodos()"> Todos (12) </li>
                <li onclick="exibir('geladeira')">Geladeiras (3)</li>
                <li onclick="exibir('fogao')">Fogões (2)</li>
                <li onclick="exibir('microondas')">Micro ondas (3)</li>
                <li onclick="exibir('lavadora')">Máquina de Lavar (2)</li>
                <li onclick="exibir('lavaloucas')">Lava louças (2)</li>
            </ul>
        </aside>
        <!--Fim Categorias-->

        <!--Produtos-->
        <section id="produtos" >

        <?php

            $sql = "select * from produtos";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                while( $rows = $result-> fetch_assoc()){
                echo $rows["categoria"];
        ?>

        <div class="box_produto" id="<?php echo $rows["categoria"]; ?>">
                <img src="<?php echo $rows["imagem"]; ?>" alt="Geladeira"  style="width: 120px;" style="width: 120px;" onmouseover="destaque(this)" onmouseout="destaque(this)">
                <br>
                <p class="descricao"><b><?php echo $rows ["descricao"]; ?> </b> </p>     
                             
                <hr>                    
                <p class="valor1"><b><?php echo $rows ["preco"]; ?></b></p>
                <p class="valor2"><b><?php echo $rows ["preco_venda"]; ?></b></p>
                <br>
        </div>

        <?php        

            }
        } else {
            echo "Nenhum produto cadastrado!";
        }
        ?>     

          

           
        </section> 
    <!--Fim Produtos-->

      <br><br><br><br><br<br>
      <br><br><br><br><br><br>
      <br><br><br><br><br><br>

        <footer id="rodape">
            <hr>            
            <p id="forma_pagamento">Formas de pagamento<p>            
            <img class="pagamento" src="./imagem/cartao.jpeg" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
   
    </body>
</html>