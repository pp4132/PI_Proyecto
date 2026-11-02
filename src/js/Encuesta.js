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
      // ACEREROS DE MONCLOVA
      {
        q: "¿En qué ciudad juega Acereros de Monclova?",
        options: ["Monclova", "Torreón", "Saltillo", "Durango"]
      },
      {
        q: "¿En qué año llegó por primera vez el beisbol profesional de la LMB a Monclova?",
        options: ["1974", "1939", "1989", "2004"]
      },
      {
        q: "¿Qué actividad económica inspira el nombre de Acereros de Monclova?",
        options: ["La industria del acero", "La producción de algodón", "El ferrocarril", "La minería de plata"]
      },
      {
        q: "¿En qué año ganó Acereros de Monclova su primer campeonato de la LMB?",
        options: ["2019", "2009", "2017", "2021"]
      },
      {
        q: "¿Cómo se conoce por patrocinio el estadio de Acereros de Monclova?",
        options: ["Kickapoo Lucky Eagle", "Estadio Revolución", "Francisco Villa", "Mobil Super"]
      },

      // ALGODONEROS DE UNIÓN LAGUNA
      {
        q: "¿En qué ciudad juega Algodoneros de Unión Laguna?",
        options: ["Torreón", "Monclova", "Aguascalientes", "Tijuana"]
      },
      {
        q: "¿En qué año se incorporó Algodoneros de Unión Laguna a la LMB?",
        options: ["1940", "1950", "1970", "1990"]
      },
      {
        q: "¿Qué actividad regional inspira el nombre de Algodoneros de Unión Laguna?",
        options: ["El cultivo del algodón", "La industria acerera", "La charrería", "El ferrocarril"]
      },
      {
        q: "¿Cómo se llama el estadio de Algodoneros de Unión Laguna?",
        options: ["Estadio de la Revolución", "Estadio Panamericano", "Estadio Francisco I. Madero", "Estadio Monumental"]
      },
      {
        q: "¿En qué año consiguió Algodoneros de Unión Laguna su primer campeonato de liga?",
        options: ["1942", "1978", "2009", "2019"]
      },

      // CALIENTE DE DURANGO
      {
        q: "¿En qué ciudad juega Caliente de Durango?",
        options: ["Durango", "Chihuahua", "Saltillo", "Zapopan"]
      },
      {
        q: "¿En qué temporada comenzó a competir Caliente de Durango en la LMB?",
        options: ["2024", "2014", "2004", "1994"]
      },
      {
        q: "¿Cómo se llama el estadio de Caliente de Durango?",
        options: ["Francisco Villa", "Alberto Romo Chávez", "Chevron", "La Junta"]
      },
      {
        q: "¿Qué objetivo tuvo la llegada de Caliente de Durango a la LMB en 2024?",
        options: [
          "Mantener el beisbol profesional de verano en Durango",
          "Trasladar el club a Monterrey",
          "Sustituir a los Sultanes",
          "Crear una liga invernal"
        ]
      },
      {
        q: "¿Qué número de equipo representó Caliente de Durango en la LMB al incorporarse en 2024?",
        options: ["El número 20", "El número 10", "El número 12", "El número 25"]
      },

      // CHARROS DE JALISCO
      {
        q: "¿En qué zona metropolitana juega Charros de Jalisco?",
        options: ["Guadalajara", "Monterrey", "Tijuana", "Torreón"]
      },
      {
        q: "¿En qué año regresó Charros de Jalisco al circuito de verano de la LMB?",
        options: ["2024", "2019", "2004", "1995"]
      },
      {
        q: "¿Qué tradición cultural inspira el nombre de Charros de Jalisco?",
        options: ["La charrería", "La minería", "El algodón", "El ferrocarril"]
      },
      {
        q: "¿Cómo se llama el estadio de Charros de Jalisco?",
        options: ["Estadio Panamericano", "Estadio Revolución", "Estadio Francisco Villa", "Estadio Mobil Super"]
      },
      {
        q: "¿Después de aproximadamente cuánto tiempo regresó Charros de Jalisco a la LMB en 2024?",
        options: ["Casi tres décadas", "Cinco años", "Un siglo", "Dos temporadas"]
      },

      // DORADOS DE CHIHUAHUA
      {
        q: "¿Qué ciudad representa Dorados de Chihuahua?",
        options: ["Chihuahua", "Durango", "Monclova", "Nuevo Laredo"]
      },
      {
        q: "¿En qué año regresó Dorados de Chihuahua a la LMB?",
        options: ["2024", "2014", "2004", "1994"]
      },
      {
        q: "¿Cuántos años de ausencia habían transcurrido antes del regreso de Dorados de Chihuahua en 2024?",
        options: ["14 años", "4 años", "20 años", "30 años"]
      },
      {
        q: "¿En qué estadio juega Dorados de Chihuahua?",
        options: ["Estadio Monumental Chihuahua", "Estadio Francisco I. Madero", "Estadio de la Revolución", "Estadio Panamericano"]
      },
      {
        q: "¿Contra qué equipo disputó Dorados de Chihuahua la serie inaugural de su regreso en 2024?",
        options: ["Rieleros de Aguascalientes", "Toros de Tijuana", "Sultanes de Monterrey", "Charros de Jalisco"]
      },

      // RIELEROS DE AGUASCALIENTES
      {
        q: "¿En qué ciudad juega Rieleros de Aguascalientes?",
        options: ["Aguascalientes", "Torreón", "Saltillo", "Durango"]
      },
      {
        q: "¿En qué año debutó Rieleros de Aguascalientes en la LMB?",
        options: ["1975", "1970", "1939", "1985"]
      },
      {
        q: "¿Qué tradición de Aguascalientes inspira el nombre de Rieleros?",
        options: ["La ferroviaria", "La algodonera", "La siderúrgica", "La charrera"]
      },
      {
        q: "¿Cómo se llama el estadio de Rieleros de Aguascalientes?",
        options: ["Alberto Romo Chávez", "Kickapoo Lucky Eagle", "Chevron", "Francisco Villa"]
      },
      {
        q: "¿En qué año ganó Rieleros de Aguascalientes el campeonato de la LMB?",
        options: ["1978", "1980", "2009", "2019"]
      },

      // SARAPEROS DE SALTILLO
      {
        q: "¿En qué ciudad juega Saraperos de Saltillo?",
        options: ["Saltillo", "Monclova", "Tijuana", "Chihuahua"]
      },
      {
        q: "¿En qué año debutó Saraperos de Saltillo en la LMB?",
        options: ["1970", "1975", "1940", "1939"]
      },
      {
        q: "¿Qué prenda tradicional de Saltillo inspira el nombre de Saraperos?",
        options: ["El sarape", "El sombrero charro", "El uniforme ferroviario", "La manta algodonera"]
      },
      {
        q: "¿Cómo se llama el estadio de Saraperos de Saltillo?",
        options: ["Francisco I. Madero", "Estadio Panamericano", "Estadio Monumental", "Estadio de la Revolución"]
      },
      {
        q: "¿En qué años consiguió Saraperos de Saltillo sus tres campeonatos de LMB?",
        options: ["1980, 2009 y 2010", "1978, 1990 y 2000", "1942, 1950 y 1974", "2017, 2019 y 2021"]
      },

      // SULTANES DE MONTERREY
      {
        q: "¿En qué ciudad juega Sultanes de Monterrey?",
        options: ["Monterrey", "Tijuana", "Torreón", "Zapopan"]
      },
      {
        q: "¿En qué año comenzó la historia de Sultanes de Monterrey en la LMB?",
        options: ["1939", "1949", "1970", "1989"]
      },
      {
        q: "¿Cuál fue uno de los primeros nombres de la organización de Sultanes de Monterrey?",
        options: ["Carta Blanca", "Mineros", "La Junta", "Vaqueros"]
      },
      {
        q: "¿Cuántos campeonatos de la LMB registra Sultanes de Monterrey?",
        options: ["10", "2", "5", "15"]
      },
      {
        q: "¿Cómo se llama el estadio de Sultanes de Monterrey?",
        options: ["Mobil Super", "Francisco Villa", "Alberto Romo Chávez", "Chevron"]
      },

      // TECOS DE LOS DOS LAREDOS
      {
        q: "¿Qué ciudades representa Tecos de los Dos Laredos?",
        options: ["Nuevo Laredo y Laredo", "Tijuana y San Diego", "Monterrey y McAllen", "Torreón y El Paso"]
      },
      {
        q: "¿Con qué nombre comenzó la franquicia de Tecos de los Dos Laredos en 1940?",
        options: ["La Junta de Nuevo Laredo", "Tecos de Monterrey", "Acereros de la Frontera", "Toros de Laredo"]
      },
      {
        q: "¿En qué año adoptó la franquicia de Tecos de los Dos Laredos el nombre Tecolotes de Nuevo Laredo?",
        options: ["1949", "1940", "1985", "1995"]
      },
      {
        q: "¿Qué hecho distingue a Tecos de los Dos Laredos desde 1985?",
        options: ["Jugar en dos países", "Ser el primer equipo de Jalisco", "Jugar solo en invierno", "Tener su sede en Durango"]
      },
      {
        q: "¿Qué característica describe mejor a Tecos de los Dos Laredos?",
        options: [
          "Es la novena binacional de la LMB",
          "Es el equipo más reciente de la Zona Sur",
          "Representa exclusivamente a Chihuahua",
          "Su nombre homenajea al algodón"
        ]
      },

      // TOROS DE TIJUANA
      {
        q: "¿En qué ciudad juega Toros de Tijuana?",
        options: ["Tijuana", "Aguascalientes", "Saltillo", "Monclova"]
      },
      {
        q: "¿En qué año regresó Toros de Tijuana a la LMB para su etapa actual?",
        options: ["2014", "2004", "2017", "2021"]
      },
      {
        q: "¿En qué años ganó Toros de Tijuana sus campeonatos de liga?",
        options: ["2017 y 2021", "2004 y 2014", "1980 y 2010", "1942 y 1950"]
      },
      {
        q: "¿Cómo se llama el estadio de Toros de Tijuana?",
        options: ["Estadio Chevron", "Estadio Mobil Super", "Estadio Panamericano", "Estadio Francisco I. Madero"]
      },
      {
        q: "¿Qué remontada logró Toros de Tijuana en la Serie del Rey de 2021?",
        options: [
          "Volvió de un 0-3 ante Leones de Yucatán",
          "Remontó un 0-4 ante Sultanes",
          "Ganó tras perder los primeros cinco juegos",
          "Remontó un 1-3 ante Charros"
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