import * as THREE from "three";

//librerias para el formato de los modelos
import { OBJLoader } 
    from "three/addons/loaders/OBJLoader.js";

import { MTLLoader } 
    from "three/addons/loaders/MTLLoader.js";

import { OrbitControls } 
    from "three/addons/controls/OrbitControls.js";


// Elementos del html
const video = document.getElementById("camera");

const startCameraButton =
    document.getElementById("startCamera");

const stopCameraButton =
    document.getElementById("stopCamera");

const captureButton =
    document.getElementById("capture");

const downloadButton =
    document.getElementById("download");

const container =
    document.getElementById("three-container");

// Cámara de celulares
let stream = null;

startCameraButton.addEventListener("click", async () => {

    try {

        stream = await navigator.mediaDevices.getUserMedia({

            video: {
                facingMode: {
                    ideal: "environment"
                }
            },

            audio: false

        });


        video.srcObject = stream;


        startCameraButton.style.display = "none";

        stopCameraButton.style.display =
            "inline-block";


    } catch (error) {

        console.error(error);

        alert(
            "No se pudo acceder a la cámara. " +
            "Verifica los permisos del navegador."
        );

    }

});


// ===================================
// APAGAR CÁMARA
// ===================================

stopCameraButton.addEventListener("click", () => {

    if (stream) {

        stream.getTracks().forEach(track => {
            track.stop();
        });

        stream = null;

    }


    video.srcObject = null;


    startCameraButton.style.display =
        "inline-block";

    stopCameraButton.style.display =
        "none";

});


// ===================================
// THREE.JS
// ===================================

const scene = new THREE.Scene();


// ===================================
// CÁMARA 3D
// ===================================

const camera = new THREE.PerspectiveCamera(
    45,
    container.clientWidth / container.clientHeight,
    0.1,
    1000
);

camera.position.set(0, 0, 5);


// ===================================
// RENDERER
// ===================================

const renderer = new THREE.WebGLRenderer({

    alpha: true,

    antialias: true,

    preserveDrawingBuffer: true

});


renderer.setPixelRatio(
    Math.min(window.devicePixelRatio, 2)
);

renderer.setSize(
    container.clientWidth,
    container.clientHeight
);

renderer.outputColorSpace =
    THREE.SRGBColorSpace;


container.appendChild(
    renderer.domElement
);

// Luces
const ambientLight =
    new THREE.AmbientLight(
        0xffffff,
        2
    );

scene.add(ambientLight);


const directionalLight =
    new THREE.DirectionalLight(
        0xffffff,
        3
    );

directionalLight.position.set(
    3,
    5,
    5
);

scene.add(directionalLight);


// Controles
const controls =
    new OrbitControls(
        camera,
        renderer.domElement
    );

controls.enableDamping = true;

controls.enablePan = false;

controls.minDistance = 2;

controls.maxDistance = 8;


// Cargar modelos 3D
/* 
    Se deben de ingresar en la carpeta Modelos tanto el .obj como el .mtl
*/

const mtlLoader = new MTLLoader();


mtlLoader.load(

    "js/Modelos/cubo.mtl",

    function (materials) {

        materials.preload();


        const objLoader =
            new OBJLoader();

        objLoader.setMaterials(
            materials
        );


        objLoader.load(

            "js/Modelos/cubo.obj",

            function (model) {

                model.scale.set(
                    1,
                    1,
                    1
                );

                model.position.set(
                    0,
                    -1,
                    0
                );


                scene.add(model);

            },


            undefined,


            function (error) {

                console.error(
                    "Error cargando OBJ:",
                    error
                );

            }

        );

    },


    undefined,


    function (error) {

        console.error(
            "Error cargando MTL:",
            error
        );

    }

);


// ===================================
// REDIMENSIONAR
// ===================================

function resize() {

    const width =
        container.clientWidth;

    const height =
        container.clientHeight;


    camera.aspect =
        width / height;

    camera.updateProjectionMatrix();


    renderer.setSize(
        width,
        height
    );

}


window.addEventListener(
    "resize",
    resize
);


// ===================================
// ANIMACIÓN
// ===================================

function animate() {

    requestAnimationFrame(
        animate
    );


    controls.update();


    renderer.render(
        scene,
        camera
    );

}


animate();


// ===================================
// CAPTURA DE PANTALLA
// ===================================

captureButton.addEventListener(
    "click",
    () => {

        /*
            Creamos un canvas del mismo tamaño
            que el área de la cámara.
        */

        const canvas =
            document.createElement("canvas");


        const width =
            container.clientWidth;

        const height =
            container.clientHeight;


        canvas.width = width;

        canvas.height = height;


        const ctx =
            canvas.getContext("2d");


        // -------------------------------
        // DIBUJAR CÁMARA
        // -------------------------------

        ctx.drawImage(
            video,
            0,
            0,
            width,
            height
        );


        // -------------------------------
        // DIBUJAR MODELO 3D ENCIMA
        // -------------------------------

        ctx.drawImage(
            renderer.domElement,
            0,
            0,
            width,
            height
        );


        // -------------------------------
        // CREAR IMAGEN
        // -------------------------------

        const image =
            canvas.toDataURL(
                "image/png"
            );


        // -------------------------------
        // MOSTRAR BOTÓN DESCARGAR
        // -------------------------------

        downloadButton.style.display =
            "inline-block";


        // -------------------------------
        // PREPARAR DESCARGA
        // -------------------------------

        downloadButton.onclick = () => {

            const link =
                document.createElement("a");


            link.download =
                "realidad-aumentada.png";


            link.href = image;


            link.click();

        };


        // -------------------------------
        // MOSTRAR CAPTURA
        // -------------------------------

        const newWindow =
            window.open();


        if (newWindow) {

            newWindow.document.write(
                `<img src="${image}"
                style="max-width:100%">`
            );

        }

    }
);
