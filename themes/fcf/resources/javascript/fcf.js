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

/* Normalize
-------------------------------------------------------------- */
	
	var allRadioParents = $j("input[type=radio]").parent(),
		radioParentSelected = function(e) {
			allRadioParents.removeClass('selected');
			$j(this).parent().addClass('selected');
		};
	$j("input[type=radio]").on( "click", radioParentSelected );
	
/* SIGN-UP
-------------------------------------------------------------- */
	
	var signUpNextBtn = $j(".sign-up .btn.next"),
		nextStep = function(e) {
			signUpNextBtn.addClass('black');
		};

/* SIGN-UP: TYPE & SIZE
-------------------------------------------------------------- */
	
	$j("#sign-up-1 .required input[type=radio]").on( "click", nextStep );

});