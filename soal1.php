<?php
$buah = [ "apel", "jeruk", "sirsak", "kiwi", "nanas" ];

function prosesString($params) {
	foreach($params as $buah){
        echo $buah,", ";
    }
}

prosesString($buah);
?>