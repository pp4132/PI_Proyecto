// CONFIGURACIÓN

const canvas = document.getElementById("canvasJuego");
const ctx = canvas.getContext("2d");

const botonComenzar = document.getElementById("botonComenzar");
const botonReiniciar = document.getElementById("botonReiniciar");
const botonPausa = document.getElementById("botonPausa");

const pantallaInicio = document.getElementById("pantallaInicio");
const pantallaGameOver = document.getElementById("pantallaGameOver");

const puntuacionTexto = document.getElementById("puntuacion");
const vidasTexto = document.getElementById("vidas");
const puntuacionFinal = document.getElementById("puntuacionFinal");

// ESTADO DEL JUEGO
let juegoPausado = false;
let juegoActivo = false;
let puntuacion = 0;
let vidas = 3;
let ultimoTiempo = 0;
let tiempoEnemigo = 0;
let tiempoDisparo = 0;

// JUGADOR
const jugador = {
    x: 100,
    y: canvas.height / 2,
    ancho: 45,
    alto: 25,
    velocidad: 280
};

// TECLAS
const teclas = {};
document.addEventListener("keydown", function(event) {
    teclas[event.key.toLowerCase()] = true;
    if (
        event.code === "Space" ||
        event.key === "ArrowUp" ||
        event.key === "ArrowDown" ||
        event.key === "ArrowLeft" ||
        event.key === "ArrowRight"
    ) {
        event.preventDefault();
    }
});


document.addEventListener("keyup", function(event) {
    teclas[event.key.toLowerCase()] = false;
});

window.addEventListener("blur", function() {
    for (const tecla in teclas) {
        teclas[tecla] = false;
    }

    tiempoDisparo = 0;
});


// ARRAYS
let disparos = [];
let disparosEnemigos = [];
let enemigos = [];
let estrellas = [];
let particulas = [];


// ESTRELLAS
function crearEstrellas() {
    estrellas = [];
    for (let i = 0; i < 100; i++) {
        estrellas.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            tamaño: Math.random() * 2 + 0.5,
            velocidad:
                Math.random() * 30 + 20
        });
    }
}

// INICIAR JUEGO
function iniciarJuego() {
    puntuacion = 0;
    vidas = 3;
    jugador.x = 100;
    jugador.y = canvas.height / 2;
    disparos = [];
    disparosEnemigos = [];
    enemigos = [];
    particulas = [];
    tiempoEnemigo = 0;
    tiempoDisparo = 0;
    juegoActivo = true;
    juegoPausado = false;
    botonPausa.disabled = false;
    botonPausa.textContent = "Pausar";
    pantallaInicio.classList.add("oculto");
    pantallaGameOver.classList.add("oculto");
    actualizarMarcador();
    ultimoTiempo = performance.now();
    requestAnimationFrame(bucleJuego);
}

// FINALIZAR JUEGO
function terminarJuego() {
    juegoActivo = false;
    juegoPausado = false;

    for (const tecla in teclas) {
        teclas[tecla] = false;
    }

    puntuacionFinal.textContent = "Puntos: " + puntuacion;
    pantallaGameOver.classList.remove("oculto");
    botonPausa.disabled = true;
}

// BUCLE PRINCIPAL

function bucleJuego(tiempoActual) {
    if (!juegoActivo || juegoPausado) {
        return;
    }

    const delta = (tiempoActual - ultimoTiempo) / 1000;
    ultimoTiempo = tiempoActual;

    actualizar(delta);
    dibujar();

    if (juegoActivo && !juegoPausado) {
        requestAnimationFrame(bucleJuego);
    }
}


// ACTUALIZACIÓN
function actualizar(delta) {
    moverJugador(delta);
    actualizarEstrellas(delta);
    actualizarDisparos(delta);
    actualizarEnemigos(delta);
    actualizarParticulas(delta);
    generarEnemigos(delta);
    disparoAutomatico(delta);
    comprobarColisiones();
    comprobarEnemigosSalidos();
    actualizarDisparosEnemigos(delta);
    comprobarColisionesDisparosEnemigos();
}   

