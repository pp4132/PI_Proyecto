<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Realidad Aumentada</title>
    <link rel="stylesheet" href="css/Style_RA.css">

</head>

<body>

    <h1>Escaner</h1>

    <div id="camera-container">
    </div>

    <div class="controls">

        <button id="startCamera">
            📷 Activar cámara
        </button>
        <button id="stopCamera" style="display:none;">
            🛑 Apagar cámara
        </button>

        <button id="capture">
            📸
        </button>

        <button id="download">
            💾 Descargar captura
        </button>

    </div>

     <!-- Three.js -->
       <script type="importmap">

    {
        "imports": {

            "three":
                "https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js",

            "three/addons/":
                "https://cdn.jsdelivr.net/npm/three@0.160.0/examples/jsm/",

            "mindar-image-three":
                "https://cdn.jsdelivr.net/npm/mind-ar@1.2.5/dist/mindar-image-three.prod.js"

        }
    }

    </script>

    <!-- JavaScript principal -->
    <script type="module" src="js/RA_lógica.js"></script>

</body>
</html>
