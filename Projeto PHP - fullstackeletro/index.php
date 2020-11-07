<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/style.css">

        <script>
            function carregar_saudacao(){
                data =  newDate();
                hora = data.getHours();

                if(hora < 12){
                    document.getElementById("msg_abertura").innerHTML = "Bom dia!";
                }
                else if (hora < 18){
                    document.getElementById("msg_abertura").innerHTML = "Boa tarde!";
                }
                else {
                    document.getElementById("msg_abertura").innerHTML = "Boa noite!";
                }
            }
        </script>
    </head>

    <body onLoad="carregar_saudacao()">

  <!-- Menu-->
  <?php
    include('menu.html');
  ?>

       
        
       <main>
        <h2>Seja bem vindo(a)!</h2>
        <p>Aqui em nossa loja, programadores tem desconto nos produtos para sua casa!</p>
       </main>
        <hr>
        <br> <br> <br> <br> <br>

     
        
       
        
        <footer id="rodape">
            <p id="forma_pagamento">Formas de pagamento<p>            
            <img class="pagamento" src="./imagem/cartao.jpeg" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </footer>
    </body>
</html>