// JUGADOR
function moverJugador(delta) {
    let movimientoX = 0;
    let movimientoY = 0;
    if (
        teclas["arrowup"] ||
        teclas["w"]
    ) {
        movimientoY -= 1;
    }
    if (
        teclas["arrowdown"] ||
        teclas["s"]
    ) {
        movimientoY += 1;
    }
    if (
        teclas["arrowleft"] ||
        teclas["a"]
    ) {
        movimientoX -= 1;
    }

    if (
        teclas["arrowright"] ||
        teclas["d"]
    ) {
        movimientoX += 1;
    }

    // Normalizar diagonal
    if (movimientoX !== 0 && movimientoY !== 0) {
        movimientoX *= 0.707;
        movimientoY *= 0.707;
    }

    jugador.x +=
        movimientoX *
        jugador.velocidad *
        delta;

    jugador.y +=
        movimientoY *
        jugador.velocidad *
        delta;

    // Límites
    jugador.x = Math.max(
        20,
        Math.min(
            canvas.width - jugador.ancho - 20,
            jugador.x
        )
    );
    jugador.y = Math.max(
        20,
        Math.min(
            canvas.height - jugador.alto - 20,
            jugador.y
        )
    );
}

// DISPARO DEL JUGADOR
function disparoAutomatico(delta) {
    if (teclas[" "]) {
        tiempoDisparo += delta;

        if (tiempoDisparo >= 0.35) {
            crearDisparo();
            tiempoDisparo = 0;
        }
    } else {
        tiempoDisparo = 0;
    }
}

// CREAR DISPARO
function crearDisparo() {
    disparos.push({
        x: jugador.x + jugador.ancho,
        y: jugador.y + jugador.alto / 2,
        velocidad: 500,
        radio: 4
    });
}

// ACTUALIZAR DISPAROS
function actualizarDisparos(delta) {
    for (let i = disparos.length - 1; i >= 0; i--) {
        const disparo = disparos[i];
        disparo.x +=
            disparo.velocidad * delta;

        if (disparo.x > canvas.width + 20) {
            disparos.splice(i, 1);
        }
    }
}

// GENERAR ENEMIGOS
function generarEnemigos(delta) {
    tiempoEnemigo += delta;
    // La velocidad aumenta poco a poco
    const intervalo =
        Math.max(
            0.65,
            1.3 - puntuacion / 1500
        );
    if (tiempoEnemigo >= intervalo) {
        crearEnemigo();
        tiempoEnemigo = 0;
    }
}

// ============================================
// CREAR ENEMIGO
// ============================================
function crearEnemigo() {

    const esArtillero = Math.random() < 0.35;

    if (esArtillero) {

        enemigos.push({

            tipo: "artillero",

            x: canvas.width + 50,

            y:
                Math.random() *
                (canvas.height - 60) + 30,

            ancho: 45,
            alto: 45,

            velocidad: 70,

            tiempoDisparo:
                Math.random() * 1.5 + 1

        });

    } else {

        enemigos.push({

            tipo: "cazador",

            x: canvas.width + 50,

            y:
                Math.random() *
                (canvas.height - 60) + 30,

            ancho: 40,
            alto: 40,

            velocidad: 100

        });

    }

}

// ============================================
// ACTUALIZAR ENEMIGOS
// ============================================
function actualizarEnemigos(delta) {
    for (
        let i = enemigos.length - 1;
        i >= 0;
        i--
    ) {
        const enemigo = enemigos[i];
        if (enemigo.tipo === "cazador") {
            actualizarCazador(
                enemigo,
                delta
            );
        }
        if (enemigo.tipo === "artillero") {
            actualizarArtillero(
                enemigo,
                delta
            );
        }

        if (
            enemigo.x < -100 ||
            enemigo.x > canvas.width + 100
        ) {
            enemigos.splice(i, 1);
        }
    }
}

