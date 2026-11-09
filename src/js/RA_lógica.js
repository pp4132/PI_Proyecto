import * as THREE from "three";

import { MindARThree } from "mindar-image-three";

import { OBJLoader }
    from "three/addons/loaders/OBJLoader.js";

import { MTLLoader }
    from "three/addons/loaders/MTLLoader.js";


// Elementos del HTML
const video =
    document.getElementById("camera");

const startCameraButton =
    document.getElementById("startCamera");

const stopCameraButton =
    document.getElementById("stopCamera");

const particleButton =
    document.getElementById("particulas");

const animationButton =
    document.getElementById("animacion");

const captureButton =
    document.getElementById("capture");


// MINDAR
const mindarThree =
    new MindARThree({
        container: document.getElementById("camera-container"),
        imageTargetSrc: "Logos.mind"
            //el archivo que contiene las imágenes que se usarán como marcador,
            //pueden ser varias imágenes, pero por ahora solo son 3.
});

//Variables para habilitar o deshabilitar las partículas y la animación de los modelos
let particlesEnabled = false;
let animationEnabled = false;


// THREE.JS
const { renderer, scene, camera } = mindarThree;
renderer.preserveDrawingBuffer = true;

//Orden de los target6s
//Acereros, Algodoneros, Caliente, Charros, Dorados, Rieleros, Saraperos, Sultanes, Tecolotes, Toros

