<?php
header("Content-Type: application/json");

include 'config.php';
$authId = $_POST['tkid'];
$tki = "SELECT id_dft, id_negara, id FROM pendaftaran WHERE id = '$authId'";
$tki = mysqli_query($connect, $tki);
$tki = mysqli_fetch_assoc($tki);

$newTest = "INSERT INTO test VALUES (null, '$tki[id_dft]', '$tki[id_negara]', '$_POST[point]', '$_POST[type]')";
$newTest = mysqli_query($connect, $newTest);

echo json_encode([
    'success' => true,
    'message' => 'Quiz berhasil disimpan'
]);
exit();