//Actualizar cazador
function actualizarCazador(enemigo, delta) {

    const centroEnemigoX =
        enemigo.x + enemigo.ancho / 2;

    const centroEnemigoY =
        enemigo.y + enemigo.alto / 2;


    const centroJugadorX =
        jugador.x + jugador.ancho / 2;

    const centroJugadorY =
        jugador.y + jugador.alto / 2;


    const diferenciaX =
        centroJugadorX - centroEnemigoX;

    const diferenciaY =
        centroJugadorY - centroEnemigoY;


    const distancia =
        Math.sqrt(
            diferenciaX * diferenciaX +
            diferenciaY * diferenciaY
        );


    if (distancia > 0) {

        enemigo.x +=
            (diferenciaX / distancia) *
            enemigo.velocidad *
            delta;

        enemigo.y +=
            (diferenciaY / distancia) *
            enemigo.velocidad *
            delta;

    }

}

//Actualizar artillero
function actualizarArtillero(enemigo, delta) {

    const distanciaDeseada = 300;


    const diferenciaX =
        jugador.x - enemigo.x;


    if (diferenciaX > distanciaDeseada) {

        enemigo.x -=
            enemigo.velocidad * delta;

    }


    if (diferenciaX < distanciaDeseada - 50) {

        enemigo.x +=
            enemigo.velocidad * delta;

    }


    enemigo.tiempoDisparo -= delta;


    if (enemigo.tiempoDisparo <= 0) {

        dispararEnemigo(enemigo);

        enemigo.tiempoDisparo = 2;

    }

}

//Disparo artillero
function dispararEnemigo(enemigo) {
    const origenX =
        enemigo.x +
        enemigo.ancho / 2;
    const origenY =
        enemigo.y +
        enemigo.alto / 2;
    const destinoX =
        jugador.x +
        jugador.ancho / 2;
    const destinoY =
        jugador.y +
        jugador.alto / 2;
    const diferenciaX =
        destinoX - origenX;
    const diferenciaY =
        destinoY - origenY;
    const distancia =
        Math.sqrt(
            diferenciaX * diferenciaX +
            diferenciaY * diferenciaY
        );

    disparosEnemigos.push({
        x: origenX,
        y: origenY,
        velocidadX:
            (diferenciaX / distancia) * 180,
        velocidadY:
            (diferenciaY / distancia) * 180,

        radio: 5
    });
}

//Actualizar disparo artillero
function actualizarDisparosEnemigos(delta) {

    for (
        let i = disparosEnemigos.length - 1;
        i >= 0;
        i--
    ) {

        const disparo =
            disparosEnemigos[i];


        disparo.x +=
            disparo.velocidadX * delta;


        disparo.y +=
            disparo.velocidadY * delta;


        if (

            disparo.x < -20 ||

            disparo.x > canvas.width + 20 ||

            disparo.y < -20 ||

            disparo.y > canvas.height + 20

        ) {

            disparosEnemigos.splice(i, 1);

        }

    }

}

//Colisión de las balas con el jugador
function comprobarColisionesDisparosEnemigos() {

    for (
        let i = disparosEnemigos.length - 1;
        i >= 0;
        i--
    ) {

        const disparo =
            disparosEnemigos[i];


        if (

            disparo.x >
                jugador.x &&

            disparo.x <
                jugador.x + jugador.ancho &&

            disparo.y >
                jugador.y &&

            disparo.y <
                jugador.y + jugador.alto

        ) {

            disparosEnemigos.splice(i, 1);

            vidas--;

            crearExplosion(
                jugador.x +
                jugador.ancho / 2,

                jugador.y +
                jugador.alto / 2
            );

            actualizarMarcador();


            if (vidas <= 0) {

                terminarJuego();

            }

        }

    }

}


// ============================================
// ESTRELLAS
// ============================================
function actualizarEstrellas(delta) {

    for (const estrella of estrellas) {

        estrella.x -=
            estrella.velocidad * delta;


        if (estrella.x < 0) {

            estrella.x = canvas.width;

            estrella.y =
                Math.random() * canvas.height;

        }

    }

}

