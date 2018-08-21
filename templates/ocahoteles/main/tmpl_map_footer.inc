<?php
global $height_map;
    if ($height_map=='') {
        $height_map = "70vh";
    }
?>
<div id="mapaGoogle" style="height:<?php echo $height_map?>;width: 100%;">
    
</div>
<script>
    jQuery(document).ready(function() {
        initMap("<?php echo $datos['lat'] ?>","<?php echo $datos['lon'] ?>");
    });
</script>