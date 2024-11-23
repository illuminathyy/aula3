<!DOCTYPE html>
<html>

<head>
    <title>Mostrar Nome Salvo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php
    session_start();
    $pg_atual = 'mostrar';
    include 'navbar.php';
    ?>
    <div class='container-fluid'>
        <h1>Nome Salvo:</h1>
        <?php
        if (isset($_SESSION['nome'])) {
            echo "<p>Olá, " . $_SESSION['nome'] . "!</p>";
        } else {
            echo "<p>Nenhum nome encontrado. Por favor, vá para a <a href='primeira.php'>primeira página</a> e insira seu nome.</p>";
        }
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>