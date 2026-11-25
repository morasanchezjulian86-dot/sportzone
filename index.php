
<?php
require_once "conectar.php";

$resultado = $conexion->query(
    "SELECT * FROM contactos ORDER BY id DESC"
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SportZone Municipal</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f5f3;
            color: #333;
        }

        header {
            background-color: #176b45;
            color: white;
            text-align: center;
            padding: 30px 15px;
        }

        header h1 {
            font-size: 35px;
            margin-bottom: 10px;
        }

        header p {
            font-size: 17px;
        }

        nav {
            background-color: #104b32;
            padding: 15px;
            text-align: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 10px;
            font-weight: bold;
        }

        nav a:hover {
            color: #f5b041;
        }

        section {
            padding: 35px 8%;
        }

        h2 {
            color: #176b45;
            text-align: center;
            margin-bottom: 25px;
        }

        .bienvenida {
            text-align: center;
            background-color: white;
            border-radius: 12px;
            padding: 25px;
            margin: 25px auto;
            max-width: 1000px;
        }

        .deportes {
            display: grid;
            grid-template-columns: repeat(
                auto-fit,
                minmax(230px, 1fr)
            );
            gap: 20px;
        }

        .tarjeta {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 3px 8px rgba(0,0,0,0.10);
            text-align: center;
        }

        .tarjeta h3 {
            color: #176b45;
            margin-bottom: 12px;
        }

        .foto-deporte {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 15px;
        }

        .municipio {
            background-color: #e1eee6;
            border-radius: 12px;
            text-align: center;
        }

        .beneficios {
            background-color: white;
            border-radius: 12px;
        }

        .beneficios ul {
            max-width: 700px;
            margin: auto;
            line-height: 2;
        }

        .formulario {
            background-color: white;
            max-width: 650px;
            margin: auto;
            padding: 25px;
            border-radius: 12px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        input,
        select,
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 7px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 15px;
        }

        button {
            background-color: #176b45;
            color: white;
            border: none;
            padding: 13px;
            width: 100%;
            margin-top: 20px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #104b32;
        }

        .tabla {
            overflow-x: auto;
            margin-top: 25px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th {
            background-color: #176b45;
            color: white;
        }

        th, td {
            padding: 12px;
            border: 1px solid #ddd;
            text-align: center;
        }

        footer {
            background-color: #104b32;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
        }

        @media (max-width: 600px) {
            header h1 {
                font-size: 27px;
            }

            nav a {
                display: inline-block;
                margin: 7px;
            }

            section {
                padding: 25px 5%;
            }
        }
    </style>
</head>

<body>

<header>
    <h1>SportZone Municipal</h1>
    <p>El deporte nos une y fortalece nuestra comunidad</p>
</header>

<nav>
    <a href="#inicio">Inicio</a>
    <a href="#deportes">Deportes</a>
    <a href="#municipio">Municipio</a>
    <a href="#beneficios">Beneficios</a>
    <a href="#contacto">Formulario</a>
</nav>

<section id="inicio">
    <div class="bienvenida">
        <h2>Bienvenido a SportZone Municipal</h2>

        <p>
            Esta página tiene como propósito dar a conocer
            diferentes deportes y promover la actividad física
            en Ixtlahuacán del Río, Jalisco.
        </p>

        <p>
            Aquí podrás conocer algunas disciplinas deportivas,
            sus características y los beneficios que aportan
            a nuestra salud y convivencia.
        </p>
    </div>
</section>

<section id="deportes">
    <h2>Deportes</h2>

    <div class="deportes">

        <div class="tarjeta">
            <img
                src="futbol.jpeg"
                alt="Fútbol"
                class="foto-deporte"
            >

            <h3>Fútbol</h3>

            <p>
                Es un deporte de equipo que ayuda a mejorar
                la condición física, la coordinación y el
                trabajo en equipo.
            </p>
        </div>

        <div class="tarjeta">
            <img
                src="basquet.jpeg"
                alt="Básquetbol"
                class="foto-deporte"
            >

            <h3>Básquetbol</h3>

            <p>
                Es una disciplina que desarrolla la velocidad,
                la coordinación y la convivencia entre
                los jugadores.
            </p>
        </div>

        <div class="tarjeta">
            <img
                src="voleibol.jpeg"
                alt="Voleibol"
                class="foto-deporte"
            >

            <h3>Voleibol</h3>

            <p>
                Es un deporte que requiere comunicación,
                concentración y colaboración para
                conseguir puntos.
            </p>
        </div>

        <div class="tarjeta">
            <img
                src="pesca.jpeg"
                alt="Pesca"
                class="foto-deporte"
            >

            <h3>Pesca</h3>

            <p>
            La pesca deportiva es capturar peces con caña
             y anzuelo por diversión, no para venderlos.
            Se practica desde la orilla, en bote o 
            en el mar, y en general el pez se libera después.
            </p>
        </div>

    </div>
</section>

<section id="municipio" class="municipio">
    <h2>El deporte en nuestro municipio</h2>

    <img
        src="municipio.jpeg"
        alt="Ixtlahuacán del Río, Jalisco"
        class="foto-deporte"
    >

    <p>
        Ixtlahuacán del Río, Jalisco, cuenta con espacios
        donde las personas pueden realizar actividades
        deportivas y convivir con sus amigos y familiares.
    </p>

    <p>
        El deporte es una forma de mantenernos activos,
        saludables y unidos como comunidad.
    </p>
</section>

<section id="beneficios" class="beneficios">
    <h2>Beneficios del deporte</h2>

    <ul>
        <li>Mejora la salud física y mental.</li>
        <li>Ayuda a mantener una buena condición física.</li>
        <li>Fomenta la disciplina y la responsabilidad.</li>
        <li>Promueve el respeto y el trabajo en equipo.</li>
        <li>Favorece la convivencia entre las personas.</li>
    </ul>
</section>

<section id="contacto">
    <h2>Comparte tu deporte favorito</h2>

    <div class="formulario">

        <form action="guardar.php" method="POST">

            <label for="nombre">Nombre:</label>

            <input
                type="text"
                id="nombre"
                name="nombre"
                placeholder="Escribe tu nombre"
                required
            >

            <label for="correo">Correo electrónico:</label>

            <input
                type="email"
                id="correo"
                name="correo"
                placeholder="Escribe tu correo"
                required
            >

            <label for="deporte">Deporte favorito:</label>

            <select id="deporte" name="deporte" required>
                <option value="">Selecciona un deporte</option>
                <option value="Fútbol">Fútbol</option>
                <option value="Básquetbol">Básquetbol</option>
                <option value="Voleibol">Voleibol</option>
                <option value="Pesca">Pesca</option>
                <option value="Otro">Otro</option>
            </select>

            <label for="comentario">Comentario:</label>

            <textarea
                id="comentario"
                name="comentario"
                rows="4"
                placeholder="Escribe tu opinión (opcional)"
            ></textarea>

            <button type="submit">
                Guardar información
            </button>

        </form>
    </div>

    <h2 style="margin-top: 40px;">
        Registros de visitantes
    </h2>

    <div class="tabla">

        <table>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Deporte</th>
                <th>Comentario</th>
                <th>Fecha</th>
            </tr>

            <?php if ($resultado && $resultado->num_rows > 0): ?>

                <?php while ($fila = $resultado->fetch_assoc()): ?>

                    <tr>
                        <td>
                            <?= htmlspecialchars($fila["nombre"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($fila["correo"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($fila["deporte"]) ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($fila["comentario"] ?? "") ?>
                        </td>

                        <td>
                            <?= htmlspecialchars($fila["fecha_registro"]) ?>
                        </td>
                    </tr>

                <?php endwhile; ?>

            <?php else: ?>

                <tr>
                    <td colspan="5">
                        Todavía no hay registros.
                    </td>
                </tr>

            <?php endif; ?>

        </table>

    </div>
</section>

<footer>
    <p>SportZone Municipal</p>
    <p>Ixtlahuacán del Río, Jalisco</p>
    <p>Proyecto escolar · CECyTEJ Plantel 08</p>
</footer>

</body>
</html>