const targets = [

    // 🔥 FUEGO
    {
        index: 0,
        obj: "Modelos/cubo/cubo.obj",
        mtl: "Modelos/cubo/cubo.mtl",
        scale: 0.5,

        particles: {
            type: "fire",
            color: 0xFF4500,
            count: 3500,
            size: 0.1
        }
    },

    // 💨 HUMO
    {
        index: 1,
        obj: "Modelos/camiseta/jersey.obj",
        mtl: "Modelos/camiseta/jersey.mtl",
        scale: 0.5,

        particles: {
            type: "fire",
            color: 0x00FF69,
            count: 4500,
            size: 0.5
        }
    },

    // 💧 AGUA
    {
        index: 2,
        obj: "Modelos/cilindro/cilindro.obj",
        mtl: "Modelos/cilindro/cilindro.mtl",
        scale: 0.5,

        particles: {
            type: "water",
            color: 0x00BFFF,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 3,
        obj: "Modelos/trofeo/psx_style_trophy.obj",
        mtl: "Modelos/trofeo/psx_style_trophy.mtl",
        scale: 1.0,

        particles: {
            type: "water",
            color: 0XFAFF00,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 4,
        obj: "Modelos/bate/bate.obj",
        mtl: "Modelos/bate/bate.mtl",
        scale: 1.5,

        particles: {
            type: "water",
            color: 0X5900FF,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 5,
        obj: "Modelos/ball/worn_baseball_ball.obj",
        mtl: "Modelos/ball/worn_baseball_ball.mtl",
        scale: 1.5,

        particles: {
            type: "water",
            color: 0X5900FF,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 6,
        obj: "Modelos/trofeo2/trophy_model.obj",
        mtl: "Modelos/trofeo2/trophy_model.mtl",
        scale: 2.0,

        particles: {
            type: "water",
            color: 0XF200FF,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 7,
        obj: "Modelos/casco/baseball_helmet__game-ready_sports_asset.obj",
        mtl: "Modelos/casco/baseball_helmet__game-ready_sports_asset.mtl",
        scale: 2.0,

        particles: {
            type: "water",
            color: 0XF200FF,
            count: 3500,
            size: 0.1
        }
    },

    {
        index: 8,
        obj: "Modelos/bat2/bat2.obj",
        mtl: "Modelos/bat2/bat2.mtl",
        scale: 2.0,

        particles: {
            type: "fire",
            color: 0X000000,
            count: 3500,
            size: 0.3
        }
    },

    {
        index: 9,
        obj: "Modelos/esfera/esfera.obj",
        mtl: "Modelos/esfera/esfera.mtl",
        scale: 0.5,

        particles: {
            type: "smoke",
            color: 0x00000,
            count: 3600,
            size: 1.0
        }
    }

];


// Anchors
const anchors = [];

const particleSystems = [];


// Luces
const ambientLight =
    new THREE.HemisphereLight(
        0xffffff,
        0xbbbbff,
        1
    );

scene.add(ambientLight);


const directionalLight =
    new THREE.DirectionalLight(
        0xffffff,
        2
    );

directionalLight.position.set(
    1,
    3,
    2
);

scene.add(directionalLight);

//Crear anchors
targets.forEach(target => {

    const anchor =
        mindarThree.addAnchor(
            target.index
        );


    anchors.push(anchor);


    cargarModelo(target, anchor);

});

// Cargar modelos
function cargarModelo(target,anchor) {

    const mtlLoader = new MTLLoader();

    mtlLoader.load(

        target.mtl,
        materials => {

            materials.preload();

            const objLoader = new OBJLoader();


            objLoader.setMaterials(
                materials
            );

            objLoader.load(
                target.obj,
                model => {

                    console.log(
                        "Modelo cargado:",
                        target.obj
                    );


                    model.scale.set(
                        target.scale,
                        target.scale,
                        target.scale
                    );

                    model.position.set(
                        0,
                        0,
                        0
                    );

                    anchor.group.add(
                        model
                    );

                    model.userData.isARModel = true;

                    // Crear partículas
                    const particles =
                        crearParticulas(
                            target,
                            anchor
                        );

                    particles.visible = false;


                    particleSystems.push(
                        particles
                    );

                },
                undefined,
                error => {

                    console.error(
                        "Error cargando OBJ:",
                        error
                    );
                }
            );
        },

        undefined,
        error => {
            console.error(
                "Error cargando MTL:",
                error
            );
        }
    );
}


// PARTÍCULAS
function crearParticulas(target, anchor) {

    const particleCount = target.particles.count;

    const positions =
        new Float32Array(particleCount * 3);

    const velocities =
        new Float32Array(particleCount * 3);

    const type = target.particles.type;

    for (let i = 0; i < particleCount; i++) {

        const i3 = i * 3;

        // Posición inicial
        positions[i3] =
            (Math.random() - 0.5) * 1.2;

        positions[i3 + 1] =
            Math.random() * 1.2 - 0.3;

        positions[i3 + 2] =
            (Math.random() - 0.5) * 1.2;


        //FUEGO
        if (type === "fire") {

            velocities[i3] =
                (Math.random() - 0.5) * 0.006;

            velocities[i3 + 1] =
                Math.random() * 0.015 + 0.004;

            velocities[i3 + 2] =
                (Math.random() - 0.5) * 0.006;
        }


        //HUMO
        else if (type === "smoke") {

            velocities[i3] =
                (Math.random() - 0.5) * 0.003;

            velocities[i3 + 1] =
                Math.random() * 0.006 + 0.001;

            velocities[i3 + 2] =
                (Math.random() - 0.5) * 0.003;
        }


        //AGUA
        else if (type === "water") {

            positions[i3 + 1] =
                Math.random() * 1.5;

            velocities[i3] =
                (Math.random() - 0.5) * 0.008;

            velocities[i3 + 1] =
                -(Math.random() * 0.012 + 0.004);

            velocities[i3 + 2] =
                (Math.random() - 0.5) * 0.008;
        }
    }


    const geometry =
        new THREE.BufferGeometry();

    geometry.setAttribute(
        "position",
        new THREE.BufferAttribute(
            positions,
            3
        )
    );


    // Material diferente dependiendo del efecto
    let blending =
        THREE.AdditiveBlending;

    let opacity = 0.9;


    // El humo no debe brillar demasiado
    if (type === "smoke") {
        blending = THREE.NormalBlending;
        opacity = 0.01;
    }


    const material =
        new THREE.PointsMaterial({

            color:
                target.particles.color,

            size:
                target.particles.size,

            transparent: true,

            opacity: opacity,

            depthWrite: false,

            blending: blending
        });


    const particles =
        new THREE.Points(
            geometry,
            material
        );


    particles.userData.velocities =
        velocities;

    particles.userData.type =
        type;


    anchor.group.add(
        particles
    );


    return particles;
}



// Actualizar partículas
function actualizarParticulas() {

    particleSystems.forEach(particles => {

        const positions =
            particles.geometry
                .attributes
                .position
                .array;

        const velocities =
            particles.userData.velocities;

        const type =
            particles.userData.type;


        for (
            let i = 0;
            i < positions.length;
            i += 3
        ) {

            // Movimiento
            positions[i] += velocities[i];

            positions[i + 1] +=
                velocities[i + 1];

            positions[i + 2] +=
                velocities[i + 2];


            // 🔥 FUEGO
            if (type === "fire") {

                // Movimiento irregular
                positions[i] +=
                    Math.sin(
                        positions[i + 1] * 10
                    ) * 0.002;

                positions[i + 2] +=
                    Math.cos(
                        positions[i + 1] * 8
                    ) * 0.002;


                // Reiniciar
                if (positions[i + 1] > 1.5) {

                    positions[i] =
                        (Math.random() - 0.5) * 0.8;

                    positions[i + 1] =
                        -0.4;

                    positions[i + 2] =
                        (Math.random() - 0.5) * 0.8;
                }
            }


            // 💨 HUMO
            else if (type === "smoke") {

                // Movimiento suave
                positions[i] +=
                    Math.sin(
                        positions[i + 1] * 4
                    ) * 0.002;

                positions[i + 2] +=
                    Math.cos(
                        positions[i + 1] * 5
                    ) * 0.002;


                // Reiniciar
                if (positions[i + 1] > 1.7) {

                    positions[i] =
                        (Math.random() - 0.5) * 0.8;

                    positions[i + 1] =
                        -0.3;

                    positions[i + 2] =
                        (Math.random() - 0.5) * 0.8;
                }
            }


            // 💧 AGUA
            else if (type === "water") {

                // Pequeña oscilación
                positions[i] +=
                    Math.sin(
                        positions[i + 1] * 12
                    ) * 0.001;

                positions[i + 2] +=
                    Math.cos(
                        positions[i + 1] * 10
                    ) * 0.001;


                // Reiniciar cuando cae
                if (positions[i + 1] < -0.6) {

                    positions[i] =
                        (Math.random() - 0.5) * 1.2;

                    positions[i + 1] =
                        1.5;

                    positions[i + 2] =
                        (Math.random() - 0.5) * 1.2;
                }
            }
        }


        particles.geometry
            .attributes
            .position
            .needsUpdate = true;

    });
}



// Actualizar modelos
function actualizarModelos() {

    if (!animationEnabled) {
        return;
    }

    anchors.forEach(anchor => {

        anchor.group.traverse(
            object => {

                if (
                    object.userData
                        .isARModel
                ) {

                    object.rotation.y += 0.01;

                }

            }
        );

    });
}



//Encender cámara para la realidad aumentada
startCameraButton.addEventListener(
    "click",
    async () => {

        try {

            console.log(
                "Iniciando AR..."
            );


            await mindarThree.start();


            console.log("AR iniciado");

            startCameraButton.style.display = "none";
            stopCameraButton.style.display = "inline-block";
            particleButton.style.display ="inline-block";
            animationButton.style.display ="inline-block";
           
            renderer.setAnimationLoop(
                () => {

                    actualizarModelos();
                    if (particlesEnabled) {
                        actualizarParticulas();
                    }


                    renderer.render(
                        scene,
                        camera
                    );
                }
            );
        }

        catch (error) {
            console.error(
                "Error iniciando AR:",
                error
            );

            alert(
                "No se pudo acceder a la cámara."
            );
        }
    }
);


//Apagar cámara
stopCameraButton.addEventListener(
    "click",
    async () => {

        try {

            renderer.setAnimationLoop(
                null
            );

            await mindarThree.stop();

            startCameraButton.style.display = "inline-block";
            stopCameraButton.style.display = "none";
            particleButton.style.display ="none";
            animationButton.style.display ="none";

            console.log("AR detenido");

        }

        catch (error) {

            console.error("Error deteniendo AR:", error);
        }
    }
);


// CAPTURA Y ENVÍO A LA GALERÍA

captureButton.addEventListener(
    "click",
    async () => {

        const container =
            document.getElementById("camera-container");

        const video =
            container.querySelector("video");

        if (!video) {
            alert("La cámara no está activa.");
            return;
        }

        if (!video.videoWidth || !video.videoHeight) {
            alert("La cámara todavía no está lista.");
            return;
        }

        captureButton.disabled = true;

        try {

            // Dimensiones del contenedor
            const width = container.clientWidth;
            const height = container.clientHeight;

            // Crear canvas
            const canvas =
                document.createElement("canvas");

            canvas.width = width;
            canvas.height = height;

            const ctx = canvas.getContext("2d");

            // Dibujar cámara
            dibujarVideoCover(
                ctx,
                video,
                0,
                0,
                width,
                height
            );

            // Renderizar Three.js
            renderer.render(scene, camera);

            const threeCanvas = renderer.domElement;

            ctx.drawImage(
                threeCanvas,
                0,
                0,
                threeCanvas.width,
                threeCanvas.height,
                0,
                0,
                width,
                height
            );

            // Convertir a PNG
            const blob = await new Promise(resolve => {

                canvas.toBlob(
                    resolve,
                    "image/png"
                );

            });

            if (!blob) {
                throw new Error(
                    "No se pudo generar la imagen."
                );
            }

            // Preparar archivo
            const datos = new FormData();

            datos.append(
                "captura",
                blob,
                "realidad-aumentada.png"
            );

            // Enviar a PHP
            const respuesta = await fetch(
                "guardar_captura.php",
                {
                    method: "POST",
                    body: datos
                }
            );

            const resultado = await respuesta.json();

            if (!respuesta.ok || !resultado.success) {

                throw new Error(
                    resultado.message ||
                    "No se pudo guardar la captura."
                );

            }

            // Ir a la galería
            alert("¡Captura guardada correctamente!");

            window.location.href =
                "Galeria.php?captura=guardada";

        }

        catch (error) {

            console.error(
                "Error guardando captura:",
                error
            );

            alert(
                error.message ||
                "Ocurrió un error al guardar la imagen."
            );

        }

        finally {

            captureButton.disabled = false;

        }

    }
);



//Botón de partículas
particleButton.addEventListener("click", () => {

    particlesEnabled = !particlesEnabled;

    particleSystems.forEach(particles => {

        particles.visible = particlesEnabled;

    });

    particleButton.textContent =
        particlesEnabled
            ? "✨ Ocultar partículas"
            : "✨ Mostrar partículas";

});

//Botón de animación
animationButton.addEventListener(
    "click",
    () => {

        animationEnabled =
            !animationEnabled;

        animationButton.textContent =
            animationEnabled
                ? "⏸️ Detener animación"
                : "🔄 Activar animación";

    }
);




function dibujarVideoCover(
    ctx, video,
    destinoX, destinoY,
    destinoWidth, destinoHeight) {

    const videoWidth = video.videoWidth;
    const videoHeight = video.videoHeight;

    if (!videoWidth || !videoHeight) {
        return;
    }

    const videoRatio = videoWidth / videoHeight;

    const destinoRatio = destinoWidth / destinoHeight;

    let sourceX = 0;
    let sourceY = 0;
    let sourceWidth = videoWidth;
    let sourceHeight = videoHeight;

    // El contenedor es más vertical
    if (videoRatio > destinoRatio) {
        sourceWidth = videoHeight * destinoRatio;
        sourceX = (videoWidth - sourceWidth) / 2;
    }

    // El contenedor es más horizontal
    else if (
        videoRatio < destinoRatio
    ) {
        sourceHeight = videoWidth / destinoRatio;
        sourceY = (videoHeight - sourceHeight) / 2;
    }

    ctx.drawImage(
        video,
        sourceX, sourceY,
        sourceWidth, sourceHeight,
        destinoX, destinoY,
        destinoWidth, destinoHeight
    );
}
