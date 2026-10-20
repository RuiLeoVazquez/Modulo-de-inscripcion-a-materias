<?php
$tipo = $_GET['tipo'] ?? $_POST['tipo'] ?? 'alumnos';
if (!in_array($tipo, ['alumnos','grupos','materias','profesores'], true)) $tipo='alumnos';
require __DIR__ . '/../entradas/catalogo.php';
