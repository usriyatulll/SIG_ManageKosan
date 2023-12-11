<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
    var Grayscale = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11'
    });

    var Satellite = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/satellite-v9'
    });

    var Street = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
    });

    var Night = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
            '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/dark-v10'
    });

    var Stadia_Dark = L.tileLayer(
        'https://tiles.stadiamaps.com/tiles/alidade_smooth_dark/{z}/{x}/{y}{r}.{ext}', {
            minZoom: 0,
            maxZoom: 20,
            attribution: '&copy; <a href="https://www.stadiamaps.com/" target="_blank">Stadia Maps</a> &copy; <a href="https://openmaptiles.org/" target="_blank">OpenMapTiles</a> &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            ext: 'png'
        });

    const map = L.map('map', {
        center: [-7.42883161316002, 109.33639315239614], //buat titik yg dimau
        zoom: 17,
        layers: [Street]
    });


    const baseLayers = {
        'Grayscale': Grayscale,
        'Sattelite': Satellite,
        'Street': Street,
        'Night': Night,
        'Stadia_Dark': Stadia_Dark,
    };

    const layerControl = L.control.layers(baseLayers, null, {
        collapsed: false
    }).addTo(map);

    //marker

    L.marker([-7.4283832710632325, 109.33672872771406])
        .bindPopup("<img src=<?= base_url('/img/ft_unsoed.jpg') ?> 'width=50%'" +
            "<b> Fakultas Teknik </b><br> " +
            "Alamat: Jl. Mayjen Sungkono, Blater <br>" +
            "Kecamatan Kalimanah")
        .addTo(map);
    L.marker([-7.430760818802376, 109.34074580481386])
        .bindPopup("<b> Rumah Kost Perwira</b><br> " +
            "Alamat: Desa Blater <br>" +
            "Kecamatan Kalimanah")
        .addTo(map);

    // const marker1 = L.icon({
    //     iconUrl: '<img src=<?= base_url('/img/25530.jpg') ?>',
    //     shadowUrl: '25530.jpg',

    //     iconSize: [38, 95], // size of the icon
    //     shadowSize: [50, 64], // size of the shadow
    //     iconAnchor: [22, 94], // point of the icon which will correspond to marker's location
    //     shadowAnchor: [4, 62], // the same for the shadow
    //     popupAnchor: [-3, -76] // point from which the popup should open relative to the iconAnchor
    // });

    L.marker([-7.430352150057808, 109.34040465601453])
        .bindPopup("<b> Kost Griya Dara</b><br> " +
            "Alamat: Desa Blater <br>" +
            "Kecamatan Kalimanah")
        .addTo(map);
    L.marker([-7.428945961239091, 109.338978232157])
        .bindPopup("<b> Kost Damai 2</b><br> " +
            "Alamat: Desa Blater <br>" +
            "Kecamatan Kalimanah")
        .addTo(map);
    L.marker([-7.428629521844975, 109.33939912288291])
        .bindPopup("<b> Kost Daisy Kost</b><br> " +
            "Alamat: Desa Blater <br>" +
            "Kecamatan Kalimanah")
        .addTo(map);
</script>