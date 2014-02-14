// global delay below 

var delay = (function() {
	var timer = 0;
	return function(callback, ms){
		clearTimeout (timer);
		timer = setTimeout(callback, ms);
	};
})();

// navModule Below

var navModule = (function() {
	
	var $first_nav = $("#first_nav");
	var $second_nav = $("#second_nav");
	
	var $is_dropdown = $('.is_dropdown');
	var $is_second_level_dropdown = $('.is_second_level_dropdown');
	var $is_third_level_dropdown = $('.is_third_level_dropdown');
	
	var $has_dropdown = $('.has_dropdown');
	var $entering_dropdown;
	
	var $first_level_has_side_dropdown = $('.first_level_has_side_dropdown');
	var $second_level_has_side_dropdown = $('.second_level_has_side_dropdown');

	var exiting_dropdown = function() {
		// first level exit below
		$is_dropdown.fadeOut('fast');
		$is_dropdown.removeClass('active_dropdown');
		// second level exit below 
		$is_second_level_dropdown.fadeOut('fast');
		// third level exit below 
		$is_third_level_dropdown.fadeOut('fast');
	};
	
	var more_click = function() {
		$(".more_nav").click(function(){
			exiting_dropdown();
			$first_nav.fadeOut(function(){
				$second_nav.fadeIn();
			});
			return false;
		});
	};
	
	var back_click = function() {
		$(".back_nav").click(function(){
			exiting_dropdown();
			$second_nav.fadeOut(function(){
				$first_nav.fadeIn();
			});
			return false;
		});
	};
	
	var exec_bottom_drop = function() {
	
		$has_dropdown.mouseenter(function(){

			// close first the current active dropdwown
			exiting_dropdown();
			
			// then execute the current dropdown
			var need_to_drop = $(this).attr('id');
			$("." + need_to_drop).slideDown('fast');
			$("." + need_to_drop).addClass('active_dropdown');
			
			// if entering the active dropdown below
			$('.active_dropdown').mouseenter(function(){
				$entering_dropdown = 1;
			});
			
			$('.active_dropdown').mouseleave(function(){
				if($entering_dropdown) {
					exiting_dropdown();
				}
			});
			
		});
		
		$has_dropdown.click(function(){
			var need_to_drop = $(this).attr('id');
			$("." + need_to_drop).fadeOut('fast');
			return false;
		});
		
	
	};
	
	var exec_second_drop = function() {
		
		$first_level_has_side_dropdown.mouseenter(function(){
			// close first the current side dropdown 
			$(document).find('.first_level_active_side_dropdown').fadeOut('fast');
			
			// declare the attr
			var need_to_side_drop = $(this).attr('id');
			
			// kill the active side dropdown
			$("." + need_to_side_drop).removeClass('first_level_active_side_dropdown');
			
			// then execute slidedown and add a active side dropdown
			$("." + need_to_side_drop).slideDown('fast', function(){
				$is_third_level_dropdown.fadeOut('fast');
			});
			
			$("." + need_to_side_drop).addClass('first_level_active_side_dropdown');
		});
		
	};
	
	var exec_third_drop = function() {
		$second_level_has_side_dropdown.mouseenter(function(){
			// close first the current side dropdown 
			$(document).find('.second_level_active_side_dropdown').fadeOut('fast');
			
			// declare the attr
			var need_to_side_drop = $(this).attr('id');
			
			// kill the active side dropdown
			$("." + need_to_side_drop).removeClass('second_level_active_side_dropdown');
			
			// then execute slidedown and add a active side dropdown
			$("." + need_to_side_drop).slideDown('fast');
			$("." + need_to_side_drop).addClass('second_level_active_side_dropdown');
		});
		
	};
	
	var click_exit = function() {
		// overall exiting of the dropdowns below
		$(document).on('click', function(e){
			if($(e.target).is('.is_dropdown, .is_dropdown *:not(.is_dropdown li a)')) {
				return false;
			} else {
				$('.is_dropdown').fadeOut('fast');
			}
		});
	};
	
	return {
		more_click: more_click,
		back_click: back_click,
		exec_bottom_drop: exec_bottom_drop,
		exec_second_drop: exec_second_drop,
		exec_third_drop: exec_third_drop,
		click_exit: click_exit
	}
	
})()

// Execute navModule below

navModule.more_click();
navModule.back_click();

//navModule.exec_bottom_drop();
//navModule.exec_second_drop();
//navModule.exec_third_drop();
//navModule.click_exit();

