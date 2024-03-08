<?php
$botaoQuero = "<button id='botaoQuero'><a href='https://wa.me/5551993861376' target='_blank'>
<img id='page9--btnImg' src='../images/whatsapp-white.png' width='40rem' height='40rem'>
<h1 id='page1--button'>QUERO AGENDAR UMA SESSÃO<h1>
</a>
</button>";
?>

<!-- Usar tag picture -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Bebas+Neue&family=Hind&family=Roboto&display=swap" rel="stylesheet">
    <title>Beloved</title>
</head>

<body>
    <header>
        <div class="rowHeader">
            <img id="imgHeader" src="../images/logo.png">
            <ul class="header--ul"><b>CORPO</b></ul>
            <ul class="header--ul"><b>MASSAGEM</b></ul>
            <ul class="header--ul"><b>ROSTO</b></ul>
            <ul class="header--ul"><b>BLOG</b></ul>
            <ul class="header--ul"><b>CLUBE</b></ul>
            <ul class="header--ul"><b>FORMAÇÃO</b></ul>
            <ul class="header--ul"><b>BELOVED EQUIPAMENTOS</b></ul>
            <ul class="header--ul" onmouseover="mouseOver()" onmouseout="mouseOut()" id="whatsList">
                <a href='https://wa.me/5551993861376' target='_blank'>
                    <img id="whatsLogo" src="../images/whatsapp-gold.png"><b>FALE CONOSCO</b>
                </a>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">
                <div class="barra"></div>
                <div class="barraGold"></div>
                <div class="barra"></div>
                <div class="barraGold"></div>
                <div class="barra"></div>
            </div>
            <div class="menu-list">
                <li><b>CORPO</b></li>
                <li><b>MASSAGEM</b></li>
                <li><b>ROSTO</b></li>
                <li><b>BLOG</b></li>
                <li><b>CLUBE</b></li>
                <li><b>FORMAÇÃO</b></li>
                <li><b>BELOVED EQUIPAMENTOS</b></li>
                <li id="whatsListCel">
                    <a href='https://wa.me/5551993861376' target='_blank'>
                        <img id="whatsLogo" src='../images/whatsapp-gold.png'>
                        <b>FALE CONOSCO</b>
                    </a>
                </li>
            </div>
        </div>
    </header>
    <main>
        <!-- Page 1 -->
        <!-- <section id="page1">
            <div id="index--columnMain">
                <h1 class="title">70% das pessoas que fazem massagem melhoram a auto estima, diminuem o estresse e as dores musculares</h1>
                <b>Fazer massagem traz vários efeitos positivos no corpo e na mente, contribuindo para a melhoria da autoestima, a redução de dores, alívio imediato do estresse, melhoria da circulação e renovação da vitalidade.</b>
                <br>
                <?php echo $botaoQuero ?>
                <br>
            </div>
        </section> -->
        <!-- Page 2 -->
        <section class="page">
            <div class="page2--row">
                <div class="page2--column">
                    <h1 id="page2--title" class="title">Quais os benefícios de uma massagem?</h1>
                    <p>Uma massagem oferece uma variedade de benefícios para a mulher, incluindo relaxamento profundo, alívio do estresse e da tensão muscular. Ao estimular a circulação sanguínea, a massagem contribui para uma pele mais saudável e pode melhorar a qualidade do sono. Além disso, promove o equilíbrio emocional, liberando endorfinas que elevam o humor. A experiência sensorial e o toque terapêutico durante a massagem proporcionam não apenas um alívio físico, mas também um momento de cuidado pessoal e conexão consigo mesma, promovendo o bem-estar geral.</p>
                </div>
                <div class="page2--columnImg">
                    <div id="divOval"></div>
                    <div id="divOval2"></div>
                </div>
            </div>
        </section>
        <!-- Page 3 -->
        <section class="page">
            <div class="column">
                <h1 id="page3--title" class="title">PARA QUEM É INDICADO FAZER MASSAGENS</h1>
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
        </section>
        <!-- Page 4-5 -->
        <section class="page">
            <div class="column">
                <h1 id="page4--title" class="title">CONHEÇA AS NOSSAS MASSAGENS</h1>
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
                        <img class="page4--img" src="http://lorempixel.com.br/200/130">
                    </div>
                    <p class="page5--textItem">A massagem modeladora é uma técnica direcionada para remodelar o corpo, utilizando movimentos firmes e específicos. Seu propósito é agir nas camadas mais profundas da pele, contribuindo para a redução de gorduras localizadas e aprimorando a circulação sanguínea.</p>
                </div>
            </div>
            <br>
            <div class="column">
                <?php echo $botaoQuero ?>
            </div>
        </section>
        <!-- Page 6 -->
        <section class="page">
            <form action="land_massagem.php" method="post" id="formPage">
                <div class="column">
                    <div id="divForm">
                        <h1 id="titleWhite">COMO PARTICIPAR DO NOSSO CLUB BELOVED DE BENEFÍCIOS</h1>
                        <input type="email" id="inEmail" name="inEmail" placeholder="DIGITE AQUI SEU E-MAIL" required>
                        <input type="tel" id="inFone" name="inFone" placeholder="DIGITE AQUI SEU WHATSAPP" required>
                        <button type="button" onclick="submitForm()" id="formButton">
                            <b class='page6--text'>QUERO PARTICIPAR</b>
                        </button>
                    </div>
                </div>
            </form>
            <?php
            $alertaEnviado = false;

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $telefone = $_POST["inFone"];
                $email = $_POST["inEmail"];
                $alertaEnviado = true;
            }
            ?>
        </section>
        <!-- Page 7-8 -->
        <section class="page">
            <div class="column">
                <h1 id="page7--title" class="title">AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ PRECISA SABER SOBRE MASSAGENS</h1>
                <b>Fazer massagem regularmente pode oferecer diversos benefícios para o corpo e a mente.</b>
                <br>
                <br>
                <div class="page7--row">
                    <h1 class="page7--number">01</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Relaxamento e Redução do Estresse</b>
                        <p>A massagem é conhecida por induzir um estado profundo de relaxamento, reduzindo os níveis de cortisol (hormônio do estresse) e promovendo uma sensação de calma e bem-estar.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">02</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Melhoria do Sono</b>
                        <p>A massagem relaxante pode contribuir para uma melhor qualidade de sono, proporcionando um estado de relaxamento que facilita o atordoamento.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">03</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Fortalecimento do Sistema Imunológico</b>
                        <p>Algumas pesquisas sugerem que a massagem regular pode fortalecer o sistema imunológico, aumentando a atividade das células brancas do sangue.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">04</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Aumento da Consciência Corporal</b>
                        <p>A massagem pode aumentar a consciência corporal, ajudando as pessoas a se tornarem mais conscientes de áreas de tensão e a adotarem uma postura mais equilibrada.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">05</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Aceleração da Recuperação Pós-Exercício</b>
                        <p>Atletas frequentemente recorrem à massagem para acelerar a recuperação muscular após o exercício intenso, reduzindo a dor e a rigidez.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">06</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Melhoria da Circulação Sanguínea e Linfática</b>
                        <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h1 class="page7--number">07</h1>
                    <div class="page7--column">
                        <b class="page7--text-center">Melhoria da Circulação Sanguínea e Linfática</b>
                        <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page 9 -->
        <section class="page">
            <div class="page9--row">
                <div class="page9--column">
                    <div class="page9--divAux">
                        <div class="page9--aux1">
                            <img class="page9--img" src="../images/anotado.png" height="770px">
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
                        <a href='https://wa.me/5551993861376' target='_blank'>
                            <img id="page9--btnImg" src="../images/whatsapp-white.png" width="40rem" height="40rem">
                            <h5>MAIS INFORMAÇÕES FALE COM A BELOVED</h5>
                        </a>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="rowFooter">
            <img src="../images/logo.png" id="imgHeader">
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
</body>

