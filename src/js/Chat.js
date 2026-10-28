
(() => {
    'use strict';

    const config = window.CHAT_CONFIG;

    const contenedor = document.getElementById('mensajes');
    const formulario = document.getElementById('form-mensaje');
    const campo = document.getElementById('contenido');
    const boton = document.getElementById('btn-enviar');
    const estado = document.getElementById('estado-chat');

    if (!config || !contenedor || !formulario || !campo) {
        console.error('Faltan elementos necesarios del chat.');
        return;
    }

    const idChat = Number(config.idChat);
    let cargando = false;
    let ultimoId = 0;

    function mostrarEstado(mensaje) {
        estado.textContent = mensaje;
    }

    function crearElementoMensaje(mensaje, mapaMensajes) {
        const tarjeta = document.createElement('article');
        tarjeta.className = 'message';
        tarjeta.dataset.id = mensaje.id_comentario;

        if (mensaje.id_padre !== null) {
            const original = mapaMensajes.get(
                Number(mensaje.id_padre)
            );

            const etiqueta = document.createElement('span');
            etiqueta.className = 'reply-label';
            etiqueta.textContent = original
                ? `Respondiendo a ${original.apodo}`
                : 'Respuesta a otro mensaje';

            tarjeta.appendChild(etiqueta);
        }

        const encabezado = document.createElement('div');
        encabezado.className = 'message-header';

        const apodo = document.createElement('span');
        apodo.className = 'nickname';
        apodo.textContent = mensaje.apodo || 'Usuario';

        encabezado.appendChild(apodo);
        tarjeta.appendChild(encabezado);

        const contenido = document.createElement('p');
        contenido.className = 'message-content';

        // textContent evita interpretar mensajes como HTML.
        contenido.textContent = mensaje.contenido;

        tarjeta.appendChild(contenido);

        const fecha = document.createElement('time');
        fecha.className = 'message-time';
        fecha.textContent = mensaje.fecha_creacion;

        tarjeta.appendChild(fecha);

        const responder = document.createElement('button');
        responder.type = 'button';
        responder.className = 'reply-button';
        responder.textContent = 'Responder';

        responder.addEventListener('click', () => {
            formulario.dataset.idPadre = mensaje.id_comentario;
            campo.focus();
            mostrarEstado(`Respondiendo a ${mensaje.apodo}.`);

            if (!campo.value.startsWith(`@${mensaje.apodo} `)) {
                campo.value = `@${mensaje.apodo} ` + campo.value;
            }
        });

        tarjeta.appendChild(responder);

        return tarjeta;
    }

    async function cargarMensajes() {
        if (cargando) return;

        cargando = true;

        try {
            const respuesta = await fetch(
                `api/listar_mensajes.php?id_chat=${encodeURIComponent(idChat)}`,
                {
                    headers: {
                        'Accept': 'application/json'
                    },
                    cache: 'no-store'
                }
            );

            const datos = await respuesta.json();

            if (!respuesta.ok) {
                throw new Error(datos.error || 'No se pudieron cargar los mensajes.');
            }

            const mapaMensajes = new Map(
                datos.map(mensaje => [
                    Number(mensaje.id_comentario),
                    mensaje
                ])
            );

            const cercaDelFinal =
                contenedor.scrollHeight -
                contenedor.scrollTop -
                contenedor.clientHeight < 100;

            contenedor.replaceChildren();

            if (datos.length === 0) {
                const aviso = document.createElement('p');
                aviso.textContent = 'Todavía no hay mensajes. ¡Sé el primero en participar!';
                contenedor.appendChild(aviso);
            } else {
                for (const mensaje of datos) {
                    contenedor.appendChild(
                        crearElementoMensaje(mensaje, mapaMensajes)
                    );
                }
            }

            if (cercaDelFinal) {
                contenedor.scrollTop = contenedor.scrollHeight;
            }

            if (datos.length > 0) {
                ultimoId = Number(datos[datos.length - 1].id_comentario);
            }

            mostrarEstado('');
        } catch (error) {
            mostrarEstado(error.message);
        } finally {
            cargando = false;
        }
    }

    formulario.addEventListener('submit', async event => {
        event.preventDefault();

        const contenido = campo.value.trim();

        if (!contenido) {
            mostrarEstado('Escribe un mensaje antes de enviarlo.');
            return;
        }

        boton.disabled = true;
        mostrarEstado('Enviando mensaje...');

        try {
            const idPadre = formulario.dataset.idPadre
                ? Number(formulario.dataset.idPadre)
                : null;

            const respuesta = await fetch('api/crear_mensajes.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json'
                },
                body: JSON.stringify({
                    csrf: config.csrf,
                    id_chat: idChat,
                    contenido,
                    id_padre: idPadre
                })
            });

            const resultado = await respuesta.json();

            if (!respuesta.ok) {
                throw new Error(resultado.error || 'No se pudo enviar el mensaje.');
            }

            campo.value = '';
            delete formulario.dataset.idPadre;

            mostrarEstado('Mensaje enviado.');
            await cargarMensajes();
        } catch (error) {
            mostrarEstado(error.message);
        } finally {
            boton.disabled = false;
            campo.focus();
        }
    });

    cargarMensajes();

    // Actualizar periódicamente.
    window.setInterval(cargarMensajes, 5000);
})();
