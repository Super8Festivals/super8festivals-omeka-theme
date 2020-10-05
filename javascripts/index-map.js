// import ol from "./vendor/openlayersmap/ol";

const view = new ol.View({
    center: ol.proj.fromLonLat([10, 5]),
    zoom: 0
});

const map = new ol.Map({
    target: 'map',
    view: view,
    layers: [new ol.layer.Tile({ source: new ol.source.OSM(), })]
});

// markers layer
const markers = [];
const markerLayerSource = new ol.source.Vector({
    features: markers,
});
const markerLayer = new ol.layer.Vector({
    source: markerLayerSource,
    style: new ol.style.Style({
        image: new ol.style.Icon({
            crossOrigin: 'anonymous',
            scale: 0.5,
            src: '/themes/SuperEightFestivals/images/marker.png'
        })
    })
});
map.addLayer(markerLayer);

// click event
const popupContainer = document.getElementById('popup');
const popupContent = document.getElementById('popup-content');
const popupCloser = document.getElementById('popup-closer');
popupCloser.onclick = function () {
    overlay.setPosition(undefined);
    popupCloser.blur();
    return false;
};

const overlay = new ol.Overlay({
    element: popupContainer,
    autoPan: true,
    autoPanAnimation: {
        duration: 250
    }
});
map.addOverlay(overlay);

map.on('singleclick', function (e) {
    overlay.setPosition(undefined);
    popupCloser.blur();
    map.forEachFeatureAtPixel(e.pixel, function (feature, layer) {
        const values = feature.values_;
        const country = values.country;
        const name = values.name;

        const coordinate = e.coordinate;
        popupContent.innerHTML = `
            <p class="mb-0">Country: ${country}</p>
            <p class="mb-0">City: ${name}</p>
            <p class="mb-0"><a href='/cities/${encodeURIComponent(name.toLowerCase())}'>More Information</a></p>
        `;
        overlay.setPosition(coordinate);
    });
});


// create markers
(async () => {
    const cities = await fetch("/rest-api/cities").then((resp) => resp.json()).then((json) => json.data);
    for (const city of cities) {
        const country = await fetch(`/rest-api/countries/${city.country_id}`).then((resp) => resp.json()).then((json) => json.data);
        markerLayerSource.addFeature(new ol.Feature({
            geometry: new ol.geom.Point(
                ol.proj.fromLonLat([
                    city.longitude,
                    city.latitude,
                ]),
            ),
            name: city.name,
            id: city.id,
            country: country.name,
        }));
    }
})();