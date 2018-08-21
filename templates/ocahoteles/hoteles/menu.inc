
<?php
global $ROOT_LANG;
?>

<section class=" color-primario pd-t-40 pd-b-20 bck-color-gris">
    <div class="container pestana-hotel pd-l-0 pd-r-0">
        <div class="row">
            <div class="col-xs-12 ps-rel pd-l-0 pd-r-0" >
          
                <ul id="menu-hotel">
                    <?php foreach($datos['menu'] as $menu) {
                        
                        $slug = "";
                        $active = "";
                        
                        
                        if ($menu['slug']!='') {
                            $slug = $menu['slug'];
                        } 
                                 
                        if ($menu['slug']==$datos['seccion']) {
                            $active = " active";
                        }
                        
                        if ($active=="") {    
                            //ver si el origen es igual para marcarlo
                            if ($menu['origen']!="") {
                                if ($menu['origen']==$datos['seccion']) {
                                    $active = " active";
                                }
                            }
                        }
                    ?>
                    <li class="elemento-menu-hotel">
                        
                        <?php 
                        $estilo_submenu = "";
                        if (isset($menu['submenu']) && is_array($menu['submenu'])) { 
                            $estilo_submenu = 'class="dropdown-toggle" data-toggle="dropdown"';
                        ?>
                        <a href="<?php echo $ROOT . $ROOT_LANG  . $menu['link_url'] . $slug ?>" <?php echo $estilo_submenu?> title="<?php echo $menu['titulo']?>"><?php echo $menu['titulo']?> <span class="caret"></span></a>
                        <?php } else {?>
                        <a href="<?php echo $ROOT . $ROOT_LANG  . $menu['link_url'] . $slug ?>" <?php echo $estilo_submenu?> title="<?php echo $menu['titulo']?>"><?php echo $menu['titulo']?></a>
                        <?php } ?>
                         
                        <div class="linea <?php echo $active?>"></div>
                        <?php
                            //comprobar si tiene submenu
                            if (isset($menu['submenu']) && is_array($menu['submenu'])) { 
                            
                        ?>
                            
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                
                        <?php
                                foreach($menu['submenu'] as $submenu) {
                                    $slug_submenu = "";
                                    if ($submenu['slug']!='') {
                                        $slug_submenu = $submenu['slug'];
                                    }
                        ?>
                                <li><a href="<?php echo $ROOT . $ROOT_LANG  . $menu['link_url'] . $slug_submenu ?>" title="<?php echo $submenu['titulo']?>"><?php echo $submenu['titulo']?></a></li>
                        <?php 
                                } ?>
                            </ul>
                          
                        <?php   }
                        ?>
                            
                    </li>
                            
                    <?php } ?>
                    <li id="mas-menu">
                        
                        <div class="btn-group">
                            
                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                <span class="icon-plus color-blanco "></span>
                            </button>

                            <ul class="dropdown-menu pull-right" role="menu" id="menu-desplegable-hotel">

                            </ul>
                            
                        </div>
                        
                    </li>
                    
                </ul> 
                
                    
                    
            
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    jQuery(document).ready(function(){
          posicionaMenu();
    });
    
    
    jQuery( window ).resize(posicionaMenu);
          
    function posicionaMenu() {
        
        
        jQuery("#mas-menu").hide();
        if (jQuery("#menu-hotel").prop('scrollHeight') > jQuery("#menu-hotel").height() ) {

           jQuery("#menu-desplegable-hotel").html("");

           var offsetP =jQuery("#menu-hotel").offset();
           var topOffP = offsetP.top;

           var ultimo;

          jQuery(".elemento-menu-hotel").each(function(index, element) {

              var offset = jQuery(element).offset();

              if( offset.top>topOffP) {
                jQuery("#menu-desplegable-hotel").append("<li>" + jQuery(element).html() + "</li>");
              } else {
                ultimo =  jQuery(element);//ultimo elmento visible
              }
          });
          var oo_ultimo= jQuery(ultimo).offset();

          var left = oo_ultimo.left;

          jQuery("#mas-menu").css("right", 20);
          jQuery("#mas-menu").show();
          
        } else {
            jQuery("#menu-desplegable-hotel").html("");
            jQuery("#mas-menu").hide();
        }
        
    }
</script>