// ============================================
// COLISIONES
// ============================================
function comprobarColisiones() {

    // ----------------------------
    // DISPAROS CONTRA ENEMIGOS
    // ----------------------------

    for (
        let i = disparos.length - 1;
        i >= 0;
        i--
    ) {

        const disparo = disparos[i];


        for (
            let j = enemigos.length - 1;
            j >= 0;
            j--
        ) {

            const enemigo = enemigos[j];


            if (
                colisionCircular(
                    disparo.x,
                    disparo.y,
                    disparo.radio,

                    enemigo.x +
                    enemigo.ancho / 2,

                    enemigo.y +
                    enemigo.alto / 2,

                    enemigo.ancho / 2
                )
            ) {

                crearExplosion(
                    enemigo.x +
                    enemigo.ancho / 2,

                    enemigo.y +
                    enemigo.alto / 2
                );


                disparos.splice(i, 1);
                enemigos.splice(j, 1);


                puntuacion += 10;

                actualizarMarcador();

                break;

            }

        }

    }


    // ----------------------------
    // JUGADOR CONTRA ENEMIGOS
    // ----------------------------

    for (
        let i = enemigos.length - 1;
        i >= 0;
        i--
    ) {

        const enemigo = enemigos[i];


        if (
            rectangulosColisionan(
                jugador,
                enemigo
            )
        ) {

            crearExplosion(
                jugador.x +
                jugador.ancho / 2,

                jugador.y +
                jugador.alto / 2
            );


            enemigos.splice(i, 1);

            vidas--;

            actualizarMarcador();


            if (vidas <= 0) {

                terminarJuego();

                return;

            }

        }

    }

}

// ============================================
// COLISIÓN RECTANGULAR
// ============================================
function rectangulosColisionan(a, b) {

    return (

        a.x < b.x + b.ancho &&

        a.x + a.ancho > b.x &&

        a.y < b.y + b.alto &&

        a.y + a.alto > b.y

    );

}


// ============================================
// COLISIÓN CIRCULAR
// ============================================
function colisionCircular(
    x1,
    y1,
    radio1,
    x2,
    y2,
    radio2
) {

    const dx = x1 - x2;
    const dy = y1 - y2;

    const distancia =
        Math.sqrt(
            dx * dx +
            dy * dy
        );


    return distancia <
        radio1 + radio2;

}


// ============================================
// ENEMIGOS QUE PASAN
// ============================================
function comprobarEnemigosSalidos() {

    for (
        let i = enemigos.length - 1;
        i >= 0;
        i--
    ) {

        if (
            enemigos[i].x +
            enemigos[i].ancho < 0
        ) {

            enemigos.splice(i, 1);

        }

    }

}


// ============================================
// PARTÍCULAS
// ============================================
function crearExplosion(x, y) {

    for (let i = 0; i < 12; i++) {

        particulas.push({

            x: x,
            y: y,

            velocidadX:
                (Math.random() - 0.5) * 180,

            velocidadY:
                (Math.random() - 0.5) * 180,

            vida: 0.5

        });

    }

}


function actualizarParticulas(delta) {
    for (
        let i = particulas.length - 1;
        i >= 0;
        i--
    ) {

        const particula = particulas[i];


        particula.x +=
            particula.velocidadX * delta;


        particula.y +=
            particula.velocidadY * delta;


        particula.vida -= delta;


        if (particula.vida <= 0) {

            particulas.splice(i, 1);

        }

    }

}


// ============================================
// DIBUJAR TODO
// ============================================
function dibujar() {

    dibujarFondo();

    dibujarJugador();

    dibujarDisparos();

    dibujarEnemigos();

    dibujarParticulas();

}


// ============================================
// FONDO
// ============================================
function dibujarFondo() {

    ctx.fillStyle = "#02040a";

    ctx.fillRect(
        0,
        0,
        canvas.width,
        canvas.height
    );


    for (const estrella of estrellas) {

        ctx.fillStyle =
            "rgba(255,255,255,0.8)";


        ctx.beginPath();

        ctx.arc(
            estrella.x,
            estrella.y,
            estrella.tamaño,
            0,
            Math.PI * 2
        );

        ctx.fill();

    }

}


