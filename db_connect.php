<?php
$conn = new mysqli("localhost", "emunahed_admin", "Leondejuda1993", "emunahed_pagos");

if ($conn->connect_error) {
die("Error de conexión: " . $conn->connect_error);
}

?>
