<?php echo head(array(
    'title' => 'Home'
)); ?>


<div id="map" class="map">
</div>
<script type="text/javascript">
    var map = new ol.Map({
        target: 'map',
        layers: [
            new ol.layer.Tile({
                source: new ol.source.OSM()
            })
        ],
        view: new ol.View({
            center: ol.proj.fromLonLat([15, 0]),
            zoom: 0
        })
    });
</script>

<?php echo foot(); ?>
