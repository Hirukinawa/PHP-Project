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
    <div class="page">
        <h1>Integração com iFood</h1>
        <div class="row">
            <div id="page5--column" class="column">
                <h2>O cardápio do Todo Seu pode ser sincronizado com o iFood, facilitando o cadastramento e mantendo as informações sempre atualizadas com outras plataformas.</h2>
                <p>O cardápio do Todo Seu é disponibilizado no iFood.</p>
                <p>Pedidos feitos no iFood são recebidos no sistema.</p>
                <p>informações sobre cliente, itens e complementos são recebidos com o pedido.</p>
                <p>É possível ver cupons de desconto usados no pedido.</p>
                <p>Informações de entrega e troco.</p>
            </div>
            <img id="page5--img" src="./images/0028.jpg" alt="">
        </div>
    </div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 6 -->
    <div id="page6" class="page">
        <img id="page6--img" src="./images/0029.png" alt="">
    </div>
    <!-- Page 7 -->
    <div class="page">
        <div>
        <img class="imagemGrande" src="./images/0031.jpg">
        <div id="page7--row" class="row">
            <div class="column">
                <img class="page7--img" src="./images/0035.jpg" alt="">
                <h2>Já tenho maquininha</h2>
                <h3>Sistema PDV Todo Seu</h3>
                Sistema PDV + Painel de gestão
                <button>Entre em contato com a gente!</button>
            </div>
            <div class="column">
                <img class="page7--img" src="./images/0036.jpg" alt="">
                <h2>Quero uma maquininha</h2>
                <h3>Sistema PDV Todo Seu + Maquininha</h3>
                Sistema PDV + POS Digital
                <button>Entre em contato com a gente!</button>
            </div>
        </div>
        </div>
    </div>
    <img class="divisoria" src="images/0007.jpg">
    <!-- Page 8 -->
    <div class="page">
        <h1>Sem custos surpresas.</h1>
        <h2>Estrutura de investimento simples para você focar em aumentar as vendas de seu negócio.</h2>
        <div class="row">
            <div class="page8--column">
                <img class="page8--img" src="./images/0037.jpg" alt="">
                <h2>Zero taxa de adesão</h2>
                <p>Não cobramos taxa de adesão nem taxa implantação do sistema. Você paga a mensalidade e pronto, só começar a usar o sistema.</p>
            </div>
            <div class="page8--column">
                <img class="page8--img" src="./images/0038.jpg" alt="">
                <h2>Sem fidelidade contratual</h2>
                <p>Aqui você não tem fidelidade contratual, isso é, você cancela quando quiser sem pagar nada a mais por isso.</p>
            </div>
        </div>
        <div id="page8--columnAtendimento" class="column">
            <h2>O suporte que você precisa!</h2>
            <p>Sem custo extra na mensalidade.</p>
            <h2>Horário de atendimento</h2>
            <div id="horarioAtendimento">
                <div class="column">
                    Segunda a sábado <br>
                    9h às 22h
                </div>
                <div class="column">
                    Domingos e feriados <br>
                    10h às 16h
                </div>
            </div>
            <p>Todo acesso pelo painel de gestão do PDV</p>
        </div>
        <div class="row">
            <img id="page8--imgMulher" src="./images/0039.png" alt="">
            <img class="divisoria" src="images/0007.jpg">
        </div>
    </div>
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