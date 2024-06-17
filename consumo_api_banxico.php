<?php
$url = "https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43718/datos/oportuno";
$token = "d3b07384d113edec49eaa6238ad5ff00"; 

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Bmx-Token: ' . $token
]);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// Decodificar la respuesta JSON
$datos = json_decode($response, true);

// Mostrar los datos
echo "<pre>";
print_r($datos);
echo "</pre>";
?>