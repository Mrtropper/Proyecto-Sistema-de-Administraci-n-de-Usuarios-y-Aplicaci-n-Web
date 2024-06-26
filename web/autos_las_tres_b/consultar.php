<?php
include 'includes/header.php';

$suggestionsFile = 'sugerencias.txt';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $sugerencia = htmlspecialchars($_POST['sugerencia']);
    $calificacion = htmlspecialchars($_POST['calificacion']);
    file_put_contents($suggestionsFile, $sugerencia . ' | Calificación: ' . $calificacion . PHP_EOL, FILE_APPEND);
}

$suggestions = [];
if (file_exists($suggestionsFile)) {
    $suggestions = file($suggestionsFile, FILE_IGNORE_NEW_LINES);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Autos Triple B</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Times New Roman', Times, serif;
            background-color: #f8f9fa;
        }
        .content-box {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }
        .side-images {
            margin: 20px 0;
        }
        .side-images img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }
        .bottom-image {
            margin-top: 20px;
            border-radius: 10px;
            width: 50%;
            height: auto;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
        .suggestion-box {
            margin-top: 20px;
        }
        .suggestions-container {
            margin-top: 20px;
        }
        .suggestion-item {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 10px;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        .suggestion-number {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2 side-images">
                <img src="imagenes/ford.jpg" alt="Imagen lateral 1">
                <img src="imagenes/auto1.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/honda_civic.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/porsche_911.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/ferrari.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/bugati.jpg" alt="Imagen lateral 2" class="mt-4">
            </div>
            <div class="col-md-8">
                <h2 class="text-center my-4">Consulta Autos Triple B</h2>
                <div class="content-box suggestion-box">
                    <h4>Consulta</h4>
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="sugerencia">Escriba su sugerencia u opinión:</label>
                            <textarea class="form-control" id="sugerencia" name="sugerencia" rows="5" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="calificacion">Calificación</label>
                            <input type="range" class="form-control-range" id="calificacion" name="calificacion" min="0" max="10" value="5">
                        </div>
                        <button type="submit" class="btn btn-primary">Enviar Sugerencia</button>
                    </form>
                </div>
                <div class="content-box suggestions-container">
                    <h4>Sugerencias</h4>
                    <?php
                    if (!empty($suggestions)) {
                        foreach ($suggestions as $index => $suggestion) {
                            echo '<div class="suggestion-item">';
                            echo '<span class="suggestion-number">#' . ($index + 1) . '</span> ' . htmlspecialchars($suggestion);
                            echo '<br>';
                            echo '</div>';
                        }
                    } else {
                        echo '<p class="text-center">No hay sugerencias</p>';
                    }
                    ?>
                </div>
            </div>
            <div class="col-md-2 side-images">
                <img src="imagenes/auto2.jpg" alt="Imagen lateral 3">
                <img src="imagenes/camaro.jpg" alt="Imagen lateral 4" class="mt-4">
                <img src="imagenes/nissan_gtr.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/hilux.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/supra.jpg" alt="Imagen lateral 2" class="mt-4">
                <img src="imagenes/pagani.jpg" alt="Imagen lateral 2" class="mt-4">
            </div>
        </div>
    </div>
</body>
</html>
