// admin navArea below

var navArea = (function() {
	
	var close_dropdowns = function() {
		$(".active_drop").fadeOut().removeClass('active_drop');
	};
	
	var nav_dropdown = function() {
		$('.has_dropdown').mouseenter(function(){
			var need_to_drop = $(this).attr('id');
			$("." + need_to_drop).slideDown('fast').addClass('active_drop');
		});
	}; 
	
	var exit_drop = function() {
		$(document).on('click', function(e){
			if($(e.target).is('.is_dropdown, .is_dropdown *:not(.is_dropdown li a)')) {
				return false;
			} else {
				close_dropdowns();
			}
		});
	};
	
	return {
		nav_dropdown: nav_dropdown,
		exit_drop: exit_drop
	}
	
})()

// execute admin nav area below

navArea.nav_dropdown();
navArea.exit_drop();

// Check Box Module Below 

var checkboxModule = (function(){
	
	var $head_check = $(".head_check");
	var $sub_check = $(".sub_check");
	
	jQuery.fn.extend({
		check: function() {
			return this.each(function() { this.checked = true; });
		},
		uncheck: function() {
			return this.each(function() { this.checked = false; });
		}
	});
	
	var checkbox_check = function(){
		$head_check.click(function(){
			if($('input.head_check').is(':checked')) {
				$('input.sub_check').check();
			} else {
				$('input.sub_check').uncheck();
			}
		});
		
		$sub_check.click(function(){
			if($('input.sub_check:checked').length === $('input.sub_check').length) {
				$('input.head_check').check();
			} else {
				$('input.head_check').uncheck();
			}
		});
	
	};
	
	return {
		checkbox_check: checkbox_check
	}
	
})()

// Execute checkbox module below 

checkboxModule.checkbox_check();

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

// upload click module below 

var uploadClickModule = (function() {
	
	var on_upload_click = function() {
		
		$(document).ready(function() {
			if($(".upload_image").is(':checked')) {
				$(".upload_area").slideDown('slow');
			}
		});
		
		$(".upload_image").click(function() {
			if($(this).is(':checked')) {
				$(".upload_area").slideDown('slow');
			} else {
				$(".upload_area").slideUp('slow');
			}
		});
		
	}; 

	return {
		on_upload_click: on_upload_click
	}

})()

// execute upload click module below 

uploadClickModule.on_upload_click(); 

// News Module Below

