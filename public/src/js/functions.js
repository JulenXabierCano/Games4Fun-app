/**
 * Funcion que evita que el jugador 2 se muestre como 
 * undefined
 */
function compj2(j2) {
    if (j2) {
        crearTablero()
        return j2
    } else
        return 'No ha entrado'
}

/**
 * Funcion que se utiliza para mostrar los datos de
 * la sala
 */
function mostrarDatos(datos) {
    info.innerHTML = `
                <p><b>Información de la sala:</b></p>\
                <hr>
                <p><b>ID de la sala:</b> ${datos.id}</p>
                <hr>
                <p><b>Jugador 1:</b> ${datos.jugador_1}</p>
                <hr>
                <p><b>Jugador 2:</b> ${compj2(datos.jugador_2)}</p>
            `
}

/**
 * Funcion que se pone en un intervalo para recuperar
 * la información de la sala cada segundo
 */
function cojerDatos() {
    fetch(`/datosSala?idSala=${localStorage.getItem('id_sala')}`)
        .then((response) => {
            if (!response.ok)
                return 'Error en la consulta'

            return response.json()
        })
        .then((datos) => {
            if (!datos)
                window.location = '/'

            mostrarDatos(datos[0])
        })
}