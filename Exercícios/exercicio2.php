<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: blue}
        .mesclado {color: green}
        .eu {color: orange}
    </style>

</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class="eu">Programador: Gabriela Gilioli</p>
    <hr>

    <?php
        // Geração de texto (string)
        echo "Chama Sesi-Senai !";

        /* Geração de texto estruturado (com tags, atributos) */
        echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP. </h2>";
        echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP. </h2>";

    ?>

    <h1 class="mesclado">HTML e PHP mesclados</h1>
    <p>Parágrafos HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p>Parágrafo mesclando HTML com <?=$linguagem?> </p>
</body>
</html>