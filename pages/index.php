<?php
$titulo = "QUAIS OS BENEFÍCIOS DE UMA MASSAGEM?";
$botaoQuero = "<button>QUERO AGENDAR UMA SESSÃO</button>";
$texto = "Uma massagem oferece uma variedade de benefícios para a mulher, incluindo relaxamento profundo, alívio do estresse e da tensão muscular. Ao estimular a circulação sanguínea, a massagem contribui para uma pele mais saudável e pode melhorar a qualidade do sono. Além disso, promove o equilíbrio emocional, liberando endorfinas qu elevam o humor. A experiência sensorial e o toque terapêutico durante a massagem proporcionam não apenas um alívio físico, mas também um momento de cuidado pessoal e conexão consigo mesma, promovendo o bem-estar geral."
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/index.css">
    <title>Teste</title>
</head>
<header>
    <div class="row">
        <img src="http://lorempixel.com.br/400/100" width="400px" height="100px">
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
            echo "70% DAS PESSOAS QUE FAZEM MASSAGEM MELHORAM A AUTO ESTIMA, DIMINUEM O STRESS E AS DORES MUSCULARES";
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
            <img src="http://lorempixel.com.br/400/140">
            <img src="http://lorempixel.com.br/300/200">
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
    </div>
    <div class="column">
        <h1>CONHEÇA AS NOSSAS MASSAGENS</h1>
    </div>
    <div class="row">
        <div class="columnStart">
            <h4>Drenagem Linfática</h4>
            <p>A drenagem linfática consiste numa massagem com movimentos suaves, mantidos num ritmo certo para evitar rompimento dos vasos linfáticos. Tem como função estimular e facilitar a passagem da linfa pelo sistema circulatório.</p>
        </div>
        <div class="columnStart">
            <h4>Massagem terapêutica</h4>
            <p>A massagem terapêutica serve para tratar ou prevenir determinados problemas de saúde como o stress, tensão nervosa, tendinites, entorses ou contraturas.</p>
        </div>
        <div class="columnStart">
            <h4>Massagem pedras quentes</h4>
            <p>A aplicação da pedra vulcânica e basáltica de tamanho e formato adequados, com a pressão e manipulação correta pelo terapeuta, proporciona efeitos muito benéficos.</p>
        </div>
    </div>
    <div class="row">
        <div class="columnStart">
            <h4>Indianhead Massage</h4>
            <p>É aquela massagem que todos idealizamos, sonhamos e que podemos concretizar. Tem o objetivo de remover toda e qualquer tipo de tensão, sobre os ombros, pescoço, cabeça e rosto, com técnicas baseadas numa forte tradição indiana.</p>
        </div>
        <div class="columnStart">
            <h4>Massagem de relaxamento</h4>
            <p>Esta massagem ajuda-o a aumentar a flexibilidade e aumenta a circulação sanguínea. Do ponto de vista psicológico, cria uma sensação de bem estar e alegria. <br>A massagem relaxante ajuda a acalmar o corpo e a mente.</p>
        </div>
        <div class="columnStart">
            <h4>Massagem modeladora</h4>
            <p>A massagem modeladora é uma técnica direcionada para remodelar o corpo, utilizando movimentos firmes e específicos. Seu propósito é agir nas camadas mais profundas da pele, contribuindo para a </p>
        </div>
    </div>



</body>

</html>