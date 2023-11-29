<!DOCTYPE html>
<html>
<head>
    <title>Selecionar Local de Entrega</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
    <link rel="stylesheet" href="endereco.css">
</head>
<body>

<div class="header">
    <img src="IconOnLife.png" alt="Logo" class="logo">
    <h1>Selecionar Local de Entrega</h1>
</div>

<div class="container">
    <div class="location-info">
        <h1>Local de Entrega</h1>
    </div>
    <div class="search-container">
        <input type="text" id="address-input" placeholder="Digite o endereço">
        <button id="search-button">Buscar</button>
        <button class="continue-button"><a href="finalizada.php">Continuar</a></button>
    </div>
    <div id="map"></div>
</div>
<script src="endereco.js"></script>
</body>
</html>
