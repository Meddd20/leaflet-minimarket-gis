@include('layouts.app')

@section('content')

<div id="map">
</div>
<script>
    // Menampilkan peta
    var mymap = L.map('map').setView([-6.3269,107.1248], 14);

    // Menambahkan layer peta
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: 'Map data © <a href="https://openstreetmap.org">OpenStreetMap</a> contributors',
        maxZoom: 18,
    }).addTo(mymap);

</script>
<script src="https://cdn.jsdelivr.net/npm/leaflet@1.9.3/dist/leaflet.min.js"></script>

@endsection