// slideshowModule Below 

var slideshowModule = (function() {
	
	var $leftArrow = $("#featured .left_arrow");
	var $rightArrow = $("#featured .right_arrow");
	
	var $is_entered = 0;
	
	var mouseActions = function() {
		
		$("#featured .featured_image").mouseenter(function(){
			$leftArrow.fadeTo('fast', 0.5);
			$rightArrow.fadeTo('fast', 0.5);
		}).mouseleave(function(){
			$leftArrow.fadeTo('fast', 0);
			$rightArrow.fadeTo('fast', 0);
		});
		
		$rightArrow.mouseenter(function(){
			$(this).fadeTo('fast', 0.8);
			$leftArrow.fadeTo('fast', 0.5);
		});
		
		$leftArrow.mouseenter(function(){
			$(this).fadeTo('fast', 0.8);
			$rightArrow.fadeTo('fast', 0.5);
		});
	};
	
	var arrowsClick = function() {
		
		$leftArrow.click(function(){
			rotate_prev();
		}); 
		
		$rightArrow.click(function(){
			rotate_next();
		});
	};
	
	var rotate = function() {

		setInterval(start, 3000);
		
		function start() {
			if(!$is_entered) {
				var occur_photo = $("#featured .featured_image div.current");
				var next_photo = occur_photo.next();
				
				if(next_photo.length === 0) {
					next_photo = $("#featured .featured_image div:first");
				}
			
				occur_photo.removeClass('current').addClass('previous');
				next_photo.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
				function() {
					occur_photo.removeClass('previous');
				});
			}
		}
	};
	
	var rotate_next = function() {
		var occur_photo = $("#featured .featured_image div.current");
		var next_photo = occur_photo.next();
		
		if(next_photo.length === 0) {
			next_photo = $("#featured .featured_image div:first");
		}
	
		occur_photo.removeClass('current').addClass('previous');
		next_photo.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
		function() {
			occur_photo.removeClass('previous');
		});
	};
	
	var rotate_prev = function() {
		var occur_photo = $("#featured .featured_image div.current");
		var next_photo = occur_photo.prev();
		
		if(next_photo.length === 0) {
			next_photo = $("#featured .featured_image div:last-child");
		}
	
		occur_photo.removeClass('current').addClass('previous');
		next_photo.css({ opacity: 0.0 }).addClass('current').animate({ opacity: 1.0 }, 1000,
		function() {
			occur_photo.removeClass('previous');
		});
	};
	
	var auto_rotate = function() {
		rotate();
	};
	
	var slide_enter = function() {
		$("#featured .featured_image, #featured .arrows").mouseenter(function(){
			$is_entered = 1;
		}).mouseleave(function(){
			$is_entered = 0;
		});
	}; 
	
	return {
		arrowsClick: arrowsClick,
		mouseActions: mouseActions,
		auto_rotate: auto_rotate,
		slide_enter: slide_enter
	}
	
})()

// execute slideShow module below 

slideshowModule.arrowsClick();
slideshowModule.mouseActions();
slideshowModule.auto_rotate();
slideshowModule.slide_enter();

// contactModule below

var contactModule = (function() {
	
	var $email = $(".contact #email");
	var $full_name = $('.contact #full_name');
	var $subject = $('.contact #subject');
	var $message = $('.contact #message');
	
	var $contact_form = $(".contact #contact_form");
	
	var $main_input_validation = $(".contact .input_validation");
	
	var inputKeyup = function() {
		
		// email focus and keyup
		$email.focus(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			if($(this).validEmail()) {
				inputValidation.html('<p>&#8592; Email entered is valid</p>');
			} else {
				inputValidation.html('<p>&#8592; Pls. enter valid Email</p>');
			}
			
		}).keyup(function(){

			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			inputValidation.fadeIn();
			
			if($(this).validEmail()) {
				inputValidation.html('<p>&#8592; Email entered is valid</p>');
				inputValidation.removeClass('error').addClass('good');
			} else {
				inputValidation.html('<p>&#8592; Pls. enter valid Email</p>');
				inputValidation.removeClass('good').addClass('error');
			}
		});
		
		// full name focus and keyup
		
		$full_name.focus(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Full Name</p>');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
			}
		}).keyup(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			inputValidation.fadeIn();
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Full Name</p>');
				inputValidation.removeClass('error').addClass('good');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
				inputValidation.removeClass('good').addClass('error');
			}
		});
		
		// subject focus and keyup 
		
		$subject.focus(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Subject</p>');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
			}
		}).keyup(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			inputValidation.fadeIn();
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Subject</p>');
				inputValidation.removeClass('error').addClass('good');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
				inputValidation.removeClass('good').addClass('error');
			}
		});
		
		// message focus and keyup
		
		$message.focus(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Message</p>');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
			}
		}).keyup(function(){
			var inputValidation = $(this).parent('td').siblings('.input_validation');
			
			inputValidation.fadeIn();
			
			if($(this).val() !== "") {
				inputValidation.html('<p>&#8592; Enter your Message</p>');
				inputValidation.removeClass('error').addClass('good');
			} else {
				inputValidation.html('<p>&#8592; Must not be blank</p>');
				inputValidation.removeClass('good').addClass('error');
			}
	
		});
	
	};
	
	var contact_submit = function() {
		$contact_form.on('submit', function(){
		
			if($('.contact .error').length > 0) {
				
				$('.contact .error').each(function(){
					
					if($(this).prev().children().attr('id') === "email") {
						$(this).fadeIn().html("<p>&#8592; Pls. enter valid email</p>");
					} else {
						$(this).fadeIn().html("<p>&#8592; Must not be blank</p>");
					}
					
				});
			
				return false;
			} else {
				return true;
			}
		});
	};
	
	return {
		inputKeyup: inputKeyup,
		contact_submit: contact_submit
	}
	
})()

