<?php
$botaoQuero = "<button id='botaoQuero'><a href='https://wa.me/+351913493604' target='_blank'>
<img id='page9--btnImg' src='../images/whatsapp-white.png' width='40rem' height='40rem'>
<h1 id='page1--button'>QUERO AGENDAR UMA SESSÃO<h1>
</a>
</button>";
$falenoWhats = "<a id='faleNoWhats' href='https://wa.me/+351913493604' target='_blank'>
    <img id='whatsLogo' src='../images/whatsapp-gold2.png'>
    <strong>FALE CONOSCO</strong>
</a>";

$item = "<div class='caixa'>
    <div class='circular'></div>
        <img id='imagemCaixa' src='../images/honk.jpg' alt=''>
        <h2>tTeste</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur nobis dolorem aliquid sapiente magni tempora quia ullam cum veritatis pariatur maiores, natus saepe. Aliquam rem ut, doloribus nulla amet velit.</p>
    </div>"
?>

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
            <img src="../images/logo-gold.png" id="imgHeader">
            <ul class="header--ul"><a href="../corpo/corpo.php"><strong>CORPO</strong></a></ul>
            <ul class="header--ul"><a href="../massagem/massagem.php"><strong>MASSAGEM</strong></a></ul>
            <ul class="header--ul"><a href="../rosto/rosto.php"><strong>ROSTO</strong></a></ul>
            <ul class="header--ul"><a href="../blog/blog.php"><strong>BLOG</strong></a></ul>
            <ul class="header--ul"><a href="../clube/clube.php"><strong>CLUBE</strong></a></ul>
            <ul class="header--ul"><a href="../formacao/formacao.php"><strong>FORMAÇÃO</strong></a></ul>
            <ul class="header--ul"><a href="../belovedEquipamentos/belovedEquipamentos.php"><strong>BELOVED EQUIPAMENTOS</strong></a></ul>
            <ul class="header--ul" onmouseover="mouseOver()" onmouseout="mouseOut()" id="whatsList">
                <?php echo $falenoWhats ?>
            </ul>
            <div class="menu-toggle" onclick="toggleMenu()">
                <div class="barra"></div>
                <div class="barraGold"></div>
                <div class="barra"></div>
                <div class="barraGold"></div>
                <div class="barra"></div>
            </div>
            <div class="menu-list">
                <li><a href="../corpo/corpo.php"><strong>CORPO</strong></a></li>
                <li><a href="../massagem/massagem.php"><strong>MASSAGEM</strong></a></li>
                <li><a href="../rosto/rosto.php"><strong>ROSTO</strong></a></li>
                <li><a href="../blog/blog.php"><strong>BLOG</strong></a></li>
                <li><a href="../clube/clube.php"><strong>CLUBE</strong></a></li>
                <li><a href="../formacao/formacao.php"><strong>FORMAÇÃO</strong></a></li>
                <li><a href="../belovedEquipamentos/belovedEquipamentos.php"><strong>BELOVED EQUIPAMENTOS</strong></a></li>
                <li id="whatsListCel">
                    <?php echo $falenoWhats ?>
                </li>
            </div>
        </div>
    </header>
    <main>
        <!-- Page 2 -->
        <section id="page2" class="page">
            <div class="page2--row">
                <div class="page2--column">
                    <h1 id="page2--title" class="title">Quais os benefícios <span>da massagem?</span></h1>
                    <p>Uma massagem oferece uma variedade de benefícios para a mulher, incluindo relaxamento profundo, alívio do estresse e da tensão muscular. Ao estimular a circulação sanguínea, a massagem contribui para uma pele mais saudável e pode melhorar a qualidade do sono. Além disso, promove o equilíbrio emocional, liberando endorfinas que elevam o humor. A experiência sensorial e o toque terapêutico durante a massagem proporcionam não apenas um alívio físico, mas também um momento de cuidado pessoal e conexão consigo mesma, promovendo o bem-estar geral.</p>
                </div>
                    <img id="page2--Img1" src="../images/massagem/pagina massagem.png" alt="" height="200px">
            </div>
        </section>
        <!-- Page 3 -->
        <section class="page">
            <div class="column">
                <h1 id="page3--title" class="title">PARA QUEM É INDICADO FAZER MASSAGENS?</h1>
                <br>
            </div>
            <br>
            <div class="row">
                <div class="column">
                    <img id="imagemIndicado"src="../images/massagem/3.png" alt="">
                    <br>
                    <strong class="page3--text">GESTANTES</strong>
                    <br>
                </div>
                <div class="column">
                    <img id="imagemIndicado"src="../images/massagem/4.png" alt="">
                    <br>
                    <strong class="page3--text">PESSOAS ESTRESSADAS</strong>
                    <br>
                </div>
                <div class="column">
                    <img id="imagemIndicado"src="../images/massagem/5.png" alt="">
                    <br>
                    <strong class="page3--text">ATLETAS</strong>
                    <br>
                </div>
                <div class="column">
                    <img id="imagemIndicado"src="../images/massagem/6.png" alt="">
                    <br>
                    <strong class="page3--text">PESSOAS COM DORES</strong>
                    <br>
                </div>
                <div class="column">
                    <img id="imagemIndicado"src="../images/massagem/2.png" alt="">
                    <br>
                    <strong class="page3--text">IDOSOS</strong>
                    <br>
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
                    <h2>Drenagem Linfática</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/08.png">
                    </div>
                    <p class="page5--textItem">A drenagem linfática consiste numa massagem com movimentos suaves, mantidos num ritmo certo para evitar rompimento dos vasos linfáticos. Tem como função estimular e facilitar a passagem da linfa pelo sistema circulatório.</p>
                </div>
                <div class="columnItens">
                    <h2>Massagem terapêutica</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/09.png">
                    </div>
                    <p class="page5--textItem">A massagem terapêutica serve para tratar ou prevenir determinados problemas de saúde como o stress, tensão nervosa, tendinites, entorses ou contraturas.</p>
                </div>
                <div class="columnItens">
                    <h2>Massagem pedras quentes</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/11.png">
                    </div>
                    <p class="page5--textItem">A aplicação da pedra vulcânica e basáltica de tamanho e formato adequados, com a pressão e manipulação correta pelo terapeuta, proporciona efeitos muito benéficos.</p>
                </div>
            </div>
            <div class="page4--row">
                <div class="columnItens">
                    <h2>Indianhead Massage</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/10.png">
                    </div>
                    <p class="page5--textItem">É aquela massagem que todos idealizamos, sonhamos e que podemos concretizar. Tem o objetivo de remover toda e qualquer tipo de tensão, sobre os ombros, pescoço, cabeça e rosto, com técnicas baseadas numa forte tradição indiana.</p>
                </div>
                <div class="columnItens">
                    <h2>Massagem de relaxamento</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/12.png">
                    </div>
                    <p class="page5--textItem">Esta massagem ajuda-o a aumentar a flexibilidade e aumenta a circulação sanguínea. Do ponto de vista psicológico, cria uma sensação de bem estar e alegria. <br>A massagem relaxante ajuda a acalmar o corpo e a mente.</p>
                </div>
                <div class="columnItens">
                    <h2>Massagem modeladora</h2>
                    <div class="page4--divGold">
                        <div class="page4--backGold"></div>
                        <img class="page4--img" src="../images/massagem/13.png">
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
        <section id="formPage" class="page">
            <form action="land_massagem.php" method="post">
                <div id="divForm">
                    <h1 id="titleWhite">COMO PARTICIPAR DO NOSSO CLUB BELOVED DE BENEFÍCIOS</h1>
                    <!-- <h2>Cadastre-se na nossa lista VIP para receber mais informações</h2> -->
                    <input type="email" id="inEmail" name="inEmail" placeholder="DIGITE AQUI SEU E-MAIL" required>
                    <input type="tel" id="inFone" name="inFone" placeholder="DIGITE AQUI SEU WHATSAPP" required>
                    <button type="button" onclick="submitForm()" id="formButton">
                        <strong class='page6--text'>QUERO PARTICIPAR</strong>
                    </button>
                </div>
            </form>
            <?php
            $alertaEnviado = false;

            /* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $telefone = $_POST["inFone"];
                $email = $_POST["inEmail"];
                $alertaEnviado = true;
            } */
            ?>
        </section>
        <!-- Page 7-8 -->
        <section id="page7" class="page">
            <div class="column">
                <h1 id="page7--title" class="title">AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ PRECISA <span>SABER SOBRE MASSAGENS</span></h1>
                <strong id="page7--str">Fazer massagem regularmente pode oferecer diversos benefícios para o corpo e a mente.</strong>
                <div class="page7--row">
                    <h2 class="page7--number">01</h2>
                    <div class="page7--column">
                        <strong>Relaxamento e Redução do Estresse</strong>
                        <p>A massagem é conhecida por induzir um estado profundo de relaxamento, reduzindo os níveis de cortisol (hormônio do estresse) e promovendo uma sensação de calma e bem-estar.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">02</h2>
                    <div class="page7--column">
                        <strong>Melhoria do Sono</strong>
                        <p>A massagem relaxante pode contribuir para uma melhor qualidade de sono, proporcionando um estado de relaxamento que facilita o atordoamento.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">03</h2>
                    <div class="page7--column">
                        <strong>Fortalecimento do Sistema Imunológico</strong>
                        <p>Algumas pesquisas sugerem que a massagem regular pode fortalecer o sistema imunológico, aumentando a atividade das células brancas do sangue.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">04</h2>
                    <div class="page7--column">
                        <strong>Aumento da Consciência Corporal</strong>
                        <p>A massagem pode aumentar a consciência corporal, ajudando as pessoas a se tornarem mais conscientes de áreas de tensão e a adotarem uma postura mais equilibrada.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">05</h2>
                    <div class="page7--column">
                        <strong>Aceleração da Recuperação Pós-Exercício</strong>
                        <p>Atletas frequentemente recorrem à massagem para acelerar a recuperação muscular após o exercício intenso, reduzindo a dor e a rigidez.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">06</h2>
                    <div class="page7--column">
                        <strong>Melhoria da Circulação Sanguínea e Linfática</strong>
                        <p>A massagem estimula a circulação sanguínea, facilitando a entrega de nutrientes e oxigênio aos tecidos. Além disso, promove a drenagem linfática, contribuindo para a remoção de toxinas do corpo.</p>
                    </div>
                </div>
                <div id="lastPage7--row" class="page7--row">
                    <h2 class="page7--number">07</h2>
                    <div class="page7--column">
                        <strong>Melhoria de dores crônicas</strong>
                        <p>Massagens regulares podem aliviar significativamente a dor crônica, especialmente nas costas, no pescoço e em áreas propensas a tensões e inflamações. Isso ocorre devido ao relaxamento dos músculos tensos e à melhoria da circulação sanguínea, que juntos ajudam a reduzir a sensação de dor e promovem o bem-estar geral.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page 9 -->
        <section id="page9" class="page">
            <div class="page9--row">
                <div id="page9--c1" class="page9--column">
                    <h1 id="h1Pos">VAMOS <span>FALAR DE</span> BELEZA?</h1>
                    <img id="imgCelia" src="../images/massagem/14.png" alt="">
                    <h2 id="h2Pos">CÉLIA PARDAL <br> <span>CEO - BELOVED</span></h2>
                </div>
                <div id="page9--c2" class="page9--column">
                    <p>Na Beloved Portugal, o conceito de beleza é um todo! Aliamos a mente, corpo e espírito, pois para estarmos bem, todo têm de estar em sintonia.</p>
                    <p>Sinta-se única e deixe-se levar por um misto de sensações leves que não conseguimos normalmente no dia-a-dia imensamente corrido e estressante. Sinta-se única. Sinta-se bem.</p>
                    <p>Deixe-se levar pelos nossos tratamentos e descubra uma variedade de serviços que disponibilizamos a pensar em si. Envolva-se neste brilhante mundo da beleza estética e bem-estar.</p>
                    <br>
                    <button class="page9--button">
                        <a id="faleConosco" href='https://wa.me/+351913493604' target='_blank'>
                            <img id="page9--btnImg" src="../images/whatsapp-white.png" width="40rem" height="40rem">
                            <h2>MAIS INFORMAÇÕES FALE COM A BELOVED</h2>
                        </a>
                    </button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <img src="../images/logo-gold.png" id="imgHeader">
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
    </footer>
</body>

<script>

    function mouseOver() {
        document.getElementById('whatsLogo').src = '../images/whatsapp-green.png';
    }

    function mouseOut() {
        document.getElementById('whatsLogo').src = '../images/whatsapp-gold2.png';
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