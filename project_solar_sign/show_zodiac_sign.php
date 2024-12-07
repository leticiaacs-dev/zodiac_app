<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $birthdate = $_POST['birthdate'];
    $monthDay = date('m-d', strtotime($birthdate));

    $xml = simplexml_load_file('signos.xml');
    $result = null;

    foreach ($xml->signo as $signo) {
        if ($monthDay >= $signo->dataInicio && $monthDay <= $signo->dataFim) {
            $result = $signo;
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Signo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <?php if ($result): ?>
            <h1>Seu Signo: <?php echo $result->nome; ?></h1>
            <p><?php echo $result->descricao; ?></p>
        <?php else: ?>
            <h1>Signo não encontrado!</h1>
        <?php endif; ?>
        <a href="index.php" class="btn btn-secondary">Voltar</a>
    </div>
</body>
</html>