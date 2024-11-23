<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>

<body>

    <?php
    function calcularJurosSimples($capital, $taxa, $tempo)
    {
        $juros = $capital * ($taxa / 100) * $tempo;
        return $juros;
    }

    function calcularJurosCompostos($capital, $taxa, $tempo)
    {
        $juros = $capital * (pow(1 + $taxa / 100, $tempo) - 1);
        return $juros;
    }

    function soma($primeiro, $segundo)
    {
        echo "$primeiro + $segundo = ", $primeiro + $segundo;
    }

    $capital = 1000;
    $taxa = 5;
    $tempo = 2;

    $jurosSimples = calcularJurosSimples($capital, $taxa, $tempo);
    echo "Juros Simples: $jurosSimples\n";

    $jurosCompostos = calcularJurosCompostos($capital, $taxa, $tempo);
    echo "Juros Compostos: $jurosCompostos\n";
    ?>
</body>

</html>