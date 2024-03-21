<?php
$botaoQuero = "<button id='botaoQuero'><a href='https://wa.me/+351913493604' target='_blank'>
<img id='page9--btnImg' src='../images/whatsapp-white.png' width='40rem' height='40rem'>
<h1 id='page1--button'>QUERO DESCOBRIR<h1>
</a>
</button>";
$falenoWhats = "<a id='faleNoWhats' href='https://wa.me/+351913493604' target='_blank'>
    <img id='whatsLogo' src='../images/whatsapp-gold2.png'>
    <strong>FALE CONOSCO</strong>
</a>";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="corpo.css">
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
            <ul class="header--ul"><a href="../belovedEquipamentos/belovedEquipamentos.php"><strong>BELOVED EQUIPAMENTS</strong></a></ul>
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
        <!-- Page 1 -->
        <section id="page1">
            <div id="index--columnMain">
                <h1 class="title">TRANSFORME SEU CORPO E MENTE COM <span>OS AVANÇOS MAIS RECENTES EM </span>TRATAMENTOS CORPORAIS</h1>
                <strong>Descubra como a mais recente tecnologia em tratamentos corporais está transformando vidas na Clínica Beloved.</strong>
                <br>
                <?php echo $botaoQuero ?>
                <br>
            </div>
        </section>
        <!-- Page 2 -->
        <section id="page2" class="page">
            <div id="pc" class="page2--column">
                <h2>MELHORE A SUA QUALIDADE DE VIDA COM</h2>
                <h1 id="page2--title" class="title">Inovação e <span>excelência</span></h1>
                <a href='https://wa.me/+351913493604' target='_blank'>
                    <button id="botaoQuero">
                        <strong>AGENDE UMA AVALIAÇÃO</strong>
                    </button>
                </a>
            </div>
            <h2 id="h2Mobile" class="mobile">MELHORE A SUA QUALIDADE DE VIDA COM</h2>
            <h1 id="page2--title" class="mobile">Inovação e <span>excelência</span></h1>
            <a id="aMobile" class="mobile" href='https://wa.me/+351913493604' target='_blank'>
                <button id="botaoQuero">
                    <strong>AGENDE UMA AVALIAÇÃO</strong>
                </button>
            </a>
            <img class="pc" id="page2--imgCelia" src="../images/corpo/02.png" alt="">
            <div id="pc" class="meio-circulo"></div>
            <strong id="page2--text">Em um mundo onde a aparência e a saúde andam de mãos dadas, a Clínica Beloved emerge como um farol de inovação e excelência. Com base nas últimas tendências e avanços tecnológicos, nossos tratamentos corporais prometem não apenas transformar sua pele, mas rejuvenescer sua alma e bem-estar.</strong>
            <div id="mobile" class="rowPage2Mobile">
                <img id="page2--imgCelia" src="../images/corpo/02.png" alt="">
                <div class="meio-circulo"></div>
            </div>
        </section>
        <!-- Page 3-6 -->
        <section id="page3" class="page">
            <div class="column">
                <h1 id="page3--title" class="title">Descubra os inúmeros benefícios e para quem recomendamos os nossos tratamentos faciais: </h1>
                <br>
            </div>
            <br>
            <div class="row">
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="cavitacao" class='imagemCaixa'></div>
                    <h2>CAVITAÇÃO</h2>
                    <p><span>Um método não invasivo que utiliza ultrassons para reduzir a gordura localizada: </span>Esta técnica tem sido amplamente estudada e é reconhecida por sua eficácia na modelagem corporal, oferecendo uma alternativa segura à lipoaspiração.</p>
                    <p><span>Recomendamos para: </span>Indivíduos procurando redução de gordura localizada sem procedimentos cirúrgicos, pessoas que desejam melhorar o contorno corporal em áreas específicas como abdômen, coxas e quadris, e aqueles que buscam uma solução eficaz com resultados visíveis e rápidos.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="radio" class='imagemCaixa'></div>
                    <h2>RADIOFREQUÊNCIA</h2>
                    <p><span>Dê adeus à flacidez: </span>A radiofrequência estimula a produção de colágeno, melhorando a firmeza e a textura da pele. É a solução perfeita para quem busca um aspecto jovem e revitalizado.</p>
                    <p><span>Recomendamos para: </span>Pessoas com sinais de flacidez na pele buscando uma aparência mais firme e jovem, indivíduos interessados em melhorar a textura e a elasticidade da pele, e quem deseja tratar a celulite e melhorar a aparência da superfície da pele.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="pressoterapia" class='imagemCaixa'></div>
                    <h2>PRESSOTERAPIA MÉDICA</h2>
                    <p><span>Revitalização através da pressão: </span>Este tatamento inovador melhora a circulação e auxilia na drenagem linfática, reduzindo o inchaço e promovendo uma sensação de leveza imediata.</p>
                    <p><span>Recomendamos para: </span>Aqueles que sofrem com inchaço e retenção de líquidos, indivíduos que buscam uma solução para melhorar a circulação sanguínea e linfática, e pessoas procurando uma terapia complementar para processos de detoxificação e emagrecimento.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="vacuoterapia" class='imagemCaixa'></div>
                    <h2>VACUOTERAPIA</h2>
                    <p><span>Redefinindo contornos com precisão: </span>A vacuoterapia é ideal para tonificar a pele, reduzir a celulite e promover uma silhueta mais definida, utilizando a técnica de sucção para estimular profundamente o tecido cutâneo.</p>
                    <p><span>Recomendamos para: </span>Pessoas que desejam reduzir a celulite e melhorar a firmeza da pele, indivíduos buscando definir contornos corporais de maneira não invasiva, e quem procura um tratamento para tonificar a pele e promover a saúde cutânea.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="emso" class='imagemCaixa'></div>
                    <h2>EMSO (ESTIMULAÇÃO MUSCULAR ELÉTRICA)</h2>
                    <p><span>Fortalecimento e tonificação sem esforço: </span>A EMS é uma tecnologia de ponta que promove a contração muscular, ajudando na tonificação e definição, sem a necessidade de exercícios extenuantes.</p>
                    <p><span>Recomendamos para: </span>Indivíduos buscando tonificação muscular sem a necessidade de exercício físico intenso, pessoas que desejam melhorar a força e a definição muscular, e aqueles em processo de reabilitação ou que têm limitações para a prática de atividade física regular.</p>
                </div>
                <div id="descubra" class="column">
                    <h1>Descubra o <br><span>tratamento ideal</span><br> para si hoje:</h1>
                    <a href='https://wa.me/+351913493604' target='_blank'>
                        <button id="botaoQuero">
                            <strong>QUERO DESCOBRIR</strong>
                        </button>
                    </a>
                </div>
            </div>
        </section>
        <!-- Page 7 -->
        <section id="formPage" class="page">
            <form action="land_massagem.php" method="post">
                <div id="divForm">
                    <h1 id="titleWhite">COMO PARTICIPAR DO NOSSO CLUB BELOVED DE BENEFÍCIOS</h1>
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
        <!-- Page 8-9 -->
        <section id="page7" class="page">
            <div class="column">
                <h1 id="page7--title" class="title">AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ <span>PRECISA SABER SOBRE OS TRATAMENTOS CORPORAIS</span></h1>
                <div class="page7--row">
                    <h2 class="page7--number">01</h2>
                    <div class="page7--column">
                        <strong>Eficácia na Redução de Medidas</strong>
                        <p>Tratamentos corporais, como a cavitação, são altamente eficazes na redução de gordura localizada e no contorno do corpo, oferecendo uma alternativa não invasiva à lipoaspiração.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">02</h2>
                    <div class="page7--column">
                        <strong>Melhora na Textura e Elasticidade da Pele</strong>
                        <p>Procedimentos como a radiofrequência e a vacuoterapia melhoram significativamente a textura e a elasticidade da pele, combatendo a flacidez e a celulite.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">03</h2>
                    <div class="page7--column">
                        <strong>Desintoxicação e Drenagem Linfática</strong>
                        <p>A pressoterapia médica é um método excelente para promover a drenagem linfática, auxiliando na desintoxicação do corpo e redução do inchaço.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">04</h2>
                    <div class="page7--column">
                        <strong>Tonificação Muscular sem Esforço</strong>
                        <p>A EMS (Estimulação Muscular Elétrica) permite tonificar os músculos sem a necessidade de exercícios físicos intensos, ideal para quem tem limitações físicas ou deseja potencializar seus resultados estéticos.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">05</h2>
                    <div class="page7--column">
                        <strong>Tratamentos Personalizados</strong>
                        <p>Cada tratamento corporal pode ser personalizado para atender às necessidades específicas do cliente, garantindo resultados mais efetivos e satisfatórios.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">06</h2>
                    <div class="page7--column">
                        <strong>Combate à Celulite</strong>
                        <p>A combinação de tratamentos, como vacuoterapia e radiofrequência, é especialmente eficaz no combate à celulite, melhorando a aparência da pele e aumentando a confiança.</p>
                    </div>
                </div>
                <div id="lastPage7--row" class="page7--row">
                    <h2 class="page7--number">07</h2>
                    <div class="page7--column">
                        <strong>Manutenção dos Resultados</strong>
                        <p>Embora muitos tratamentos corporais ofereçam resultados visíveis após as primeiras sessões, é importante manter um estilo de vida saudável e, em alguns casos, seguir um plano de tratamento contínuo para manter os efeitos a longo prazo.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page 10 -->
        <section id="page9" class="page">
            <h1 class="mobile">Transforme <span>sua vida </span>hoje!</h1>
            <div class="page9--column">
                <p>Na Clínica Beloved, nossa missão é oferecer tratamentos que não apenas embelezam, mas também melhoram sua qualidade de vida. Somos especialistas e dedicados as tecnologias mais avançadas, estamos aqui para guiá-lo em sua jornada de transformação. Agende sua consulta e descubra o potencial ilimitado do seu bem-estar e beleza.</p>
                <h2 id="h2Pos"><span>CELIA PARDAL</span> <br>CEO - BELOVED</h2>
            </div>
            <img id="imgCelia" src="../images/corpo/01.png" alt="">
            <div class="column">
                <h1>Transforme <span>sua vida </span>hoje!</h1>
                <a href='https://wa.me/+351913493604' target='_blank'>
                    <button id="botaoQuero">
                        <strong>FALE COM A BELOVED</strong>
                    </button>
                </a>
            </div>
            <a class="mobile2" href='https://wa.me/+351913493604' target='_blank'>
                <button id="botaoQuero">
                    <strong>FALE COM A BELOVED</strong>
                </button>
            </a>
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