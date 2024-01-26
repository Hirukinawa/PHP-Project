<?php
$titulo = "Quais os benefícios de uma massagem?";
$botaoQuero = "<button class='botaoQuero'>QUERO AGENDAR UMA SESSÃO</button>";
$texto = "Uma massagem oferece uma variedade de benefícios para a mulher, incluindo relaxamento profundo, alívio do estresse e da tensão muscular. Ao estimular a circulação sanguínea, a massagem contribui para uma pele mais saudável e pode melhorar a qualidade do sono. Além disso, promove o equilíbrio emocional, liberando endorfinas qu elevam o humor. A experiência sensorial e o toque terapêutico durante a massagem proporcionam não apenas um alívio físico, mas também um momento de cuidado pessoal e conexão consigo mesma, promovendo o bem-estar geral."
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css"><link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&display=swap" rel="stylesheet">
    <title>Beloved</title>
</head>
<header>
    <div class="row">
        <img src="../assets/images/nicolau.png" width="400px" height="100px">
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
    <div class="column">
        <h1>
            <?php
            echo "70% das pessoas que fazem massagem melhoram a auto estima, diminuem o estresse e as dores musculares";
            ?>
        </h1>
        <br>
        <b>Fazer massagem traz vários efeitos positivos no corpo e na mente, contribuindo para a melhoria da autoestima, a redução de dores, alívio imediato do estresse, melhoria da circulação e renovação da vitalidade.</b>
        <br>
        <?php echo $botaoQuero ?>
        <br>
        <br>
        <br>
        <br>

    </div>
    <div class="row">
        <div class="columnStart">
            <h1><?php

                echo $titulo;
                ?></h1>
            <p><?php echo $texto; ?></p>
        </div>
        <div class="column">
            <img src="../assets/images/162299507_2937522726484295_4955936715478099707_n.jpg" width="400px" height="140px">
            <img src="../assets/images/honk.jpg" width="300px" height="200px">
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="column">
        <h1>PARA QUEM É INDICADO FAZER MASSAGENS</h1>
        <br>
    </div>
    <div class="row">
        <div class="column">
            <div class="circulo"></div>
            <br>
            GESTANTES
        </div>
        <div class="column">
            <div class="circulo"></div>
            <br>
            PESSOAS ESTRESSADAS
        </div>
        <div class="column">
            <div class="circulo"></div>
            <br>
            ATLETAS
        </div>
        <div class="column">
            <div class="circulo"></div>
            <br>
            PESSOAS COM DORES
        </div>
        <div class="column">
            <div class="circulo"></div>
            <br>
            IDOSOS
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="column">
        <?php echo $botaoQuero ?>
        <h1>CONHEÇA AS NOSSAS MASSAGENS</h1>
    </div>
    <div class="row">
        <div class="columnItens">
            <h4>Drenagem Linfática</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130">
            </div>
            <p>A drenagem linfática consiste numa massagem com movimentos suaves, mantidos num ritmo certo para evitar rompimento dos vasos linfáticos. Tem como função estimular e facilitar a passagem da linfa pelo sistema circulatório.</p>
        </div>
        <div class="columnItens">
            <h4>Massagem terapêutica</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130" alt="">
            </div>
            <p>A massagem terapêutica serve para tratar ou prevenir determinados problemas de saúde como o stress, tensão nervosa, tendinites, entorses ou contraturas.</p>
        </div>
        <div class="columnItens">
            <h4>Massagem pedras quentes</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130" alt="">
            </div>
            <p>A aplicação da pedra vulcânica e basáltica de tamanho e formato adequados, com a pressão e manipulação correta pelo terapeuta, proporciona efeitos muito benéficos.</p>
        </div>
    </div>
    <div class="row">
        <div class="columnItens">
            <h4>Indianhead Massage</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130" alt="">
            </div>
            <p>É aquela massagem que todos idealizamos, sonhamos e que podemos concretizar. Tem o objetivo de remover toda e qualquer tipo de tensão, sobre os ombros, pescoço, cabeça e rosto, com técnicas baseadas numa forte tradição indiana.</p>
        </div>
        <div class="columnItens">
            <h4>Massagem de relaxamento</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130" alt="">
            </div>
            <p>Esta massagem ajuda-o a aumentar a flexibilidade e aumenta a circulação sanguínea. Do ponto de vista psicológico, cria uma sensação de bem estar e alegria. <br>A massagem relaxante ajuda a acalmar o corpo e a mente.</p>
        </div>
        <div class="columnItens">
            <h4>Massagem modeladora</h4>
            <div class="auxDiv">
                <div class="divGold"></div>
                <img class="imgItem" src="http://lorempixel.com.br/200/130" alt="">
            </div>
            <p>A massagem modeladora é uma técnica direcionada para remodelar o corpo, utilizando movimentos firmes e específicos. Seu propósito é agir nas camadas mais profundas da pele, contribuindo para a redução de gorduras localizadas e aprimorando a circulação sanguínea.</p>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="column">
    <?php echo $botaoQuero ?>
    <br>
    <br>
    <br>
    <br>
    <div class="divForm">
        <h1 class="titleWhite">COMO PARTICIPAR DO NOSSO CLUB BELOVED DE BENEFÍCIOS</h1>
        <label for="formLabel">Cadastre-se na nossa lista VIP para receber mais informações</label>
        <input type="email" name="inEmail" id="inEmail" placeholder="DIGITE AQUI SEU E-MAIL">
        <input type="tel" name="inFone" id="inFone" placeholder="DIGITE AQUI SEU WHATSAPP">
        <button class="formButton">QUERO PARTICIPAR</button>
    </div>
    <br>
    <br>
    <br>
    <br>
    <h1>AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ PRECISA SABER SOBRE MASSAGENS</h1>
    <b>Fazer massagem regularmente pode oferecer diversos benefícios para o corpo e a mente.</b>
    <div class="columnStart2">
    <div class="rowCrossStart">
        <h1>01</h1>
        <div class="columnStart2">
            <b>Relaxamento e Redução do Estresse</b>
            <p>A massagem é conhecida por induzir um estado profundo de relaxamento, reduzindo os níveis de cortisol (hormônio do estresse) e promovendo uma sensação de calma e bem-estar.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>02</h1>
        <div class="columnStart2">
            <b>Melhoria do Sono</b>
            <p>A massagem relaxante pode contribuir para uma melhor qualidade de sono, proporcionando um estado de relaxamento que facilita o atordoamento.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>03</h1>
        <div class="columnStart2">
            <b>Fortalecimento do Sistema Imunológico</b>
            <p>Algumas pesquisas sugerem que a massagem regular pode fortalecer o sistema imunológico, aumentando a atividade das células brancas do sangue.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>04</h1>
        <div class="columnStart2">
            <b>Aumento da Consciência Corporal</b>
            <p>A massagem pode aumentar a consciência corporal, ajudando as pessoas a se tornarem mais conscientes de áreas de tensão e a adotarem uma postura mais equilibrada.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>05</h1>
        <div class="columnStart2">
            <b>Aceleração da Recuperação Pós-Exercício</b>
            <p>Atletas frequentemente recorrem à massagem para acelerar a recuperação muscular após o exercício intenso, reduzindo a dor e a rigidez.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>06</h1>
        <div class="columnStart2">
            <b>Melhoria da Circulação Sanguínea e Linfática</b>
            <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
        </div>
    </div>
    <div class="rowCrossStart">
        <h1>07</h1>
        <div class="columnStart2">
            <b>Melhoria da Circulação Sanguínea e Linfática</b>
            <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
        </div>
    </div>
    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <div class="column">
            <div class="divAux">
                <img class="imgBig" src="../assets/images/alo.jpg" height="770px">
                <h1 id="h1Pos">VAMOS FALAR DE BELEZA?</h1>
                <h4 id="h4Pos2">CEO - BELOVED</h4>
                <h4 id="h4Pos">CÉLIA PARDAL</h4>
            </div>
        </div>
        <div class="columnFDS">
            <p>Na Beloved Portugal, o conceito de beleza é um todo! Aliamos a mente, corpo e espírito, pois para estarmos bem, todo têm de estar em sintonia.</p>
            <p>Sinta-se única e deixe-se levar por um misto de sensações leves que não conseguimos normalmente no dia-a-dia imensamente corrido e estressante. Sinta-se única. Sinta-se bem.</p>
            <p>Deixe-se levar pelos nossos tratamentos e descubra uma variedade de serviços que disponibilizamos a pensar em si. Envolva-se neste brilhante mundo da beleza estética e bem-estar.</p>
            <button class="rowFDS">
                <div class="row">
                    <img src="../assets/images/162299507_2937522726484295_4955936715478099707_n.jpg" width="50px" height="50px"> MAIS INFORMAÇÕES FALE COM A BELOVED
                </div>
            </button>
        </div>
    </div>



</body>

</html>