// Execute contactModule below 

contactModule.inputKeyup();
contactModule.contact_submit();

// Gallery Module Below

var imageGalleryModule = (function() {
	
	var $image = $("#content_area .gallery img");
	var $gallery_popup = $("#gallery_popup");
	var $close = $("#gallery_popup #wrap_image img.close");
	
	var $standard_image = $("#wrap_image").children('.showed').attr('src');
	
	$nav_left = $("#wrap_image .nav_left");
	$nav_right = $("#wrap_image .nav_right");
	
	// below is for centering the popup
	var $wrap_image = $("#wrap_image");
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;
	
	var wrap_image_width = $wrap_image.width();
	var wrap_image_height = $wrap_image.height();
	
	var center_popup = function() {
		$wrap_image.css({
			"top": windowHeight/2-wrap_image_height/2,
			"left": windowWidth/2-wrap_image_width/2
		});
	};
	
	var image_hover = function() {
		$image.mouseenter('slow', function(){
			$(this).css({
				"opacity": 1.0,
				"filter": "alpha(opacity=0)"
			});
		}).mouseleave('slow', function(){
			$(this).css({
				"opacity": 0.5,
				"filter": "alpha(opacity=50)"
			});
		});
	};
	
	var image_click = function() {
	
		$image.click(function(){	
			
			$(this).parent().addClass("current");
		
			var to_show_image = $(this).attr('src');
			
			$gallery_popup.fadeIn('slow', function(){
				$(this).children('#wrap_image').children('.showed').attr('src', to_show_image);
			}).css('height', $(document).height());
			
			// for arrows below on click if there is a previous or next image
			
			var previous_image = $(".current").prev().children().attr('src');
			var previous_section = $(".current").parent().prev().html();
			
			if(previous_image === undefined && previous_section === undefined) {
				$nav_left.fadeOut();
			} else {
				$nav_left.fadeIn();
			}
			
			var next_image = $(".current").next().children().attr('src');
			var next_section = $(".current").parent().next().html();
			
			if(next_image === undefined && next_section === undefined) {
				$nav_right.fadeOut();
			} else {
				$nav_right.fadeIn();
			}
			
			// center the popup image in any screen types of monitor
			
		});
	};
	
	var close_image_click = function() {
		$close.click(function(){
			$(".current").removeClass("current");
			$gallery_popup.fadeOut('slow', function(){
				$(this).children('#wrap_image').children('.showed').attr('src', $standard_image);
			});
		});
	};
	
	var image_navigate = function() {
		
		$nav_left.click(function() {
		
			var previous_image = $(".current").prev().children().attr('src');
			
			var previous_section = $(".current").parent().prev().html();
			
			var previous_section_image = $(".current").parent().prev().children('td:last').children().attr('src');
			
			if(previous_image !== undefined) {
				$(".current").removeClass('current').prev().addClass('current');
				
				$("#wrap_image .showed").fadeOut('slow', function(){
					$(this).attr('src', previous_image);
					$("#wrap_image .showed").fadeIn('slow');
				});
			} 
			
			if(previous_image === undefined && previous_section !== undefined) {
				
				$(".current").parent().prev().children('td:last').addClass('current');
				
				$("#wrap_image .showed").fadeOut('slow', function(){
					$(this).attr('src', previous_section_image);
					$("#wrap_image .showed").fadeIn('slow');
				});
			}
			
			// for arrows 
			
			if(previous_image === undefined &&  previous_section === undefined) {
				$(this).fadeOut();
			}
			
			var next_image = $(".current").next().children().attr('src');
			var next_section = $(".current").parent().next().html();
			
			if(next_image === undefined && next_section === undefined) {
				$nav_right.fadeOut();
			} else {
				$nav_right.fadeIn();
			}
			
		});
		
		$nav_right.click(function(){
			
			var next_image = $(".current").next().children().attr('src');
			
			var next_section = $(".current").parent().next().html();
			
			var next_section_image = $(".current").parent().next().children('td:first').children().attr('src');
			
			if(next_image !== undefined) {
				
				$(".current").removeClass('current').next().addClass('current');
				
				$("#wrap_image .showed").fadeOut('slow', function(){
					$(this).attr('src', next_image);
					$("#wrap_image .showed").fadeIn('slow');
				});
			} 
			
			if(next_image === undefined && next_section !== undefined) {
				$(".current").parent().next().children('td:first').addClass('current');
				
				$("#wrap_image .showed").fadeOut('slow', function(){
					$(this).attr('src', next_section_image);
					$("#wrap_image .showed").fadeIn('slow');
				});
			}
			
			// for arrows
			
			if(next_image === undefined && next_section === undefined) {
				$(this).fadeOut();
			}
			
			var previous_image = $(".current").prev().children().attr('src');
			var previous_section = $(".current").parent().prev().html();
			
			if(previous_image === undefined && previous_section === undefined) {
				$nav_left.fadeOut();
			} else {
				$nav_left.fadeIn();
			}
	
		});
	
	};
	
	return {
		center_popup: center_popup,
		image_hover: image_hover,
		image_click: image_click,
		close_image_click: close_image_click,
		image_navigate: image_navigate
	}

})()

