<!DOCTYPE html>
<html lang="Pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Nossas lojas - Full Stack Eletro</title>
        <link rel="stylesheet" href="./CSS/style.css">
    </head>

    <body>
         <!-- Incio do Menu-->
       
        <?php
        include('menu.html');
            ?>   
   
        <!--Fim do Menu-->
        
        <main>
           <section>
             <h2>Nossas Lojas</h2>
             <hr>
             <div class="lojas">
         
                <div class="loja-end">
                    <h3>Rio de Janeiro</h3>
                    <p>Avenida Presidente Vargas, 5000 </p>
                    <p>10 &ordm; andar</p>
                    <p>Centro</p>
                    <p>(21) 3333-3333</p>
                </div>

                <div class="loja-end">
                    <h3>São Paulo</h3>
                    <p>Avenida Paulista, 395 </p>
                    <p>3 &ordm; andar</p>
                    <p>Jardins</p>
                    <p>(11) 4444-4444</p>
                </div>

                <div class="loja-end">
                    <h3>Santa Catarina</h3>
                    <p>Rua Major &Aacute;vila, 370 </p>
                    <p>Vila Mariana</p>
                    <p>(47) 5555-5555</p>
                </div>           
            </div>
           </section>
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