<script>
    function mouseOver() {
        document.getElementById('whatsLogo').src = '../images/whatsapp-green.png';
    }

    function mouseOut() {
        document.getElementById('whatsLogo').src = '../images/whatsapp-gold.png';
    }

    function submitForm() {

        var inEmail = document.getElementById("inFone");
        var inFone = document.getElementById("inEmail");
        inFone.value = "";
        inEmail.value = "";

        alert("Dados enviados com sucesso!");
    }

    function clickQuero() {
        alert("Agendou sessão");
    }

    window.onload = function() {
        <?php if ($alertaEnviado) : ?>
            alert("Dados enviados com sucesso!");
        <?php endif; ?>
    }

    window.addEventListener('resize', function() {
        var menuList = document.querySelector('.menu-list');
        var isMobile = window.matchMedia('(max-width: 800px)').matches;

        if (!isMobile && window.getComputedStyle(menuList).getPropertyValue('display') === 'flex') {
            menuList.style.display = 'none';
        }
    });

    function toggleMenu() {
        var menuList = document.querySelector('.menu-list');
        var isMobile = window.matchMedia('(max-width: 800px)').matches;

        if (isMobile && window.getComputedStyle(menuList).getPropertyValue('display') === 'none') {
            menuList.style.display = 'flex';
        } else {
            menuList.style.display = 'none';
        }

        if (!isMobile) {
            menuList.style.display = 'none';
        }
    }
</script>

</html>