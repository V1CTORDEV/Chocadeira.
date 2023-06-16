<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Grafico de Barras com CSS na Vertical</title>
    <link href="estilo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<?php
// definindo porcentagem
$height1 = '28%';
$height2 = '49%';
$height3 = '33%';
$height4 = '13%';
$total  = 4; // total de barras
?>
<div id="principal">
    <p>Porcentagem de Acessos</p>
    <?php
    for($i=1;$i <= $total;$i++){
        $height = ${'height' . $i};
        ?>
        <div id="barra">
            <div class="cor<?= $i ?>" style="height:<?= $height ?>"> <?= $height ?> </div>
        </div>
    <? } ?>
</div>
</body>
</html>