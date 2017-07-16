$(document).ready(function(){


	var 
	$body = $('body'),
	$window = $(window),
	$footer = $('footer');

	$window.on('resize', function() {
		footerPos();
		respFilter();
	});


	function footerPos() {
		if ($window.height() > $body.outerHeight()) { $footer.addClass('fixed_footer'); }
		else { $footer.removeClass('fixed_footer'); }
	}
	footerPos();

	$.fn.dialog = function() {
		var $this = $(this),
		$dialogWrapper = $('.dialog_wrapper'),
		$dialog = $('.dialog'),
		$dialogBg = $('.dialog_bg'),
		$dialogClose = $('.dialog_close'),
		wPosSet = $window.scrollTop(),
		wPosGet = $body.attr('data-scroll');
		$dialogWrapper.show();
		$dialogBg.show();
		$this.show();
		$body.addClass('dialog_opened');
		$body.css('top', - wPosSet+'px');
		$body.attr('data-scroll', wPosSet);
		if ($this.height() > $dialogWrapper.height()) {	$body.addClass('dialog_scrollable'); } else { $body.addClass('dialog_scrollable'); }
		if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) { $body.addClass('dialog_scrollable_mobile'); }
		$dialogClose.on('click', function() {
			$dialog.hide();
			$dialogBg.hide();
			$dialogWrapper.hide();
			$body.removeClass('dialog_opened', 'dialog_scrollable_mobile');
			$window.scrollTop(wPosSet);
		});
	};

	// navigation
	$('.navigation_btn').on('click', function () {
		$(this).toggleClass('isOpen');
		$('.dark_overlay').toggleClass('nav-opened');
		$('.navigation').toggleClass('nav-opened');
	});


	$('.dark_overlay').click(function() {
		$(this).removeClass('nav-opened');
		$('.navigation').removeClass('nav-opened');
		$('.navigation_btn').removeClass('isOpen');
	});


	$('.map_overlay').on('click', function () {
		$(this).hide();
	});

	function dropdownNavigation () {
		if($window.width() < 768 ) {
			$('.dropDown > a').on('click', function (e) {
				e.preventDefault();
				$(this).next('ul').slideToggle();
			});
		}
	}
	dropdownNavigation()

	// drop Toggle
	$('.js_DropBtn').on('click', function () {
		$(this).closest('.js_DropWrap').toggleClass('isOpened').find('.js_DropBox').slideToggle(200);
		return false;
	});

	// сворачивание drop Toggle при клике вне списка
	$('html,body').click(function(event) {
		var eventInMenu = $(event.target).parents('.js_DropWrap');
		if(!eventInMenu.length) {
			$('.js_DropWrap').removeClass('isOpened');
			$('.js_DropBox').slideUp(200);
		}
	});

	// кнопка вверх
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('.btn_up').fadeIn();
		} else {
			$('.btn_up').fadeOut();
		}
	});
	$('.btn_up').click(function () {
		$('body,html').animate({scrollTop: 0}, 400);
		return false;
	});

	// filters
	$('.filterHead').on('click', function () {
		var fw = $(this).closest('.filterWrap');
		var hc = fw.hasClass('isOpened');

		if ( hc ) {
			fw.find('.filterBody').slideUp(200);
			fw.removeClass('isOpened');
		} else {
			fw.find('.filterBody').slideDown(200);
			fw.addClass('isOpened');
		}
		return false;
	});

	function respFilter () {
		if ( $(window).width() <= 850 ) {
			$('.filterWrap').removeClass('isOpened');
			$('.filterBody').slideUp(200);
		}
	}

	respFilter();


	// slider in filter
	$(function() {
		$( "#filter_price" ).slider({
			range: true,
			min: 0,
			max: 30000,
			values: [ 0, 20000 ],
			slide: function( event, ui ) {
				$( "#amount_from" ).val(ui.values[ 0 ] + ' рубл.');
				$( "#amount_to" ).val(ui.values[ 1 ] + ' рубл.');
			}
		});
		$( "#amount_from" ).val($( "#filter_price" ).slider( "values", 0)  + ' рубл.');
		$( "#amount_to" ).val($( "#filter_price" ).slider( "values", 1)  + ' рубл.');
		var pricemax = $( "#amount_to" ).val().split(' ')[0];
		var pricemin = $( "#amount_from" ).val().split(' ')[0];
		$.post('/siteprice', {pricemax: pricemax, pricemin: pricemin}, function () { 
        },"text");
	});


	$('.filter_sort_by').styler({
		singleSelectzIndex: 1
	});

	// placeholder in input
	$('.input_effect .input').on('focus', function () {
		$(this).closest('.input_effect').addClass('focus');
	});

	$('.input_effect .input').on('blur', function () {
		var inpVal = $(this).val();
		if ( inpVal == '' ) {
			$(this).closest('.input_effect').removeClass('focus');
		}
	});

	// testing input with effect
	$('.input_effect .input').each(function () {
		if( $(this).val() != '' ) {
			$(this).closest('.input_effect').addClass('focus');
		}
	})

	$(document).ready(function() {
		$('.type_number .minus').click(function () {
			var $input = $(this).parent().find('input');
			var count = parseInt($input.val()) - 1;
			count = count < 1 ? 1 : count;
			$input.val(count);
			$input.change();
			return false;
		});
		$('.type_number .plus').click(function () {
			var $input = $(this).parent().find('input');
			$input.val(parseInt($input.val()) + 1);
			$input.change();
			return false;
		});
	});

	// tabs
	var $wrapper = $('.tab_wrapper'),
	$allTabs = $wrapper.find('.tab_item'),
	$tabMenu = $wrapper.find('.tab_menu li');

	$tabMenu.each(function(i) {
		$(this).attr('data-tab', 'tab'+i);
	});

	$allTabs.each(function(i) {
		$(this).attr('data-tab', 'tab'+i);
	});

	$tabMenu.on('click', function() {

		var dataTab = $(this).data('tab'),
		$getWrapper = $(this).closest($wrapper);

		$getWrapper.find($tabMenu).removeClass('active');
		$(this).addClass('active');

		$getWrapper.find($allTabs).hide();
		$getWrapper.find($allTabs).filter('[data-tab='+dataTab+']').show();
		footerPos();
	});


	$('.btn_open_login').on('click', function () {
		$('.dialog_close').trigger('click');
		$('.modal_login').dialog();
		return false;
	});

	$('.btn_open_reg').on('click', function () {
		$('.dialog_close').trigger('click');
		$('.modal_registration').dialog();
		return false;
	});

	// $('.modal_login').dialog();

	// $('.navigation_btn').click();
	// $('.currency_btn').click();


});
