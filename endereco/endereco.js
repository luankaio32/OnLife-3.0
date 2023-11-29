var map;
var markers = [];
var total = 15;

var pharmacies = [
    { name: "Farmácia Pague-Menos", lat: -7.988916, lon: -34.841451 },
    { name: "Farmácia Boa vida", lat: -7.989123, lon: -34.842367 },
    { name: "Farmácia Life", lat: -7.987456, lon: -34.843212 },
];

function initMap() {
    map = L.map('map').setView([-7.988916, -34.841451], 14);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    pharmacies.forEach(function (pharmacy) {
        L.marker([pharmacy.lat, pharmacy.lon])
            .addTo(map)
            .bindPopup(pharmacy.name);
    });
}

function buscarEndereco() {
    var endereco = document.getElementById('address-input').value;
    var url = 'https://nominatim.openstreetmap.org/search?format=json&q=' + encodeURIComponent(endereco);

    fetch(url)
        .then(response => response.json())
        .then(data => {
            if (data.length > 0) {
                var result = data[0];
                var lat = parseFloat(result.lat);
                var lon = parseFloat(result.lon);

                for (var i = 0; i < markers.length; i++) {
                    map.removeLayer(markers[i]);
                }

                var marker = L.marker([lat, lon]).addTo(map);
                markers.push(marker);

                map.setView([lat, lon], 15);
            } else {
                alert('Endereço não encontrado. Por favor, verifique o endereço inserido.');
            }
        });
}

window.onload = function () {
    initMap();
    document.getElementById('search-button').addEventListener('click', buscarEndereco);
    document.querySelectorAll('.remove-icon').forEach(function (icon) {
        icon.addEventListener('click', function () {
            removerItem(this);
        });
    });
};
