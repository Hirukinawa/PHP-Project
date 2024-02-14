<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <title>Todo Seu</title>
</head>
<body>
    <!-- Page 1 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 2 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 3 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 4 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 5 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 6 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 7 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 8 -->
    <div class="page"></div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 9 -->
    <div id="formPage" class="page">
        <form action="land_todoSeu.php" method="post">
            <div class="column">
                <div id="column--formTitle">
                    <h1>Faça agora mesmo seu contato</h1>
                    <p>Caso tenha alguma dúvida ou precise de um plano especial deixe seus dados que um especialista entrará em contato.</p>
                </div>
            </div>
            <div class="rowForm">
                <div id="columnForm--itens">
                    Nome
                    <input type="text" name="inNome" id="inNome" required>
                </div>
                <div id="columnForm--itens">
                    E-mail
                    <input type="email" name="inEmail" id="inEmail" required>
                </div>
                <div id="columnForm--itens">
                    Telefone
                    <input type="tel" name="inFone" id="inFone" required>
                </div>
            </div>
            <br>
            <div class="rowForm">
                <div id="columnForm--itens">
                    Empresa
                    <input type="text" name="inEmpresa" id="inEmpresa" required>
                </div>
                <div id="columnForm--itens">
                    Segmento de atuação
                    <input type="text" name="inSegmento" id="inSegmento" required>
                </div>
                <div id="columnForm--itens">
                    Quantidade de colaboradores
                    <input type="number" min="0" name="inColab" id="inColab" required>
                </div>
            </div>
            <br>
            <div>
                Como podemos ajudar?
                <input type="text" name="inAjuda" id="inAjuda">
            </div>
            <br>
            <div class="rowReverse">
                <button type="submit" onclick="submitForm()" id="formButton">
                    Enviar
                </button>
            </div>
        </form>
    </div>
    <img class="divisoria" src="images/0007.jpg">
</body>
<footer>
    <div id="footerRow">
        <img class="imgLateral10" src="./images/0004.jpg">
        <div id="footerColumn">
            <div class="row">
                <img id="footer--imgTodoSeu" src="./images/0040.jpg">
                <img class="footer--imgLogo" src="./images/0041.jpg">
                <img class="footer--imgLogo" src="./images/0042.jpg">
            </div>
            <p>Copyright &copy; 2024 Todo Seu PDV - Todos os direitos reservados</p>
        </div>
        <img class="imgLateral10" src="./images/0004-reverse.jpg">
    </div>
    <img id="footerDivisoria" class="divisoria" src="images/0007.jpg">
</footer>
<script></script>
</html>