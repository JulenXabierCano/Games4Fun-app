<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun | Sala</title>
    <link rel="stylesheet" href="/src/css/styles.css">
</head>

<body>

    <script src="/src/js/functions.js"></script>

    <script>
        const CRUZ = 'url(https://simpleicon.com/wp-content/uploads/cross-256x256.png)'
        const CIRCULO = 'url(https://simpleicon.com/wp-content/uploads/cd1.png)'

        const tabla = document.createElement('table')
        for (x = 1; x <= 3; x++) {
            const fila = document.createElement('tr')
            for (y = 1; y <= 3; y++) {
                const casilla = document.createElement('td')
                casilla.id = `${x}${y}`
                casilla.addEventListener('click', () => {
                    casilla.style.backgroundImage = CRUZ
                })

                casilla.addEventListener('dblclick', () => {
                    casilla.style.backgroundImage = CIRCULO
                })

                fila.appendChild(casilla)
            }
            tabla.appendChild(fila)
        }

        document.body.appendChild(tabla)
    </script>

    <div id="menu">
        <h1 id="juego">Games4Fun | Damas</h1>
        <button class='boton' id='cerrarSala' onclick=''>Cerrar sala</button>
    </div>

    <div id='chat'>
        <h4 style='text-align:center;'>Chat:</h4>
        <div id='text'></div>
        <input type="text" name="" id="" class='texto_dos'>
        <input type="button" value="Enviar" class='boton_dos'>
    </div>

    <div id="tablero">
        <h4>El tablero se generará cuando entre el Jugador 2</h2>
    </div>

    <div id='info'></div>

    <script>
        if (!localStorage.getItem('usr'))
            window.location = '/'

        /**
         * Fetch que se ejecuta al iniciar la página
         * para que inicie la sala y esté disponible para la partida
         */
        fetch(`/sala?sala=${localStorage.getItem('sala')}&usr=${localStorage.getItem('usr')}`)
            .then((response) => {
                if (!response.ok) {
                    return 'Error en la consulta'
                }
                return response.json()
            })
            .then((data) => {
                mostrarDatos(data)

                var intervaloDatos = setInterval(() => {
                    cojerDatos()
                }, 5000);

                localStorage.removeItem('usr')

                localStorage.setItem('id_sala', data.id_sala)
            })
    </script>

</body>

</html>