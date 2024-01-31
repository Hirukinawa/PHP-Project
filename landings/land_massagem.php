<?php
$titulo = "Quais os benefícios de uma massagem?";
$botaoQuero = "<button id='botaoQuero'><h1 id='page1--button'>QUERO AGENDAR UMA SESSÃO<h1></button>";
$texto = "Uma massagem oferece uma variedade de benefícios para a mulher, incluindo relaxamento profundo, alívio do estresse e da tensão muscular. Ao estimular a circulação sanguínea, a massagem contribui para uma pele mais saudável e pode melhorar a qualidade do sono. Além disso, promove o equilíbrio emocional, liberando endorfinas que elevam o humor. A experiência sensorial e o toque terapêutico durante a massagem proporcionam não apenas um alívio físico, mas também um momento de cuidado pessoal e conexão consigo mesma, promovendo o bem-estar geral."
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Hind&family=Roboto&display=swap" rel="stylesheet">
    <title>Beloved</title>
</head>
<header>
    <div class="rowHeader">
        <img id="imgHeader" src="./images/logo.png">
        <ul><b>CORPO</b></ul>
        <ul><b>MASSAGEM</b></ul>
        <ul><b>ROSTO</b></ul>
        <ul><b>BLOG</b></ul>
        <ul><b>CLUBE</b></ul>
        <ul><b>FORMAÇÃO</b></ul>
        <ul><b>FALE CONOSCO</b></ul>
    </div>
</header>