// Execute Gallery Module Below

imageGalleryModule.center_popup();
imageGalleryModule.image_hover();
imageGalleryModule.image_click();
imageGalleryModule.close_image_click();
imageGalleryModule.image_navigate();

// loginModule below

var loginModule = (function() {

	var $login_form = $("#login_form");
	
	var $username = $("#username");
	var $password = $("#password");
	
	var inputs_focus = function() {
		
		$username.focus(function(){
			$(this).css({
				'border': '1px solid #000000', 
				'color': '#000000'
			});
		}).blur(function(){
			$(this).css({
				'border': '1px solid #ABADB3', 
				'color': '#5C5C5C'
			});
		});
		
		$password.focus(function(){
			$(this).css({
				'border': '1px solid #000000', 
				'color': '#000000'
			});
		}).blur(function(){
			$(this).css({
				'border': '1px solid #ABADB3', 
				'color': '#5C5C5C'
			});
		});
	};
	

	var login_form_submit = function() {
		
		$login_form.on('submit', function(){
			$("#login_form img").fadeIn();
			var form = $(this);
			$.post(form.attr('action'), form.serialize(), function(data){
				
				console.log(data);
				if(data.status) {
					$("#login_form img").fadeOut();
					window.location = data.admin_location;
				} else {
					$("#login_form .login_error").fadeIn(function(){
						$("#login_form img").fadeOut();
					});
				}
			}, "json");
			
			return false;
		});
		
	};
	
	return {
		inputs_focus: inputs_focus,
		login_form_submit: login_form_submit
	}
	
})()

// execute loginModuleBelow

loginModule.inputs_focus();
loginModule.login_form_submit();

// barangayModule below

var barangayModule = (function() {

	var home_barangay_link_click = function() {
		$(".home_barangay_link").click(function(){
			var link = $(this);
			$.get(link.attr('href'), link.serialize(), function(data){
				window.location = data.request_barangay;
			}, "json");
			return false;
		});
	};
	
	var load_barangay = function() {
		$('.barangay_link:first').trigger('click', [$("#request_barangay").val()]);
	};
	
	var link_click = function () {
		$('.barangay_link').click(function(event, action){
		
			var need_to_display;
			
			$(window).scrollTop(0);
			$('.current_display').fadeOut();
			$(this).parent().parent().find('.active').removeClass('active');
			
			
			if(action !== undefined) {
				need_to_display = action;
				$("#" + need_to_display).addClass('active');
			} else {
				need_to_display = $(this).attr('id');
				$(this).addClass('active');
			}
			
			$("." + need_to_display).fadeIn().addClass('current_display');
			
			return false;
		});
	}
	
	return {
		link_click: link_click,
		load_barangay: load_barangay,
		home_barangay_link_click: home_barangay_link_click
	}

})()