// ============================================
// DIBUJAR JUGADOR
// ============================================
function dibujarJugador() {

    const x = jugador.x;
    const y = jugador.y;


    // Propulsión

    ctx.fillStyle = "#ffcc00";

    ctx.beginPath();

    ctx.moveTo(x, y + jugador.alto / 2);

    ctx.lineTo(
        x - 18,
        y + jugador.alto / 2 - 7
    );

    ctx.lineTo(
        x - 18,
        y + jugador.alto / 2 + 7
    );

    ctx.closePath();

    ctx.fill();


    // Cuerpo

    ctx.fillStyle = "#00bfff";

    ctx.beginPath();

    ctx.moveTo(
        x + jugador.ancho,
        y + jugador.alto / 2
    );

    ctx.lineTo(
        x,
        y
    );

    ctx.lineTo(
        x + 10,
        y + jugador.alto / 2
    );

    ctx.lineTo(
        x,
        y + jugador.alto
    );

    ctx.closePath();

    ctx.fill();


    // Cabina

    ctx.fillStyle = "#ffffff";

    ctx.beginPath();

    ctx.arc(
        x + 18,
        y + jugador.alto / 2,
        5,
        0,
        Math.PI * 2
    );

    ctx.fill();

}


// ============================================
// DIBUJAR DISPAROS
// ============================================
function dibujarDisparos() {

    for (const disparo of disparos) {

        ctx.fillStyle = "#ffff00";

        ctx.beginPath();

        ctx.arc(
            disparo.x,
            disparo.y,
            disparo.radio,
            0,
            Math.PI * 2
        );

        ctx.fill();

    }

}


// ============================================
// DIBUJAR ENEMIGOS
// ============================================
function dibujarEnemigos() {

    for (const enemigo of enemigos) {

        const centroX =
            enemigo.x +
            enemigo.ancho / 2;

        const centroY =
            enemigo.y +
            enemigo.alto / 2;


        ctx.fillStyle = "#D50032";

        ctx.beginPath();

        ctx.moveTo(
            enemigo.x,
            centroY
        );

        ctx.lineTo(
            centroX,
            enemigo.y
        );

        ctx.lineTo(
            enemigo.x +
            enemigo.ancho,
            centroY
        );

        ctx.lineTo(
            centroX,
            enemigo.y +
            enemigo.alto
        );

        ctx.closePath();

        ctx.fill();


        // Núcleo

        ctx.fillStyle = "#ff7777";

        ctx.beginPath();

        ctx.arc(
            centroX,
            centroY,
            enemigo.ancho * 0.18,
            0,
            Math.PI * 2
        );

        ctx.fill();

    }

}


// ============================================
// DIBUJAR PARTÍCULAS
// ============================================
function dibujarParticulas() {

    for (const particula of particulas) {

        ctx.fillStyle =
            "rgba(255,180,0," +
            particula.vida +
            ")";


        ctx.beginPath();

        ctx.arc(
            particula.x,
            particula.y,
            3,
            0,
            Math.PI * 2
        );

        ctx.fill();

    }

}


// ============================================
// MARCADOR
// ============================================

function actualizarMarcador() {

    puntuacionTexto.textContent =
        "Puntos: " + puntuacion;


    vidasTexto.textContent =
        "Vidas: " + vidas;

}


// ============================================
// BOTONES
// ============================================

botonComenzar.addEventListener(
    "click",
    iniciarJuego
);


botonReiniciar.addEventListener(
    "click",
    iniciarJuego
);

botonPausa.addEventListener(
    "click", 
    pausarJuego
);


function pausarJuego() {
    if (!juegoActivo) {
        return;
    }

    juegoPausado = !juegoPausado;

    if (juegoPausado) {
        botonPausa.textContent = "Reanudar";
    } else {
        botonPausa.textContent = "Pausar";
        ultimoTiempo = performance.now();
        requestAnimationFrame(bucleJuego);
    }
}


// ============================================
// PREPARAR JUEGO
// ============================================

crearEstrellas();

actualizarMarcador();

dibujar();
