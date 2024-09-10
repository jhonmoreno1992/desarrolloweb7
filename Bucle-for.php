<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeros 20 Números Naturales</title>
    <link rel="stylesheet" href="Bucle-for.css">
</head>
<body>
    <div class="container">
        <h1>Imprimir Primeros 20 Números Naturales</h1>
        <form method="post">
            <button type="submit" name="imprimir">Imprimir Números</button>
        </form>
        
        <div class="numeros">
            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    for ($i = 1; $i <= 20; $i++) {
                        echo "<p>Número: $i</p>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>

