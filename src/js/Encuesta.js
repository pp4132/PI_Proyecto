/* ========================================
       1. BANCO DE PREGUNTAS
       Total: 15 preguntas

       answer indica la posición correcta:
       0 = Primera opción
       1 = Segunda opción
       2 = Tercera opción
       3 = Cuarta opción
    ======================================== */
    let userAnswers = [];
    let saving = false;

    const bank = [

      {
        q: "¿En qué año se fundó la Liga Mexicana de Beisbol?",
        options: [
          "1925",
          "1939",
          "1949",
          "1970"
        ]
      },

      {
        q: "¿En qué siglo comenzó a difundirse el beisbol en México?",
        options: [
          "Siglo XIX",
          "Siglo XVII",
          "Siglo XXI",
          "Siglo XVI"
        ]
      },

      {
        q: "¿Qué cronista fue conocido como Fray Nano?",
        options: [
          "Alejandro Aguilar Reyes",
          "Fernando Valenzuela",
          "Babe Ruth",
          "Roberto Clemente"
        ]
      },

      {
        q: "¿Cuántos equipos integran la Zona Norte de la LMB en 2026?",
        options: [
          "10",
          "8",
          "12",
          "6"
        ]
      },

      {
        q: "¿Qué equipo juega en Monterrey?",
        options: [
          "Sultanes",
          "Rieleros",
          "Toros",
          "Charros"
        ]
      },

      {
        q: "¿Qué equipo representa a Monclova?",
        options: [
          "Acereros",
          "Algodoneros",
          "Dorados",
          "Tecos"
        ]
      },

      {
        q: "¿Qué equipo tiene sede en Torreón?",
        options: [
          "Algodoneros de Unión Laguna",
          "Toros de Tijuana",
          "Sultanes de Monterrey",
          "Charros de Jalisco"
        ]
      },

      {
        q: "¿Qué equipo lleva el nombre de una prenda tradicional de Saltillo?",
        options: [
          "Saraperos",
          "Tecos",
          "Rieleros",
          "Dorados"
        ]
      },

      {
        q: "¿Qué equipo homenajea la tradición ferroviaria?",
        options: [
          "Rieleros de Aguascalientes",
          "Caliente de Durango",
          "Acereros de Monclova",
          "Toros de Tijuana"
        ]
      },

      {
        q: "¿Qué club representa a dos ciudades fronterizas de México y Estados Unidos?",
        options: [
          "Tecos de los Dos Laredos",
          "Charros de Jalisco",
          "Dorados de Chihuahua",
          "Saraperos de Saltillo"
        ]
      },

      {
        q: "¿Qué equipo de la Zona Norte juega en Tijuana?",
        options: [
          "Toros",
          "Sultanes",
          "Rieleros",
          "Algodoneros"
        ]
      },

      {
        q: "¿Qué equipo regresó a la LMB en 2024 y juega en Chihuahua?",
        options: [
          "Dorados",
          "Acereros",
          "Sultanes",
          "Algodoneros"
        ]
      },

      {
        q: "¿Qué equipo adoptó su actual proyecto en Durango en 2024?",
        options: [
          "Caliente de Durango",
          "Toros de Tijuana",
          "Saraperos de Saltillo",
          "Rieleros de Aguascalientes"
        ]
      },

      {
        q: "¿Qué equipo tiene como sede el área metropolitana de Guadalajara?",
        options: [
          "Charros de Jalisco",
          "Tecos de los Dos Laredos",
          "Acereros de Monclova",
          "Sultanes de Monterrey"
        ]
      },

      {
        q: "¿Qué equipo ganó su primer campeonato de LMB en 2019?",
        options: [
          "Acereros de Monclova",
          "Rieleros de Aguascalientes",
          "Toros de Tijuana",
          "Saraperos de Saltillo"
        ]
      }

    ];

    /* ========================================
       2. VARIABLES DEL JUEGO
    ======================================== */

    const TOTAL_QUESTIONS = 5;

    let selected = [];
    let index = 0;
    let points = 0;
    let answered = false;

    /* ========================================
       3. ELEMENTOS HTML
    ======================================== */

    const $ = (id) => document.getElementById(id);

    /* ========================================
       4. FUNCIÓN PARA MEZCLAR ELEMENTOS

       Algoritmo Fisher-Yates.
       Evita repetir preguntas.
    ======================================== */

    function shuffle(array) {

      const shuffled = [...array];

      for (let i = shuffled.length - 1; i > 0; i--) {

        const j = Math.floor(Math.random() * (i + 1));

        [shuffled[i], shuffled[j]] =
          [shuffled[j], shuffled[i]];

      }

      return shuffled;
    }

    /* ========================================
       5. INICIAR JUEGO
    ======================================== */

    function startGame() {

      // Seleccionar 5 preguntas aleatorias
      selected = shuffle(bank).slice(0, TOTAL_QUESTIONS);

      // Reiniciar valores
      index = 0;
      points = 0;
      answered = false;
      userAnswers = [];

      // Cambiar pantalla
      $("start").hidden = true;
      $("result").hidden = true;
      $("game").hidden = false;

      // Mostrar primera pregunta
      renderQuestion();
    }

    /* ========================================
       6. MOSTRAR PREGUNTA
    ======================================== */

    function renderQuestion() {

      answered = false;

      const item = selected[index];

      // Actualizar contador
      $("count").textContent =
        `Pregunta ${index + 1} de ${TOTAL_QUESTIONS}`;

      // Actualizar puntuación
      $("score").textContent =
    `Pregunta ${index + 1} de ${TOTAL_QUESTIONS}`;

      // Actualizar barra de progreso
      $("bar").style.width =
        `${(index / TOTAL_QUESTIONS) * 100}%`;

      // Mostrar pregunta
      $("question").textContent = item.q;

      // Limpiar mensajes
      $("feedback").textContent = "";

      // Desactivar siguiente
      $("next").disabled = true;

      // Cambiar texto en última pregunta
      $("next").textContent =
        index === TOTAL_QUESTIONS - 1
          ? "Ver resultados"
          : "Siguiente pregunta";

      // Limpiar respuestas anteriores
      $("choices").replaceChildren();

        // Crear opciones mezcladas
        // Mezclar opciones
        const shuffledOptions = shuffle(item.options);

        // Crear botones
        shuffledOptions.forEach((option) => {

            const button = document.createElement("button");

            button.className = "choice";
            button.textContent = option;

            button.addEventListener("click", () => {
                chooseAnswer(button);
            });

            $("choices").appendChild(button);

        });
    }

    /* ========================================
       7. VALIDAR RESPUESTA
    ======================================== */
    function chooseAnswer(button) {

        if (answered) return;

        answered = true;

        // Guardar la respuesta elegida
        userAnswers[index] = {
            pregunta: selected[index].q,
            respuesta: button.textContent
        };

        // Desactivar todas las opciones
        for (const choice of $("choices").children) {
            choice.disabled = true;
        }

        // Marcar la respuesta seleccionada
        button.classList.add("selected");

        // Mostrar mensaje
        $("feedback").textContent =
            "Respuesta registrada. Continúa con la siguiente pregunta.";

        $("score").textContent =
            `Respondidas: ${index + 1} de ${TOTAL_QUESTIONS}`;

        $("next").disabled = false;
    }

    /* ========================================
       8. SIGUIENTE PREGUNTA
    ======================================== */

    function nextQuestion() {

      index++;

      // Si terminó la trivia
      if (index === TOTAL_QUESTIONS) {

        showResults();
        return;

      }

      // Mostrar siguiente pregunta
      renderQuestion();
    }

    /* ========================================
       9. MOSTRAR RESULTADOS
    ======================================== */    
    async function showResults() {

        // Completar barra
        $("bar").style.width = "100%";

        // Cambiar pantalla
        $("game").hidden = true;
        $("result").hidden = false;

        $("summary").textContent = "Guardando resultados...";

        try {

            if (saving) return;

            saving = true;
            const response = await fetch("Model_db/GuardarResultado.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    respuestas: userAnswers
                })
            });

            const data = await response.json();

            if (!data.success) {
                $("summary").textContent = data.message;
                return;
            }

            // Mostrar resultados
            $("summary").textContent =
                `¡Terminaste la trivia! ` +
                `Obtuviste ${data.correctas} de 5 respuestas correctas. ` +
                `Ganaste ${data.puntos_ganados} puntos. ` +
                `Tu puntaje acumulado es ${data.acumulado}.`;

            // Mostrar insignias nuevas
            if (data.insignias.length > 0) {

                $("summary").textContent +=
                    ` ¡Desbloqueaste: ${data.insignias.join(", ")}!`;

            }

            const badgesContainer = $("newBadges");

            badgesContainer.replaceChildren();

            data.insignias.forEach((nombre) => {

                const badge = document.createElement("p");

                badge.textContent = `🏅 ${nombre}`;

                badgesContainer.appendChild(badge);

            });

        } catch (error) {
            saving = false;
            console.error(error);

            $("summary").textContent =
                "No se pudieron guardar los resultados. Inténtalo nuevamente.";

        }
    }


    /* ========================================
       10. EVENTOS DE LOS BOTONES
    ======================================== */

    $("play").addEventListener("click", startGame);

    $("again").addEventListener("click", startGame);

    $("next").addEventListener("click", nextQuestion);