/*! Fresh City Farms | v0.0.0 */
var $j = jQuery.noConflict(), $docWidth = $j(window).width();

/* DOCUMENT READY
-------------------------------------------------------------- */

$j(document).ready(function(){

/* Grid
-------------------------------------------------------------- */

	$j(document).jkey('control+g', function() {
		$j('ul#grid').toggle();
	});
});