var newsModule = (function() {

	jQuery.fn.extend({
		check: function() {
			return this.each(function() { this.checked = true; });
		},
		uncheck: function() {
			return this.each(function() { this.checked = false; });
		}
	});
	
	var execute_news_tab = function() {
		$(".news .tabs").tabs({active: $("#news_current_tab").val()});
	};
	
	var create_upload_image = function() {
		
		$("#news_form .news_upload_button").click(function(){
		
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
				
				var add_form = $("#news_form");
			
				add_form.attr('action', data.upload_link);
			
				$(add_form).ajaxForm({
					dataType: 'json',
					forceSync: true,
					beforeSubmit: add_news_data,
					uploadProgress: progress,
					success: add_news_status
				});
			
				add_form.trigger('submit');
			
			}, "json");
			
			
			function add_news_data() {
				
				if( $("#userfile").val() == "" || $("#image_title").val() == "" || $("#image_caption").val() == "" ) {
					
					alert("Pls. select image to upload, image title and caption must have a value to proceed upload");
					
					return false;
					
				} else {
					
					var c = confirm("Are you sure to upload this image?");
				
					if(c === true) {
					
						$(".progressbar").fadeIn().progressbar({
							value: 0
						});
						
						return true;
					} else {
						return false;
					}
				}
				
			}
		
			function progress(event, position, total, percentComplete) {
				$( ".progressbar" ).progressbar({
					value: percentComplete
				});
				
				$(".status_num").html(percentComplete + "%");
			}
			
			function add_news_status(data) {
				if(data.status) {
				
					$(".progressbar").fadeOut();
					window.location = data.redirect;
					
				} else {
					alert(data.errors);
				}
			}
			
			return false;
		});
	
	};  // end var create_upload_image function

	var update_upload_image = function() {
		
		$("#news_update_form .news_upload_button").click(function(){
	
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
				
				var update_form = $("#news_update_form");
			
				update_form.attr('action', data.upload_link);
				
				$(update_form).ajaxForm({
					dataType: 'json',
					forceSync: true,
					beforeSubmit: update_news_data,
					uploadProgress: update_progress,
					success: update_news_status
				});
				
				update_form.trigger('submit');
				
			}, "json");
			
			function update_news_data() {
				
				if( $("#update_userfile	").val() == "" || $("#update_image_title").val() == "" || $("#update_image_caption").val() == "" ) {
					
					alert("Pls. select image to upload, image title and caption must have a value to proceed upload");
					
					return false;
					
				} else {
					
					var c = confirm("Are you sure to upload this image?");
				
					if(c === true) {
					
						$(".progressbar").fadeIn().progressbar({
							value: 0
						});
						
						return true;
					} else {
						return false;
					}
				}
				
			} // end update_news_data function
			
			function update_progress(event, position, total, percentComplete) {
				$( ".progressbar" ).progressbar({
					value: percentComplete
				});
				
				$(".status_num").html(percentComplete + "%");
			}
			
			function update_news_status(data) {
				if(data.status) {
					$(".progressbar").fadeOut();
					window.location = data.redirect;
				} else {
					alert(data.errors);
				}
			}
		
			return false;
			
		});
		
	}; // end var update_upload_image function
	
	var delete_news = function(){

		var delete_form = $("#news_list_form");
		
		$(delete_form).ajaxForm({
			dataType: 'json',
			forceSync: true,
			beforeSubmit: delete_news_data,
			success: delete_news_status
		});
		
		function delete_news_data() {
		
			if($("input.sub_check:checked").length === 0) {
				alert("Select news to be deleted..");
				return false;
			} else {
				var c = confirm("Are you sure to delete the selected news?");
				
				if(c === true) {

					return true;
				} else {
					return false;
				}
			}
		
		}
		
		function delete_news_status(data) {
		
			if(data.status) {
				alert("Successfully Deleted");
			} else {
				alert("Not Deleted");
			}
			
			window.location = data.admin_redirect;
			
		}

	};
	
	return {
		execute_news_tab: execute_news_tab,
		create_upload_image: create_upload_image,
		update_upload_image: update_upload_image,
		delete_news: delete_news
	}
	
})()

// Execute News Module Below 

newsModule.execute_news_tab();
newsModule.create_upload_image();
newsModule.update_upload_image();
newsModule.delete_news();


// Articles Module Below 

