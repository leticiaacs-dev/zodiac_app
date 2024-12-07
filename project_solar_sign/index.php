<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Signo</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Descubra o seu Signo</h1>
        <form action="show_zodiac_sign.php" method="POST">
            <div class="mb-3">
                <label for="birthdate" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="birthdate" name="birthdate" required>
            </div>
            <button type="submit" class="btn btn-primary">Consultar</button>
        </form>
    </div>
</body>
</html>