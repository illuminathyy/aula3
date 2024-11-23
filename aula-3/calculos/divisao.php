<!DOCTYPE html>
<html>

<head>
    <title>Resultado da Divisão</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    $pg_atual = 'divisao';
    include 'navbar.php';
    ?>

    <div class='container-fluid'>
        <h1>Resultado</h1>
        <?php
        $x = $_GET['num1'];
        $y = $_GET['num2'];

        function divisao(&$x, $y)
        {
            $x = $x / $y;
            return $x;
        }

        $resultado = divisao($x, $y);
        echo ($resultado) ? "$_GET[num1] / $_GET[num2] = $x" : $resultado;
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>