var articlesModule = (function() {
	
	var execute_articles_tab = function() {
		$(".articles .tabs").tabs({active: $("#articles_current_tab").val()});
	};
	
	var delete_article = function(){

		var delete_form = $("#articles_list_form");
		
		$(delete_form).ajaxForm({
			dataType: 'json',
			forceSync: true,
			beforeSubmit: delete_article_data,
			success: delete_article_status
		});
		
		function delete_article_data() {
		
			if($("input.sub_check:checked").length === 0) {
				alert("Select article to be deleted..");
				return false;
			} else {
				var c = confirm("Are you sure to delete the selected article?");
				
				if(c === true) {

					return true;
				} else {
					return false;
				}
			}
		
		}
		
		function delete_article_status(data) {
		
			if(data.status) {
				alert("Successfully Deleted");
			} else {
				alert("Not Deleted");
			}
			
			window.location = data.admin_redirect;
		}
	};
	
	var create_upload_image = function() {
		
		$("#article_form .article_upload_button").click(function(){
	
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
				
				var add_form = $("#article_form");
			
				add_form.attr('action', data.upload_link);
			
				$(add_form).ajaxForm({
					dataType: 'json',
					forceSync: true,
					beforeSubmit: add_article_data,
					uploadProgress: progress,
					success: add_article_status
				});
			
				add_form.trigger('submit');
			
			}, "json");
			
			
			function add_article_data() {
				
				if( $("#userfile").val() == "" || $("#image_title").val() == "" || $("#image_caption").val() == "" ) {
					
					alert("Pls. select image to upload, image title and caption must have a value to proceed upload");
					
					return false;
					
				} else {
					
					var c = confirm("Are you sure to upload this image?");
				
					if(c === true) {
					
						$(".progressbar").fadeIn().progressbar({
							value: 0
						});
						
						return true;
					} else {
						return false;
					}
				}
				
			}
		
			function progress(event, position, total, percentComplete) {
				$( ".progressbar" ).progressbar({
					value: percentComplete
				});
				
				$(".status_num").html(percentComplete + "%");
			}
			
			function add_article_status(data) {
				if(data.status) {
				
					$(".progressbar").fadeOut();
					window.location = data.redirect;
					
				} else {
					alert(data.errors);
				}
			}
			
			return false;
		});
	
	};  // end var create_upload_image function
	
	var update_upload_image = function() {

		$("#articles_update_form .article_upload_button").click(function(){
	
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
				
				var update_form = $("#articles_update_form");
			
				update_form.attr('action', data.upload_link);
				
				$(update_form).ajaxForm({
					dataType: 'json',
					forceSync: true,
					beforeSubmit: update_article_data,
					uploadProgress: update_progress,
					success: update_article_status
				});
				
				update_form.trigger('submit');
				
			}, "json");
			
			function update_article_data() {
				
				if( $("#update_userfile	").val() == "" || $("#update_image_title").val() == "" || $("#update_image_caption").val() == "" ) {
					
					alert("Pls. select image to upload, image title and caption must have a value to proceed upload");
					
					return false;
					
				} else {
					
					var c = confirm("Are you sure to upload this image?");
				
					if(c === true) {
					
						$(".progressbar").fadeIn().progressbar({
							value: 0
						});
						
						return true;
					} else {
						return false;
					}
				}
				
			} // end update_news_data function
			
			function update_progress(event, position, total, percentComplete) {
				$( ".progressbar" ).progressbar({
					value: percentComplete
				});
				
				$(".status_num").html(percentComplete + "%");
			}
			
			function update_article_status(data) {
				if(data.status) {
					$(".progressbar").fadeOut();
					window.location = data.redirect;
				} else {
					alert(data.errors);
				}
			}
		
			return false;
			
		});
	
	}; // end 
	
	return {
		execute_articles_tab: execute_articles_tab,
		delete_article: delete_article,
		create_upload_image: create_upload_image,
		update_upload_image: update_upload_image
	}
	
})()

// Execute Articles Module Below

articlesModule.execute_articles_tab();
articlesModule.delete_article();
articlesModule.create_upload_image();
articlesModule.update_upload_image();

// imageManipulation Module Below

var imageManipulationModule = (function() {
	
	var hover_image_container = function() {
		
		// below is for create
		$(document).on("mouseenter", ".image_container", function(){
			$(this).children('.delete_image').fadeIn();
		});
		
		$(document).on("mouseleave", ".image_container", function(){
			$(this).children('.delete_image').fadeOut();
		});
		
		// below is for update
		$(document).on("mouseenter", ".image_container", function(){
			$(this).children('.set_image_for_delete').fadeIn();
		});
		
		$(document).on("mouseleave", ".image_container", function(){
			$(this).children('.set_image_for_delete').fadeOut();
		});
	
	};
	
	var delete_image = function() {
	
		$(document).on("click", ".delete_image", function(){
			
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
		
				if(data.status) {
				
					link.parent().fadeOut();
					
				} else {
					alert("Image deletion failed");
				}
				
			}, "json");
			
			return false;
			
		});
	
	};
	
	var close_image = function() {
		$(".close_image").click(function(){
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
	
	var set_image_for_delete = function() {	
		
		$(document).on("click", ".set_image_for_delete", function(){
			
			var link = $(this);
			
			$.get(link.attr('href'), link.serialize(), function(data){
		
				if(data.status) {
				
					link.parent().fadeOut();
					
				} else {
					alert("Image deletion failed");
				}
				
			}, "json");
			
			return false;
			
		});
	};
	
	return {
		hover_image_container: hover_image_container,
		delete_image: delete_image,
		close_image: close_image,
		view_image: view_image,
		set_image_for_delete: set_image_for_delete
	}
	
})()

// execute imageManipulation Module Below 

imageManipulationModule.hover_image_container();
imageManipulationModule.delete_image();
imageManipulationModule.close_image();
imageManipulationModule.view_image();
imageManipulationModule.set_image_for_delete();















