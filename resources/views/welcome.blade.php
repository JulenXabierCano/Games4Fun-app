<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games4Fun</title>
    <link rel="stylesheet" href="/src/css/styles.css">
</head>

<body>
    <script>
        let host = (new URL(window.location.origin)).host;

        function saveData() {
            if (!inputUsuario.value) {
                err.innerHTML = 'Rellene el usuario, por favor'
            } else if (!sala.value) {
                err.innerHTML = 'Rellene la sala, por favor'
            } else {
                err.innerHTML = '<div id="carga"></div>'
                carga.style.animation = 'carga 1s infinite'
                
                // Se prepara la información para pasarla a otra página
                localStorage.setItem('sala', sala.value)
                localStorage.setItem('usr', inputUsuario.value)
                window.location = `/${sala.value}`
            }
        }
    </script>

    <h1 id='titulo'>GAMES4FUN</h1>
    <p id='subtitulo'>TU PÁGINA DE CONFIANZA PARA MATAR EL ABURRIMIENTO</p>

    <br><br>

    <div id='err'></div>

    <label id='labelUsuario' for="inputUsuario">Nombre de usuario</label>
    
    <br>
    
    <input id='inputUsuario' type="text" name='usr' class='texto'>

    <br><br><br>

    <select name="sala" id="sala">
        <option value="">Escoja una sala</option>
        <option value="damas">Damas</option>
        <option value="hf">Hundir la flota</option>
        <option value="tr">Tres en raya</option>
        <option value="qnq">¿Quien es quien?</option>
    </select>

    <br><br>

    <button class='boton' onclick='saveData()'>Crear sala</button>

    <br>

    <button class='boton' disabled>Unirse a una sala</button>

</body>

</html>