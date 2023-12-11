<div id="map" style="width: 100%; height: 100vh;"></div>

<script>
    // ini yg set view.. itu buat koordinat yg mau dikiatin(wilayahnya), trus sbelahnya tuh kerendahannya (zoom viewnya)
    const map = L.map('map').setView([-7.42883161316002, 109.33639315239614], 14);

    const tiles = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        maxZoom: 19,
        attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
    }).addTo(map);
</script>