$(document).ready(function(){
	toPrice();
	var arr = [];
	var master_flag = false;
	var category_flag = false;
	var technika_flag = false;
	var select_val = 'p.id ASC';
	var lastval = window.location.href.split("/")
	var id = lastval[lastval.length - 1];
	arr.push(id);
	checkboxChecked(id);
	hecCategory ();

	$('.filterBody input[type="checkbox"]').on('change',function(){
		hecCategory ();
		toPrice();
		var id = $(this).attr('value');
		if($(this).prop('checked') == true){
			arr.push(id);
		}
		else {
			arr = arr.filter(function(number) {
			  return number != id;
			});
		}
		submitAjax();
        return false;
	})

	$('select[name="select_sort_product"]').on('change', function() {
		toPrice();
   	 	select_val = $(this).val();
   	 	submitAjax();
        return false;
 	});

 	$('div.category_nav .button').on('click', function(e){
 		e.preventDefault();
 		toPrice();
 		arr = [];
 		$('div.category_nav .button').each(function() {
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				return false;
			}
		});
		$('.filterBody input[type="checkbox"]').each(function() {
			$(this).prop('checked', false);
		});
		checkboxChecked($(this).attr('value'));
		arr.push($(this).attr('value'));
		hecCategory ();
		submitAjax();
		$(this).addClass("active");
 	});

 	$('.filterBody li.filter_category_all_list').on('click', function(e){
 		e.preventDefault();
 		toPrice();
 		arr = [];
		var val_one = $(this).val();
		if (val_one != 0){
			toAddActive(val_one);
			arr.push(val_one);
		}
		$('.filterBody input[type="checkbox"]').each(function() {
			$(this).prop('checked', false);
		});
		checkboxChecked(val_one);
		hecCategory ();
		submitAjax();
 	});
 	
 	/*$('ul.navigation_dropDown li').on('click', function(e){
 		//e.preventDefault();
 		toPrice();
 		arr = [];
 		var val_one = $(this).val();
 		toAddActive(val_one);
		arr.push(val_one);
		submitAjax();
 	});*/

 	function submitAjax(){
 		$.post('/ajax', {
 			              	arr: arr, 
 			              	select_val: select_val,
 			              	master_flag: master_flag,
							category_flag: category_flag,
							technika_flag: technika_flag
						}, function (data) { 
            $(".category_items").html(data);
        },"text");
 	}

	function checkboxChecked(id){
		$('.filterBody input[type="checkbox"]').each(function() {
 			if ($(this).attr('value') == id) {
				$(this).prop('checked', true);
				return false;
			}
		});
	}

	function hecCategory (){
		master_flag = false;
		category_flag = false;
		technika_flag = false;
		$('.filterBody input[type="checkbox"]').each(function() {
 			if ($(this).prop('checked') == true) {
				if (/filter_ch_/.test($(this).attr('id'))) {
					master_flag = true;
				}
				if (/filter_cc_/.test($(this).attr('id'))) {
					category_flag = true;
				}
				if (/filter_ct_/.test($(this).attr('id'))) {
					technika_flag = true;
				}
			}
		});
	}

	function toAddActive(val_one){
 		$('div.category_nav .button').each(function() {
 			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				return false;
			}
		});
		$('div.category_nav a[value=' + val_one + ']').addClass("active");
 	}

	function toPrice(){
		var pricemax = $( "#amount_to" ).val().split(' ')[0];
		var pricemin = $( "#amount_from" ).val().split(' ')[0];
		$.post('/siteprice', {pricemax: pricemax, pricemin: pricemin}, function () { 
        },"text");
	}
});