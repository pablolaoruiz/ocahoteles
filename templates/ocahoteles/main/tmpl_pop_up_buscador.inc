<div class="modal fade" id="buscador-xs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="z-index: 3000; display: none;">
    <div class="modal-dialog">
        <div class="modal-content mg-t-0 bck-color-secundario pd-b-10">
            <div class="row mg-b-0 mg-l-0 mg-r-0 pd-t-15 pd-b-15 pd-l-16 pd-r-16">
                <div class="col-xs-12 pd-r-2 pd-t-2">
                   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">cerrar</span></button>
                </div>
            </div>
            <div class="modal-body pd-t-0 mg-t-0 ">
                <div class="row mg-l-0 mg-r-0">
                    <div class="col-xs-12 pd-t-2 bck-color-secundario modal-search pd-r-0 pd-l-0">
                        <form class="buscar-form" role="search">
                            <div class="input-group" style="width: 100%">
   
                                <input style="width: 100%" type="text" class="pd-l-20 pd-r-20 form-control buscador srch-term ui-autocomplete-input txt-140 font-light" placeholder="<?php echo _("Ciudad o Nombre de Hotel")?>" name="srch-term" id="srch-term-xs" autocomplete="off">
                            </div>
                        </form>
                    <ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content" id="ui-id-1" tabindex="0" style="display: none;"></ul></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    
    //input search: autofocus
    jQuery('.modal').on('shown.bs.modal', function() {
        jQuery(".buscador").focus();
    });
    
    //input search: erase
    jQuery('.modal').on('hidden.bs.modal', function () {
        jQuery(".buscador").val('').end();
    })
    
    jQuery(document).ready(function() {
        
        language = "<?php echo $ROOT_LANG?>";
    
        jQuery( "#srch-term-xs" ).autocomplete({
           appendTo: ".modal-search",
           source: "<?php echo $ROOT?>services/ajax.php?operacion=buscador&lang=" + language,
           minLength: 2,
           select: function( event, ui ) {
               //navegar al hotel
               window.location.href =  ui.item.url;
         }
        }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
         
            //var img =  '<img src=" <?php echo $appConfig['IMAGES_OLD'] ?>products/' + item.shortName + "/" + item.pictures[0].picture +'" width="100%" class="bck-gris">';
            //var columna_img = "<div class='col-xs-2 pd-r-2 pd-l-2 '>" + img +"</div>";
            var html_total = "<div class='row mg-r-0 mg-l-0'><div class='col-xs-12'>" +  item.nombre + "</div></div>"
                  return jQuery( "<li></li>" ).data("item.autocomplete", item)
                      .append( html_total)
                      .appendTo(ul);
        };
        
    });
    
    
    
</script>