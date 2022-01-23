<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxsKE9ArOZcaNtsfXIMFqr4N-UCsmp-Ng&callback=initMap">
</script>


<script>
<?php if (!empty($main['lat'] && !empty($main['lng']))): ?>
	var center = { lat: <?= $main['lat'].", lng: ".$main['lng']; ?> };
<?php else: ?>
	var center = { lat: <?=$desa['lat'].", lng: ".$desa['lng']?> };
<?php endif; ?>

function initMap() {
	var myLatlng = new google.maps.LatLng(center.lat, center.lng);
	var mapOptions = { zoom: 17, center, mapTypeId:google.maps.MapTypeId.HYBRID }
	var map = new google.maps.Map(document.getElementById("map_desa"), mapOptions);

	// Place a draggable marker on the map
	var marker = new google.maps.Marker({
			position: myLatlng,
			map: map,
			draggable: false,
			title: "Kantor <?=ucwords($this->setting->sebutan_desa).' '.$desa['nama_desa']?>"
	});

	marker.addListener('dragend', (e) => {
		document.getElementById('lat').value = e.latLng.lat();
		document.getElementById('lng').value = e.latLng.lng();
	})
}
</script>
<style>
  #map_desa
  {
	z-index: 1;
    width: 100%;
    height: 400px;
    border: 1px solid #000;
	margin-top:auto;
  }
</style>
<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
                    <div class='modal-body'>
                        <div class="row">
                            <div class="col-sm-12">
                                <div id="map_desa"></div>
                                <input type="hidden" name="lat" id="lat" value="<?= $main['lat']?>"/>
                                <input type="hidden" name="lng" id="lng" value="<?= $main['lng']?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	

