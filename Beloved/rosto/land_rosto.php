<?php
$botaoQuero = "<button id='botaoQuero'><a href='https://wa.me/+351913493604' target='_blank'>
<img id='page9--btnImg' src='../images/whatsapp-white.png' width='40rem' height='40rem'>
<h1 id='page1--button'>QUERO REJUVENESCER<h1>
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
    <link rel="stylesheet" href="rosto.css">
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
        <!-- Page 1 -->
        <section id="page1">
            <div id="index--columnMain">
                <h1 class="title">Venha descobrir como tantas pessoas <span>transformam o envelhecimento</span></h1>
                <strong>ENVELHECER É UMA DOENÇA QUE PODE SER CURADA, DIZ CIENTISTA DE HARVARD, SEGUNDO PESQUISA!</strong>
                <br>
                <?php echo $botaoQuero ?>
                <br>
            </div>
        </section>
        <!-- Page 2 -->
        <section id="page2" class="page">
            <div class="page2--row">
                <div class="page2--column">
                    <h1 id="page2--title" class="title">Como <span>fazemos?</span></h1>
                    <p>Nossos tratamentos faciais inovadores alinham-se à pesquisa de David Sinclair, oferecendo uma abordagem revolucionária para diminuir os sinais do tempo e rejuvenescer a sua pele. Em nossa clínica Beloved, abraçamos esses princípios em nossos tratamentos faciais inovadores, alinhando-nos à vanguarda da ciência para proporcionar resultados extraordinários. Descubra como a combinação de tratamentos estéticos avançados e escolhas de estilo de vida inteligentes pode ser a chave para uma jornada de beleza e bem-estar duradoura.</p>
                    <a href='https://wa.me/+351913493604' target='_blank'>
                        <button id="botaoQuero">
                            <strong>AGENDE UMA AVALIAÇÃO</strong>
                        </button>
                    </a>
                </div>
                <br>
                <div class="row">
                    <img id="imgCelia" src="../images/massagem/14.png" alt="">
                    <div id="page2--ColumnAb" class="column">
                        <img id="imgHeader" src="../images/logo-white.png" alt="">
                        <h1>Celia Pardal</h1>
                    </div>
                    <img id="page2--backImg" src="../images/rosto/5.png" alt="">
                </div>
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
                    <div id="peeling" class='imagemCaixa'></div>
                    <h2>PEELING QUÍMICO</h2>
                    <p><span>Renovação Profunda: </span>Eliminação das camadas danificadas da pele, promovendo o crescimento de uma pele mais lisa.</p>
                    <p><span>Rejuvenescimento Visível: </span>Suaviza linhas de expressão e reduz manchas, restaurando a vitalidade da pele.</p>
                    <p><span>Recomendamos para: </span>Pessoas que desejam renovar a textura da pele, indivíduos com linhas de expressão visíveis e manchas na pele, e aqueles que procuram ua abordagem eficaz para revitalizar a pele.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="botox" class='imagemCaixa'></div>
                    <h2>BOTOX</h2>
                    <p><span>Redução de Rugas de Expressão: </span>A toxina botulínica atua para diminuir rugas, proporcionando uma aparência mais jovem e revitalizada.</p>
                    <p><span>Paralisia Temporária: </span>Impede a contração muscular, promovendo relaxamento e suavidade na pele.</p>
                    <p><span>Recomendamos para: </span>Pessoas com rugas de expressão, especialmente ao redor dos olhos e testa. Indivíduos que desejam uma solução temporária para suavizar as rugas e quem busca uma alternativa não cirúrgica para rejuvenescimento facial.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="acido" class='imagemCaixa'></div>
                    <h2>ÁCIDO HIALURÔNICO</h2>
                    <p><span>Juventude em Cada Aplicação: </span>Retarda o envelhecimento, minimiza cicatrizes de acne e proporciona volume aos lábios.</p>
                    <p><span>Harmonização Facial: </span>Contribui para a harmonização de traços no rosto, promovendo uma aparência equilibrada.</p>
                    <p><span>Recomendamos para: </span>Indivíduos que desejam renovar a textura da pele, com linhas de expressão visíveis, manchas cutâneas, cicatrizes de acne ou perda de volume facial, buscando uma abordagem eficaz para revitalizar a pele e realçar a aparência dos lábios de forma natural, procuram retardar os sinais naturais de envelhecimento.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="limpeza" class='imagemCaixa'></div>
                    <h2>LIMPEZA DE PELE</h2>
                    <p><span>Purificação Profunda: </span>Remove cravos e impurezas, proporcionando uma pele limpa e saudável.</p>
                    <p><span>Eliminação de Milium: </span>Reduz pequenos cistos salientes, conferindo uma textura macia à pele.</p>
                    <p><span>Recomendamos para: </span>Pessoas com pontos negros e impurezas na pele, que desejam uma pele mais limpa e saudável, e procuram uma abordagem eficaz para a remoção de milios.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="microagulha" class='imagemCaixa'></div>
                    <h2>MICROAGULHAMENTO FACIAL</h2>
                    <p><span>Revitalização Profunda da pele: </span>O microagulhamento utiliza pequenas agulhas para criar microperfurações na pele, iniciando um processo natural de cura que estimula a produção de colágeno e elastina.</p>
                    <p><span>Firmeza e Elasticidade Incrementadas: </span>Ao aumentar a produção de colágeno e elastina, o microagulhamento melhora a firmeza e a elasticidade da pele, resultando em um aspecto mais jovem e saudável.</p>
                    <p><span>Recomendamos para: </span>Indivíduos buscando melhorar a textura e a qualidade da pele, reduzir cicatrizes de acne, minimizar poros dilatados, linhas finas e rugas, e aqueles em busca de um tratamento eficaz para rejuvenescimento facial.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="radio" class='imagemCaixa'></div>
                    <h2>RADIOFREQUÊNCIA E VACUOTERAPIA FACIAL</h2>
                    <p><span>Rejuvenescimento e Firmeza: </span>A combinação de radiofrequência e vacuoterapia facial é uma técnica avançada para estimular profundamente a produção de colágeno, essencial para dar mais firmeza e elasticidade à pele.</p>
                    <p><span>Estímulo Intenso do Colágeno: </span>A radiofrequência aquece as camadas mais profundas da pele, promovendo a contração imediata do colágeno existente e o estímulo à formação de novo colágeno, enquanto a vacuoterapia melhora a circulação sanguínea e facilita a oxigenação dos tecidos.</p>
                    <p><span>Recomendamos para: </span>Pessoas que desejam reduzir a flacidez facial, melhorar o contorno do rosto, diminuir rugas e linhas de expressão, e para aqueles que procuram um método não invasivo de rejuvenescimento com resultados naturais.</p>
                </div>
                <div class='caixa'>
                    <div class='circular'></div>
                    <div id="hidragloss" class='imagemCaixa'></div>
                    <h2>HIDRAGLOSS</h2>
                    <p><span>Hidratação Profunda: </span>Utilizando técnicas avançadas, o Hidrogloss promove uma hidratação intensiva, penetrando nas camadas mais profundas dos lábios. Isso garante uma aparência saudável e cheia, combatendo a secura e as fissuras.</p>
                    <p><span>Brilho Gloss: </span>Além dos benefícios ao volume e hidratação, confere aos lábios um brilho natural, imitando o efeito de um gloss de alta qualidade. Esse aspecto luminoso realça ainda mais a beleza natural dos seus lábios.</p>
                    <p><span>Recomendamos para: </span>Indivíduos que buscam uma solução eficaz para lábios secos e sem vida, desejando um aspecto mais cheio e brilhante. É ideal para quem prefere métodos não invasivos com resultados visíveis e duradouros na hidratação e volume labial.</p>
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
                <h1 id="page7--title" class="title">AS 7 COISAS MAIS IMPORTANTES QUE VOCÊ <span>PRECISA SABER SOBRE OS TRATAMENTOS FACIAIS</span></h1>
                <div class="page7--row">
                    <h2 class="page7--number">01</h2>
                    <div class="page7--column">
                        <strong>Rejuvenescimento e Redução de Sinais de Envelhecimento</strong>
                        <p>Tratamentos faciais são projetados para revitalizar a pele, reduzindo rugas, linhas finas e promovendo uma aparência jovem.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">02</h2>
                    <div class="page7--column">
                        <strong>Hidratação Profunda e Nutrição Cutânea</strong>
                        <p>Procedimentos como o ácido hialurônico oferecem intensa hidratação, nutrindo a pele e restaurando sua vitalidade.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">03</h2>
                    <div class="page7--column">
                        <strong>Limpeza Profunda e Remoção de Impurezas</strong>
                        <p>Limpezas faciais eliminam cravos, sujeiras e células mortas, proporcionando uma pele mais limpa e saudável.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">04</h2>
                    <div class="page7--column">
                        <strong>Personalização de Tratamentos para Diferentes Tipos de Pele</strong>
                        <p>Cada tratamento é adaptado ao tipo de pele do indivíduo, garantindo resultados eficazes e seguros.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">05</h2>
                    <div class="page7--column">
                        <strong>Resultados Graduais e Manutenção da Aparência Facial</strong>
                        <p>Muitos tratamentos requerem sessões contínuas para obter resultados ideais, e a manutenção regular ajuda a preservar a aparência rejuvenescida.</p>
                    </div>
                </div>
                <div class="page7--row">
                    <h2 class="page7--number">06</h2>
                    <div class="page7--column">
                        <strong>Prevenção de Problemas Cutâneos Futuros</strong>
                        <p>Além de tratar problemas existentes, os tratamentos faciais também visam prevenir o envelhecimento precoce e outros problemas cutâneos.</p>
                    </div>
                </div>
                <div id="lastPage7--row" class="page7--row">
                    <h2 class="page7--number">07</h2>
                    <div class="page7--column">
                        <strong>Tempo de Recuperação e Cuidados Pós-Tratamento</strong>
                        <p>Algumas opções podem envolver um curto período de recuperação, e é essencial seguir cuidados pós-tratamento para otimizar os resultados e garantir uma recuperação suave.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page 10 -->
        <section id="page9" class="page">
            <div class="page9--row">
                <div id="page9--c1" class="page9--column">
                    <h1>O que podemos <span>fazer por si</span> hoje?</h1>
                    <strong>Nossos profissionais estão prontos para personalizar um plano de tratamento facial que atenda às suas necessidades e objetivos estéticos. Agende uma consulta para iniciar sua jornada em direção a uma pele saudável e radiante.</strong>
                    <button class="page9--button">
                        <a id="faleConosco" href='https://wa.me/+351913493604' target='_blank'>
                            <img id="page9--btnImg" src="../images/whatsapp-white.png" width="40rem" height="40rem">
                            <h2>MAIS INFORMAÇÕES FALE COM A BELOVED</h2>
                        </a>
                    </button>
                </div>
                <div id="page9--c2" class="page9--column">
                    <img id="page2--backImg" src="../images/rosto/6.png" alt="">
                    <img id="imgCelia" src="../images/rosto/04.png" alt="">
                    <h2 id="h2Pos"><span>CELIA PARDAL</span> <br>CEO - BELOVED</h2>
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