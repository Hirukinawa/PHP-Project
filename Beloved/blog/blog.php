<?php

$alertaEnviado = false;
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
        <h1>Página em desenvolvimento</h1>
        <?php

        // Carrega a biblioteca do cliente do Google API PHP
        require_once '../../vendor/autoload.php';

        // Inicializa o cliente da API do YouTube
        $client = new Google_Client();
        $client->setDeveloperKey('SUA_CHAVE_DE_API');

        // Inicializa o serviço do YouTube Data
        $youtube = new Google_Service_YouTube($client);

        try {
            // Define os parâmetros da solicitação para buscar vídeos do canal
            $params = array(
                'channelId' => 'ID_DO_CANAL_AQUI',
                'maxResults' => 10, // Número máximo de resultados
                'order' => 'date', // Ordena os resultados por data
            );

            // Faz a solicitação para buscar vídeos
            $response = $youtube->search->listSearch('snippet', $params);

            // Exibe os títulos e IDs dos vídeos
            foreach ($response['items'] as $video) {
                echo "Título: " . $video['snippet']['title'] . "<br>";
                echo "ID do vídeo: " . $video['id']['videoId'] . "<br>";
                echo "<br>";
            }
        } catch (Google_Service_Exception $e) {
            echo "Erro ao acessar a API do YouTube: " . htmlspecialchars($e->getMessage());
        } catch (Google_Exception $e) {
            echo "Erro de cliente: " . htmlspecialchars($e->getMessage());
        }
        ?>
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
