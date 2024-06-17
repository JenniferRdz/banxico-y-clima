<?php
$apiKey = "9b8c7d6e5f4a3b2c1d0e1f2a3b4c5d6e"; 
$ciudad = "Mexico City"; 
$url = "http://api.openweathermap.org/data/2.5/weather?q=$ciudad&appid=$apiKey&lang=es";

// Inicializar cURL
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutar la solicitud y obtener la respuesta
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);

// Decodificar la respuesta JSON
$datosClima = json_decode($response, true);

// Mostrar los datos
echo "<pre>";
print_r($datosClima);
echo "</pre>";
?>