// Execute barangay module below 

barangayModule.link_click();
barangayModule.load_barangay();
barangayModule.home_barangay_link_click();

// accountant Module below

var accountantModule = (function() {

	var table_styles = function() {
		$("#content_area .accountant .accordion div table td:even").css({
			"font-weight": "bold"
		});
	};
	
	return {
		table_styles: table_styles
	}
	
})()

// execute  accountant Module below

accountantModule.table_styles();

// schools Module Below 

var schoolsModule = (function() {
	
	var table_styles = function() {
		$("#content_area .quipot_high_school .tabs div table td:even").css({
			"font-weight": "bold",
			"text-align": "right"
		});
	};
	
	return {
		table_styles: table_styles
	}
	
})()

// execute schools Module Below 

schoolsModule.table_styles();

// Special Services Modules Below

var specialServicesModule = (function() {
	
	var table_styles = function() {
		$("#content_area .special_services .tabs div table td:even").css({
			"font-weight": "bold"
		});
	};
	
	return {
		table_styles: table_styles
	}
	
})()

// execute Special Services Module Below

specialServicesModule.table_styles();

// Accordion Module below

var accordionModule = (function() {
	var accordion_content = function() {
		$( ".accordion" ).accordion();
	};
	
	return {
		accordion_content: accordion_content
	}
	
})()

// execute accordion Module below

accordionModule.accordion_content();

// Tabs Module Below

var tabsModule = (function() {
	
	var tabs_content = function() {
		$( ".tabs" ).tabs();
	};
	
	return {
		tabs_content: tabs_content
	}
	
})()

// execute Tabs Module Below

tabsModule.tabs_content();

// Hymn module below 

var hymnModule = (function() {
	
	var start_play = function() {
		
		var hymn = $("#hymn")[0];
		
		console.log(hymn);
		
		$(document).ready(function() {
			
			if(hymn !== undefined) {
				hymn.play();
			}
			
		});
		
	};
	
	return {
		start_play: start_play
	}
	
})()

// execute hymn module below 

//hymnModule.start_play();

// image dynamic module below 

var imageDynamicModule = (function() {
	
	var $image_popup = $("#image_popup");
	
	var windowWidth = document.documentElement.clientWidth;
	var windowHeight = document.documentElement.clientHeight;

	var image_popup_width = $image_popup.width();
	var image_popup_height = $image_popup.height();
	
	var center_image_popup = function() {
		$image_popup.css({
			"top": windowHeight/2-image_popup_height/2,
			"left": windowWidth/2-image_popup_width/2
		});
	};
	
	var close_image = function() {
		$(document).on('click', '.close_image', function(){
			$("#image_popup_container").fadeOut();
			return false;
		});
	};
	
	var view_image = function() {
		$(document).on('click', '.view_image', function() {
			var link = $(this);
			$.get(link.attr('href'), link.serialize(), function(data){
		
				$("#image_popup_container").fadeIn(function() {
					$(this).children().children('img').attr('src', data.image_src);
					$(this).children().children('h1').text(data.title);
					$(this).children().children('p').text(data.caption);
				});
				
			}, "json");
			
			return false;
		});
	};
	
	return {
		center_image_popup: center_image_popup,
		close_image: close_image,
		view_image: view_image
	}
	
})()

//  image dynamic module below 

//imageDynamicModule.center_image_popup();
imageDynamicModule.close_image();
imageDynamicModule.view_image();

var sitemapModule = (function() {
	
	var sitemap_etc = function() {
		$(".site_map a").attr("target", "_blank");
	};
	
	return {
		sitemap_etc: sitemap_etc
	}
	
})()

// execute sitemap Module 

//sitemapModule.sitemap_etc();

// navLinkModule Below 

