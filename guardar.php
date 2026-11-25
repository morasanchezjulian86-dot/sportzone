
<?php

require_once "conectar.php";

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit;
}

$nombre = trim($_POST["nombre"] ?? "");
$correo = trim($_POST["correo"] ?? "");
$deporte = trim($_POST["deporte"] ?? "");
$comentario = trim($_POST["comentario"] ?? "");

if ($nombre == "" || $correo == "" || $deporte == "") {
    die("Completa los campos obligatorios.");
}

$stmt = $conexion->prepare(
    "INSERT INTO contactos (nombre, correo, deporte, comentario)
     VALUES (?, ?, ?, ?)"
);

$stmt->bind_param(
    "ssss",
    $nombre,
    $correo,
    $deporte,
    $comentario
);

if ($stmt->execute()) {
    header("Location: index.php#contacto");
    exit;
} else {
    echo "No se pudo guardar el registro.";
}

$stmt->close();
$conexion->close();

?>
