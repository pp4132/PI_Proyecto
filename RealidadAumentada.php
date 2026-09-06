<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Realidad Aumentada</title>
    <link rel="stylesheet" href="css/Style_RA.css">

</head>

<body>

    <h1>Realidad Aumentada</h1>

    <div id="camera-container">

        <!-- Cámara -->
        <video id="camera" autoplay playsinline></video>

        <!-- Modelo 3D -->
        <div id="three-container"></div>

    </div>

    <div class="controls">

        <button id="startCamera">
            📷 Activar cámara
        </button>
        <button id="stopCamera" style="display:none;">
            🛑 Apagar cámara
        </button>

        <button id="capture">
            📸 Capturar
        </button>

        <button id="download">
            💾 Descargar captura
        </button>

    </div>

     <!-- Three.js -->
    <script type="importmap">
    {
        "imports": {
            "three": "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js",
            "three/addons/": "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/"
        }
    }
    </script>

    <!-- JavaScript principal -->
    <script type="module" src="js/RA_lógica.js"></script>

</body>
</html>
