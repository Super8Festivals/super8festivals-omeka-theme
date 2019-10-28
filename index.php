<?php echo head(array(
    'title' => 'Home'
)); ?>


<?php
$records = get_records('SuperEightFestivalsCountry');
?>


<div id="map" class="map">
</div>

<script type="text/javascript">

    let iconFeatures = [];

    <?php foreach($records as $record): ?>
    <?php
    $latitude = $record->latitude;
    $longitude = $record->longitude;
    $name = $record->name;
    ?>
    iconFeatures.push(new ol.Feature({
        geometry: new ol.geom.Point(ol.proj.fromLonLat([<?php echo $longitude; ?>, <?php echo $latitude; ?>])),
        name: "<?php echo $name; ?>",
    }));
    <?php endforeach; ?>

    const iconLayerSource = new ol.source.Vector({
        features: iconFeatures,
    });

    const iconLayer = new ol.layer.Vector({
        source: iconLayerSource,
        style: new ol.style.Style({
            image: new ol.style.Icon({
                crossOrigin: 'anonymous',
                scale: 0.5,
                src: '<?php echo src("marker.png", "images/"); ?>'
            })
        })
    });

    const map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            }),
            iconLayer
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([15, 0]),
            zoom: 0
        })
    });


</script>


<?php echo foot(); ?>