<body>
    <!-- Page 1 -->
    <div id="page1">
        <div id="index--columnMain">
            <h1 class="title">
                <?php
                echo "70% das pessoas que fazem massagem melhoram a auto estima, diminuem o estresse e as dores musculares";
                ?>
            </h1>
            <?php
            echo "<b>Fazer massagem traz vários efeitos positivos no corpo e na mente, contribuindo para a melhoria da autoestima, a redução de dores, alívio imediato do estresse, melhoria da circulação e renovação da vitalidade.</b>";
            ?>
            <br>
            <?php echo $botaoQuero ?>
            <br>
        </div>
    </div>
    <!-- Page 2 -->
    <div class="page">
        <div class="page2--row">
            <div class="page2--column">
                <h1 class="page2--title">
                    <?php
                        echo $titulo;
                    ?>
                </h1>
                <p>
                    <?php echo $texto; ?>
                </p>
            </div>
            <div class="page2--columnImg">
                <div id="divOval"></div>
                <div id="divOval2"></div>
            </div>
        </div>
    </div>
    <!-- Page 3 -->
    <div class="page">
        <div class="column">
            <h1 class="title">PARA QUEM É INDICADO FAZER MASSAGENS</h1>
            <br>
        </div>
        <br>
        <div class="row">
            <div class="column">
                <div class="circulo"></div>
                <br>
                <p class="page3--text">GESTANTES</p>
            </div>
            <div class="column">
                <div class="circulo"></div>
                <br>
                <p class="page3--text">PESSOAS ESTRESSADAS</p>
            </div>
            <div class="column">
                <div class="circulo"></div>
                <br>
                <p class="page3--text">ATLETAS</p>
            </div>
            <div class="column">
                <div class="circulo"></div>
                <br>
                <p class="page3--text">PESSOAS COM DORES</p>
            </div>
            <div class="column">
                <div class="circulo"></div>
                <br>
                <p class="page3--text">IDOSOS</p>
            </div>
        </div>
        <br>
        <br>
        <div class="column">
            <?php echo $botaoQuero ?>
        </div>
        <br>
    </div>
    <!-- Page 4-5 -->
    <div class="page">
        <div class="column">
            <h1 class="title">CONHEÇA AS NOSSAS MASSAGENS</h1>
        </div>
        <div class="page4--row">
            <div class="columnItens">
                <h4>Drenagem Linfática</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130">
                </div>
                <p class="page5--textItem">A drenagem linfática consiste numa massagem com movimentos suaves, mantidos num ritmo certo para evitar rompimento dos vasos linfáticos. Tem como função estimular e facilitar a passagem da linfa pelo sistema circulatório.</p>
            </div>
            <div class="columnItens">
                <h4>Massagem terapêutica</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130">
                </div>
                <p class="page5--textItem">A massagem terapêutica serve para tratar ou prevenir determinados problemas de saúde como o stress, tensão nervosa, tendinites, entorses ou contraturas.</p>
            </div>
            <div class="columnItens">
                <h4>Massagem pedras quentes</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130">
                </div>
                <p class="page5--textItem">A aplicação da pedra vulcânica e basáltica de tamanho e formato adequados, com a pressão e manipulação correta pelo terapeuta, proporciona efeitos muito benéficos.</p>
            </div>
        </div>
        <div class="page4--row">
            <div class="columnItens">
                <h4>Indianhead Massage</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130">
                </div>
                <p class="page5--textItem">É aquela massagem que todos idealizamos, sonhamos e que podemos concretizar. Tem o objetivo de remover toda e qualquer tipo de tensão, sobre os ombros, pescoço, cabeça e rosto, com técnicas baseadas numa forte tradição indiana.</p>
            </div>
            <div class="columnItens">
                <h4>Massagem de relaxamento</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130">
                </div>
                <p class="page5--textItem">Esta massagem ajuda-o a aumentar a flexibilidade e aumenta a circulação sanguínea. Do ponto de vista psicológico, cria uma sensação de bem estar e alegria. <br>A massagem relaxante ajuda a acalmar o corpo e a mente.</p>
            </div>
            <div class="columnItens">
                <h4>Massagem modeladora</h4>
                <div class="page4--divGold">
                    <div class="page4--backGold"></div>
                    <img class="page4--img" src="http://lorempixel.com.br/200/130" alt="">
                </div>
                <p class="page5--textItem">A massagem modeladora é uma técnica direcionada para remodelar o corpo, utilizando movimentos firmes e específicos. Seu propósito é agir nas camadas mais profundas da pele, contribuindo para a redução de gorduras localizadas e aprimorando a circulação sanguínea.</p>
            </div>
        </div>
        <br>
        <div class="column">
            <?php echo $botaoQuero ?>
        </div>
    </div>
    <!-- Page 6 -->
    <div id="formPage" class="page">
        <div class="column">
            <div id="divForm">
                <h1 id="titleWhite">COMO PARTICIPAR DO NOSSO CLUB BELOVED DE BENEFÍCIOS</h1>
                <b class="page6--text">Cadastre-se na nossa lista VIP para receber mais informações</b>
                <input type="email" name="inEmail" id="inEmail" placeholder="DIGITE AQUI SEU E-MAIL" required>
                <input type="tel" name="inFone" id="inFone" placeholder="DIGITE AQUI SEU WHATSAPP" required>
                <button id="formButton"><b class="page6--text">QUERO PARTICIPAR</b></button>
            </div>
        </div>
    </div>
    <!-- Page 7-8 -->
    <div class="page">
        <div class="column">
            <h1 class="page7--title">AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ PRECISA SABER SOBRE MASSAGENS</h1>
            <b>Fazer massagem regularmente pode oferecer diversos benefícios para o corpo e a mente.</b>
            <br>
            <br>
                <div class="page7--row">
                    <h1 class="page7--number">01</h1>
                    <div class="page7--column">
                        <b>Relaxamento e Redução do Estresse</b>
                        <p>A massagem é conhecida por induzir um estado profundo de relaxamento, reduzindo os níveis de cortisol (hormônio do estresse) e promovendo uma sensação de calma e bem-estar.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">02</h1>
                    <div class="page7--column">
                        <b>Melhoria do Sono</b>
                        <p>A massagem relaxante pode contribuir para uma melhor qualidade de sono, proporcionando um estado de relaxamento que facilita o atordoamento.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">03</h1>
                    <div class="page7--column">
                        <b>Fortalecimento do Sistema Imunológico</b>
                        <p>Algumas pesquisas sugerem que a massagem regular pode fortalecer o sistema imunológico, aumentando a atividade das células brancas do sangue.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">04</h1>
                    <div class="page7--column">
                        <b>Aumento da Consciência Corporal</b>
                        <p>A massagem pode aumentar a consciência corporal, ajudando as pessoas a se tornarem mais conscientes de áreas de tensão e a adotarem uma postura mais equilibrada.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">05</h1>
                    <div class="page7--column">
                        <b>Aceleração da Recuperação Pós-Exercício</b>
                        <p>Atletas frequentemente recorrem à massagem para acelerar a recuperação muscular após o exercício intenso, reduzindo a dor e a rigidez.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">06</h1>
                    <div class="page7--column">
                        <b>Melhoria da Circulação Sanguínea e Linfática</b>
                        <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">07</h1>
                    <div class="page7--column">
                        <b>Melhoria da Circulação Sanguínea e Linfática</b>
                        <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
                    </div>
                </div>
        </div>
    </div>
    <!-- Page 9 -->
    <div class="page">
        <div class="page9--row">
            <div class="page9--column">
                <div class="page9--divAux">
                    <div class="page9--aux1">
                        <img class="page9--img" src="./images/anotado.png" height="770px">
                        <h1 id="h1Pos">VAMOS FALAR DE BELEZA?</h1>
                    </div>
                    <div class="page9--aux2">
                        <h3 id="h3Pos">CÉLIA PARDAL <br> CEO - BELOVED</h3>
                    </div>
                </div>
            </div>
            <div class="page9--column">
                <p>Na Beloved Portugal, o conceito de beleza é um todo! Aliamos a mente, corpo e espírito, pois para estarmos bem, todo têm de estar em sintonia.</p>
                <p>Sinta-se única e deixe-se levar por um misto de sensações leves que não conseguimos normalmente no dia-a-dia imensamente corrido e estressante. Sinta-se única. Sinta-se bem.</p>
                <p>Deixe-se levar pelos nossos tratamentos e descubra uma variedade de serviços que disponibilizamos a pensar em si. Envolva-se neste brilhante mundo da beleza estética e bem-estar.</p>
                <br>
                <button class="page9--button">
                    <img id="page9--btnImg" src="./images/whatsapp-white.png" width="40rem" height="40rem">
                    <h5>MAIS INFORMAÇÕES FALE COM A BELOVED</h5>
                </button>
            </div>
        </div>
    </div>
</body>

<footer>
    <div class="rowFooter">
        <img src="./images/logo.png" id="imgHeader">
        <div class="footerColumn">
            <h3>Contatos</h3>
            +351 263 153 495<br>
            +351 913 493 604 (chamada para rede nacional)<br>
            belovedportugal@gmail.com<br>
            Largo 14 de outubro de 1938, 11, Alhandra<br>
            Política de Privacidade<br>
            Termos e Condições<br>
        </div>
        <div class="footerColumnRight">
        <h3>Menu Rápido</h3>
            Tratamentos - Massagens<br>
            Tratamentos - Rosto<br>
            Tratamentos - Corpo<br>
            Formações<br>
            Sobre Nós<br>
            Fale Conosco<br>
        </div>
    </div>
</footer>

</html>