/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-minus': '&#xe928;',
		'icon-th-menu': '&#xe929;',
		'icon-esquiables': '&#xe927;',
		'icon-telesqui': '&#xe924;',
		'icon-ski-remontes': '&#xe925;',
		'icon-exit-door-symbol': '&#xe926;',
		'icon-clima_1': '&#xe91c;',
		'icon-clima_2': '&#xe91d;',
		'icon-clima_3': '&#xe91e;',
		'icon-clima_4': '&#xe91f;',
		'icon-clima_5': '&#xe920;',
		'icon-clima_6': '&#xe921;',
		'icon-clima_7': '&#xe922;',
		'icon-clima_8': '&#xe923;',
		'icon-llave': '&#xe90d;',
		'icon-piscina': '&#xe912;',
		'icon-h': '&#xe900;',
		'icon-bar': '&#xe901;',
		'icon-cama-doble-p': '&#xe902;',
		'icon-cama': '&#xe903;',
		'icon-campana': '&#xe904;',
		'icon-cigarro': '&#xe905;',
		'icon-desayuno': '&#xe906;',
		'icon-estrella-2': '&#xe907;',
		'icon-estrella': '&#xe908;',
		'icon-frio': '&#xe909;',
		'icon-gym': '&#xe90a;',
		'icon-lavanderia': '&#xe90b;',
		'icon-limpieza': '&#xe90c;',
		'icon-microondas': '&#xe90e;',
		'icon-nevera': '&#xe90f;',
		'icon-olla': '&#xe910;',
		'icon-percha': '&#xe911;',
		'icon-plancha': '&#xe913;',
		'icon-platos': '&#xe914;',
		'icon-secador': '&#xe915;',
		'icon-spa': '&#xe916;',
		'icon-tenedor-cuchillo': '&#xe917;',
		'icon-toallas': '&#xe918;',
		'icon-tv': '&#xe919;',
		'icon-wifi': '&#xe91a;',
		'icon-golf': '&#xe91b;',
		'icon-plus': '&#xf067;',
		'icon-search': '&#xf002;',
		'icon-envelope-o': '&#xf003;',
		'icon-star-o': '&#xf006;',
		'icon-download': '&#xf019;',
		'icon-tag': '&#xf02b;',
		'icon-map-marker': '&#xf041;',
		'icon-check-circle': '&#xf058;',
		'icon-eye': '&#xf06e;',
		'icon-chevron-up': '&#xf077;',
		'icon-key': '&#xf084;',
		'icon-phone': '&#xf095;',
		'icon-phone-square': '&#xf098;',
		'icon-twitter': '&#xf099;',
		'icon-facebook': '&#xf09a;',
		'icon-facebook-f': '&#xf09a;',
		'icon-angle-double-up': '&#xf102;',
		'icon-angle-double-down': '&#xf103;',
		'icon-angle-left': '&#xf104;',
		'icon-angle-right': '&#xf105;',
		'icon-angle-up': '&#xf106;',
		'icon-angle-down': '&#xf107;',
		'icon-instagram': '&#xf16d;',
		'icon-thermometer-full': '&#xf2c7;',
		'icon-thermometer-4': '&#xf2c7;',
		'icon-thermometer-empty': '&#xf2cb;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