var navLinkModule = (function() {

	var link_click = function() {
	
		// administration divs below  
		var $srs_div = $(document).find($("#srs")).html();
		
		// gallery divs below
		var $falls_div = $(document).find($("#falls")).html();
		var $caves_div = $(document).find($("#caves")).html();
		var $marks_div = $(document).find($("#marks")).html();
		var $spots_div = $(document).find($("#spots")).html();
		
		if($srs_div !== undefined) {
			$(document).ready(function(){
				$('html, body').animate({
					scrollTop: $('#' + $('.scroll_location').val()).offset().top
				}, 'slow');
			});
		} else if($falls_div !== undefined) {
			$(document).ready(function(){
				$('html, body').animate({
					scrollTop: $('#' + $('.scroll_location').val()).offset().top
				}, 'slow');
			});
		} else if($caves_div !== undefined) {
			$(document).ready(function(){
				$('html, body').animate({
					scrollTop: $('#' + $('.scroll_location').val()).offset().top
				}, 'slow');
			});
		} else if($marks_div !== undefined) {
			$(document).ready(function(){
				$('html, body').animate({
					scrollTop: $('#' + $('.scroll_location').val()).offset().top
				}, 'slow');
			});
		} else if($spots_div !== undefined) {
			$(document).ready(function(){
				$('html, body').animate({
					scrollTop: $('#' + $('.scroll_location').val()).offset().top
				}, 'slow');
			});
		} 
	};
	
	
	return {
		link_click: link_click
	}
	
})()

// execute navLinkModule Below 

navLinkModule.link_click();

// Search Module Below

var searchModule = (function() {
	
	var $outside_search_link = $("#search_area form a");
	var $outside_search_form = $("#outside_search"); 
	var $inside_search_form = $("#inside_search");
	var $search_results = $("#search_results");
	
	var search_input = function() {
		
		var $search_something = $("#search_something");
		
		$search_something.focus(function(){
			$(this).css({
				'border': '1px solid #000000', 
				'color': '#000000'
			});
		}).blur(function(){
			$(this).css({
				'border': '1px solid #ABADB3', 
				'color': '#5C5C5C'
			});
		});
		
	};
	
	var search_outside = function() {
		
		$outside_search_link.click(function(){
			$outside_search_form.trigger('submit');
			return false;
		});
		
		$outside_search_form.on('submit', function(){
			return true;
		});
	};
	
	var search_inside = function() {
		$inside_search_form.on('submit', function(){
			$search_results.fadeOut().fadeIn();
			return false;
		});
	};
	
	return {
		search_input: search_input,
		search_outside: search_outside,
		search_inside: search_inside
	}
	
})()

// execute search module below

searchModule.search_input();
searchModule.search_outside();
//searchModule.search_inside();

// Forgot Password Module Below 

var forgotPasswordModule = (function() {
	
	var $retrieve_password_form = $("#retrieve_password_form");
	
	var retrieve_submit = function() {
		$retrieve_password_form.on('submit', function() {
			$("#forgot_error").fadeOut(function(){
				$("#blue_loader").fadeIn(function(){
					$(this).fadeOut(function(){
						$("#forgot_error").fadeIn();
					}); 
				});
			});
			return false;
		});
	};
	
	var input_focus = function() {
		
		$("#forgot_email_add").focus(function(){
			$(this).css({
				'border': '1px solid #000000', 
				'color': '#000000'
			});
		}).blur(function(){
			$(this).css({
				'border': '1px solid #ABADB3', 
				'color': '#5C5C5C'
			});
		});
		
	};
	
	return {
		retrieve_submit: retrieve_submit,
		input_focus: input_focus
	}
	
})()

// Execute Forgot Password Module Below 

forgotPasswordModule.retrieve_submit();
forgotPasswordModule.input_focus();

// tags module below 

var tagsModule = (function() {
	
	page_tags_fom = $(".page_tags");
	
	var add_page_tag = function() {
		
		$(page_tags_fom).ajaxForm({
			dataType: 'json',
			forceSync: true,
			beforeSubmit: add_page_tags,
			success: add_page_tag_status
		});
		
		function add_page_tags() {
			$(".submit_button").val("Saving..");
			$(".page_tags_status").fadeOut();
			$("img.blue_loader").fadeIn();
			return true;
		}
		
		function add_page_tag_status(data) {
			if(data.status) {
				$(".page_tags_status").fadeIn().text("Search data saved").removeClass("error").addClass("success");
				$(".submit_button").val("Save");
				$("img.blue_loader").fadeOut();
			} else {
				$(".page_tags_status").fadeIn().text("Search data not saved").removeClass("success").addClass("error");
				$(".submit_button").val("Save");
				$("img.blue_loader").fadeOut();
			}
		}
	};	
	
	return {
		add_page_tag: add_page_tag
	}
	
})()

// execute tags module below 

tagsModule.add_page_tag();

















































