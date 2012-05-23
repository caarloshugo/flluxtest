$(document).ready( function() {
	$("#home-past-events").hide();
	$("#gallery-mini").hide();
	
	$('#return-gallery').click( function() {
		$('#gallery-mini').fadeOut('slow', function() {
			$('#gallery-div').fadeIn();
		});
	});
	
	$('#cpast-events').click( function() {
		$('#home-events').fadeOutreturn-gallery('slow', function() {
			$("#home-past-events").fadeIn();
			$('.scroll-pane').jScrollPane( {
				showArrows: false,
				horizontalGutter: 10,
				verticalGutter: 10
			});
		});
	});
	
	$('.return-events').click( function() {
		$('#home-past-events').fadeOut('slow', function() {
			$("#home-events").fadeIn();
			$('.scroll-pane').jScrollPane( {
				showArrows: false,
				horizontalGutter: 10,
				verticalGutter: 10
			});
		});
	});
	
	$('#input-name, #input-email').blur( function() {
		if($('#input-name').val() != "") {
			if(isEmail($('#input-email').val())) {
				$('#input-send').show();
			} else {
				$('#input-send').hide();
			}
		} else {
			$('#input-send').hide();
		}
	});
	
	$('#gallery > img').click( function() {
		var rel      = $(this).attr('rel');
		var altImg   = $(this).attr('alt');
		var titleImg = $(this).attr('title');
		
		$('#gallery-div').fadeOut('slow', function() {
			$('#gallery-mini').fadeIn();
			$('#large-image').html('<img src="' + rel + '" alt="' + altImg + '" title="' + titleImg + '"/>');
		});
	});
	
	$('.sc-gallery > img').click( function() {
		var rel      = $(this).attr('rel');
		var altImg   = $(this).attr('alt');
		var titleImg = $(this).attr('title');
		
		$('#large-image').fadeOut('slow', function() {
			$('#large-image').html('<img src="' + rel + '" alt="' + altImg + '" title="' + titleImg + '"/>');
			$('#large-image').fadeIn();
		});
	});
	
	$('#home').click( function() {
		$('#new-visit').fadeOut();
		$('#add-comment').html("+ Agregar comentario");
	});
	
	$("#close").click( function() {
		$('#new-visit').fadeOut();
		$('#add-comment').html("+ Agregar comentario");
	});
	
	$('#add-comment').click( function() {
		$('#new-visit').fadeIn();
		$('#add-comment').html("Enviar comentario");
		$('#input-name').focus();
		return false;
	});
	
	$('.img-thumb-gallery').click( function() {
		$($(this).parent()).next('.image-gallery').fadeOut();
		$($(this).parent()).next('.image-gallery').attr('src', 'css/images/' + $(this).attr('rel') + '.png').fadeIn();
	});	
	
	$('#gallery > img').hover( function() {
		$('.title-image').html($(this).attr('title'));
	});
	
	$('#gallery > img').mouseleave( function() {
		$('.title-image').html('');
	});
	
	var img = false;
	
	if (navigator.appCodeName == "Mozilla") {
		$('body').bind('DOMMouseScroll', function(e) {
			if($('.first-image').hasClass('last-image') == true) {
				$('.first-image').removeClass('first-image active-image');
				$('#gallery > img').eq(0).addClass('active-image first-image');
			} else {
				if(e.detail > 0) {
					img = $('.first-image').prev("img").addClass('active-image');
					$('.first-image').removeClass('first-image active-image');
					$(img).addClass('first-image');
					$('.title-image').html($(img).attr('title'));
				} else {
					img = $('.first-image').next("img").addClass('active-image');
					$('.first-image').removeClass('first-image active-image');
					$(img).addClass('first-image');
					$('.title-image').html($(img).attr('title'));
				}
			}
		});
	} else {
		$('body').bind('mousewheel', function(e) {
			if($('.first-image').hasClass('last-image') == true) {
				$('.first-image').removeClass('first-image active-image');
				$('#gallery > img').eq(0).addClass('active-image first-image');
			} else {
				if(e.delta < 0) {
					img = $('.first-image').prev("img").addClass('active-image');
					$('.first-image').removeClass('first-image active-image');
					$(img).addClass('first-image');
					$('.title-image').html($(img).attr('title'));
				} else {
					img = $('.first-image').next("img").addClass('active-image');
					$('.first-image').removeClass('first-image active-image');
					$(img).addClass('first-image');
					$('.title-image').html($(img).attr('title'));
				}
			}
		});
	}
	
	$('#gallery > img').eq(0).addClass('active-image first-image');
	$('.title-image').html($('#gallery > img').eq(0).attr('title'));
});

function isEmail(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};

$(function() {
	$('.scroll-pane').jScrollPane( {
		showArrows: false,
		horizontalGutter: 10,
		verticalGutter: 10
	});
});

function changeImg(name) {
	console.log(this);
}
