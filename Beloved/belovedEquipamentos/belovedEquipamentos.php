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
    </main>
</body>
</html>
