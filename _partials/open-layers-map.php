<div id="<?php echo $mapID; ?>" class="map">
</div>

<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.1.0/build/ol.js"></script>
<script type="text/javascript">

    let markers = [];
    <?php foreach($records as $record): ?>
    <?php
    $latitude = $record->latitude;
    $longitude = $record->longitude;
    $name = $record->name;
    ?>
    markers.push(new ol.Feature({
        geometry: new ol.geom.Point(
            ol.proj.fromLonLat([
                <?php echo $longitude; ?>,
                <?php echo $latitude; ?>
            ]),
        ),
        name: "<?php echo $name; ?>",
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
        center: ol.proj.fromLonLat([10, 10]),
        zoom: 0
    });

    const map = new ol.Map({
        target: '<?php echo $mapID; ?>',
        layers: layers,
        view: view,
    });


</script>