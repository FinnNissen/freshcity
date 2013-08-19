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
	
	$j.each($j(".fieldrow"), function(i,v) {
		$text = $j(this).find('input:text'),
		$textarea = $j(this).find('textarea'),
		$select = $j(this).find('select'),
		$checked = $j(this).find('input:checked').not(':text').length,
		$unChecked = $j(this).find('input:not(:checked)').not(':text').length;
		
		if (($text.length > 0) && ($text.val() != "") || 
			($textarea.length > 0) && ($textarea.val() != "") || 
			($select.length > 0) && ($select.val() != "- select one -") || 
			($checked > 0) && ($checked >= $unChecked)) {
			//console.log( this );
			$j(this).removeClass('error').addClass('completed');
		} else {
			$j(this).removeClass('completed');
		}
	});
 
	$j(".fieldrow input:text, .fieldrow textarea").on('blur', function() {
		$fieldRow = $j(this).parents('.fieldrow');
		if ($j(this).val() != "") { $fieldRow.removeClass('error').addClass('completed'); } else { $fieldRow.removeClass('completed'); }
	});
	
	$j(".fieldrow select").on('blur', function() {
		$fieldRow = $j(this).parents('.fieldrow');
		if ($j(this).val() != "- select one -") { $fieldRow.removeClass('error').addClass('completed'); } else { $fieldRow.removeClass('completed'); }
	});
	
	$j(".fieldrow input:radio, .fieldrow input:checkbox").on('click', function(){
		$radioName = $j(this).attr('name'),
		$allRadioParents = $j("input[type=radio]").filter("[name=" + $radioName + "]").parents('label, .fieldrow');

		$allRadioParents.removeClass('completed');
		$j(this).parents('label, .fieldrow').addClass('completed');
	});

	
/* SIGN-UP
-------------------------------------------------------------- */
	
	var $signUpNextBtn = $j(".sign-up .btn.next"),
		$nextStep = function(e) {
			$signUpNextBtn.addClass('black');
		};


/* SIGN-UP: TYPE & SIZE
-------------------------------------------------------------- */
	
	$j("body#sign-up-1 .required input[type=radio]").on( "click", $nextStep );
	$j("body#sign-up-1 section#never-send-list h3 a").one( "click", function(e){
		$j(this).parent().next().slideToggle('slow').next().fadeOut('fast')
		e.preventDefault();	
	});


/* SIGN-UP: DELIVERY INFORMATION
-------------------------------------------------------------- */
	
	$j("body#sign-up-2 #delivery-schedule input[type=radio]").on( "click", function(){
		$j('body#sign-up-2 #delivery-info').animate({
			opacity: 0
		}, 200).animate({
			opacity: 1
		}, 200);
	});
	
	$j('body#sign-up-2 #delivered-to-row input[type=radio]').on( "click", function(){
		$deliveredTo = $j(this).attr('id');
		$deliveryPostal = $j('body#sign-up-2 #delivery-postal-row input[type=text]').val();

		$j('section#delivery-info .note').fadeOut('fast', function() {
			$j(this).remove();
		});
		$j('fieldset.delivered-to-type:visible').fadeOut('fast');
		$j('body#sign-up-2 #delivery-postal-row').removeClass('error');
	});
	
	$j("body#sign-up-2 #delivery-postal-row a.btn").on( "click", function(e){
		$deliveredTo = $j('body#sign-up-2 #delivered-to-row').find('input:checked').attr('id'),
		$deliveryPostal = $j('body#sign-up-2 #delivery-postal-row input[type=text]').val();

		$j('section#delivery-info .note').fadeOut(1000, function() {
			$j(this).remove();
		});
		if ($deliveryPostal != '') {
			$j('body#sign-up-2 #delivery-postal-row').after(function(){
				if ($deliveredTo == 'pick-up') {
					return '<div class="tk-museo-sans note right">Delivery Time: <br/><strong>Wednesday (5 &ndash; 7PM)</strong></div>';
				} else if ($deliveredTo == 'residence') {
					return '<div class="tk-museo-sans note right">Delivery Time: <strong>Wednesday (5 &ndash; 7PM)</strong><br/>Delivery Fee: <strong>$3</strong></div>';
				}
			});
			$j('fieldset.delivered-to-type').fadeOut('fast');
			$j('fieldset.delivered-to-type').filter("[id=" + $deliveredTo + "-type]").fadeIn('fast');
		} else {
			$j('section#delivery-info .note').fadeOut('fast', function() {
				$j(this).remove();
			});
			$j('fieldset.delivered-to-type').fadeOut('fast');
			$j(this).parent().removeClass('completed').addClass('error');
		}
		e.preventDefault();
	});
		
});

