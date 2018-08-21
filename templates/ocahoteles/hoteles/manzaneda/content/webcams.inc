
<section id="contenedor-hotel">
    <div class="container">
        <div class="row">
           
            <div class="col-xs-12 col-sm-8 col-sm-push-2  text-center col-contenedor-hotel color-negro-texto" id="newParte">
                <h3>WEBCAMS de la ESTACIÓN OCA MANZANEDA</h3>
               
          
<div class="item-inicio" style="margin-bottom:20px;">
	    <div class="col-xs-12 header">
		<div class="banda-left"></div>
		
	    </div>
	    <div class="col-xs-12 contenido">
					<div class="row">
			<div class="col-md-12">
			<iframe src="https://ipcamlive.com/player/player.php?alias=582b900edb0f9&autoplay=1&disablevideofit=1&token=2de839f5&debug=1"  width="100%" height="450" frameborder="0" allowfullscreen ></iframe>
			</div>
			<div class="col-md-12">
			<iframe src="https://ipcamlive.com/player/player.php?alias=58387efb7b012&autoplay=1&disablevideofit=1&token=35485088&debug=1"  width="100%" height="300" frameborder="0" allowfullscreen></iframe>
			</div>
                       
			<div class="col-md-12">
			<iframe src="https://ipcamlive.com/player/player.php?alias=58330ef7a0388&autoplay=1&disablevideofit=1&token=37a85e58&debug=1"  width="100%" height="300" frameborder="0" allowfullscreen></iframe>
			</div>
			</div>
	    </div>
    

 
	</div>
<script>
    function actualizar_webcam() {
      theDate = new Date();
      url='http://85.91.64.19/manzaneda/readImage.asp?dummy='+ theDate.getTime().toString(10);
      document.theimage.src = url;
      // $(".webcam").html('<img src="http://85.91.64.19/manzaneda/readImage.asp?dummy='+ theDate.getTime().toString(10)+'" alt="Imaxen en vivo">');
  }
  
  setInterval(actualizar_webcam, 3000);
 $(".partenieve").html('<div><strong>Pistas abiertas</strong></div>');
 $(".partenieve").append('<div>{{ product.partenieve.pistas }}</div>');
 $(".partenieve").append('<div><strong>Kms esquiables</strong></div>');
 $(".partenieve").append('<div>{{ product.partenieve.kms }}</div>');
 $(".partenieve").append('<div>&nbsp;</div>');
 $(".partenieve").append('<div class="font"><strong>última actualización</strong></div>');

 </script>
 <div class="borde-meteo col-xs-12">
     <div id="wf-location"><h3>Webcam CRTVG</h3></div>
                    <div class="webcam">
                      <img name="theimage" src="" class="img-responsive" />
                    </div>
                  </div>
               
                  
                        
             
                
            </div>
          
        </div>
    </div>
</section>

