<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.0/build/ol.js"></script>
<script type="text/javascript">

    let markers = [];
    <?php foreach(get_records('SuperEightFestivalsCity', array(), -1) as $record): ?>
    <?php
    $latitude = $record->latitude;
    $longitude = $record->longitude;
    $id = $record->id;
    $name = $record->name;
    $countryID = $record->country_id;
    ?>
    markers.push(new ol.Feature({
        geometry: new ol.geom.Point(
            ol.proj.fromLonLat([
                <?= $longitude; ?>,
                <?= $latitude; ?>
            ]),
        ),
        name: "<?= $name; ?>",
        id: <?= $id; ?>,
        country: "<?= get_country_by_id($countryID)->name; ?>",
    }));
    <?php endforeach; ?>

    let layers = [];
    // source layer
    layers.push(
        new ol.layer.Tile({
            source: new ol.source.OSM(),
        })
    );
    // markers layer
    const markerLayerSource = new ol.source.Vector({
        features: markers,
    });
    layers.push(new ol.layer.Vector({
        source: markerLayerSource,
        style: new ol.style.Style({
            image: new ol.style.Icon({
                crossOrigin: 'anonymous',
                scale: 0.5,
                src: '<?php echo src("marker.png", "images/"); ?>'
            })
        })
    }));

    // view
    let view = new ol.View({
        center: ol.proj.fromLonLat([10, 5]),
        zoom: 0
    });

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

    const map = new ol.Map({
        target: '<?php echo $mapID; ?>',
        layers: layers,
        view: view,
        overlays: [overlay],
    });

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
<p class="mb-0"><a href='/countries/${country.toLowerCase().replace(/\s/g, "-")}#${name.toLowerCase().replace(/\s/g, "-")}'>Click here for information</a></p>
`;
            overlay.setPosition(coordinate);
        });
    });

</script>