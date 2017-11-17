jQuery(document).ready(function ($) {
	var offsetHeight = 60;
	var $window = $(window);
	var timestamp = Date.now().toString();
	var headerHeight = $('.header').height();
	
	checkWidth();
	
	// Bind event listener
	$(window).resize(checkWidth);
	
	// Append links to prevent caching
	$('.place-menu ul li > a').each(function() {
		$(this).attr('data-target', $(this).attr('data-target') + '?i=' + timestamp);
	});
	
	// Append links to prevent caching
	$('.teacher-menu ul li > a').each(function() {
		$(this).attr('data-target', $(this).attr('data-target') + '?i=' + timestamp);
	});
	
	// Load place teacher data
	loadPlaceData($('.place-menu ul li > a').attr('data-target'));
	
	// Load default teacher data
	loadTeacherData($('.teacher-menu ul li > a').attr('data-target'));
	
	// Set hide text
	$('.show-comment').each(function(e) {
		$(this).text(showCommentText);
	});
	
	// Toggle show/hide text
	/*$(".show-comment[data-toggle='collapse']").click(function() {
		if ($(this).text() == showCommentText) {
			$(this).text(hideCommentText);
		} else {
			$(this).text(showCommentText);
		}
	});*/
	
	// Resize height of container to prevent overlappng
	/*$(window).resize(function() {
		var placeLoader = $('#place-loader');
		placeLoader.height('auto');
		var autoPlaceHeight = placeLoader.css('height', 'auto').height();
		placeLoader.height(autoPlaceHeight);

		var teacherLoader = $('#teacher-loader');
		teacherLoader.height('auto');
		var autoTeacherHeight = teacherLoader.css('height', 'auto').height();
		teacherLoader.height(autoTeacherHeight);
	});*/
	
	// Add shadow to menu
	$(window).scroll(function () {
		adjustMenu();
	});
	
	// Closes the responsive menu on item click
	$('.navbar-collapse ul li a').click(function() {
		$('.navbar-toggle:visible').click();
	});
	
	// Highlight the top nav as scrolling occurs
	/*$('body').scrollspy({
		offset: offsetHeight, 
		target: '.navbar-fixed-top'
	});*/
	
	// Scroll to section
	$('a.page-scroll').bind('click', function(e) {
		var $anchor = $(this);
		var page = $('html, body');
		
		page.on('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove', function(){
			page.stop();
		});
		
		page.stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top - (offsetHeight - 2)
		}, 1500, 'easeOutExpo', function() {
			page.off('scroll mousedown wheel DOMMouseScroll mousewheel keyup touchmove');
		});
		
		// Append anchor to url
		/*page.stop().animate({
			scrollTop: $(anchor).offset().top
		}, 1000, 'easeInOutExpo', function() {
			window.location.hash = anchor;
		});*/
		
		e.preventDefault();
	});
	
	// Load place info
	$('.place-menu ul li > a').click(function(e) {
		var link = $(this);
		
		// Load data if link is not active
		if(!link.parent().hasClass('active')) {
			link.parent().addClass('active').siblings().removeClass('active');
			
			// Hide div and load data
			$('#place-loader').stop().animate({ opacity: 0 }, 500, function() {
				loadPlaceData(link.attr('data-target'));
			});
		}
		
		e.preventDefault();
	});
	
	// Loade teacher info
	$('.teacher-menu ul li > a').click(function(e) {
		var link = $(this);
		
		// Load data if link is not active
		if(!link.parent().hasClass('active')) {
			$('.teacher-menu .left-nav li').siblings().removeClass('active');
			//link.parent().addClass('active').siblings().removeClass('active');
			link.parent().addClass('active');
			
			// Hide div and load data
			$('#teacher-loader').stop().animate({ opacity: 0 }, 500, function() {
				loadTeacherData(link.attr('data-target'));
			});
		}
		
		e.preventDefault();
	});
	
	// Sliders
	$('#place-slider').carousel({ 
		interval: false
	});
	
	$('#comments-slider').carousel({ 
		interval: false
	});
	
	var commentSlider = $('#comments-slider');
	var currentHeight;
	
	// On slide
	commentSlider.on('slide.bs.carousel', function() {
		// Get Default Height
		currentHeight = commentSlider.height();
	});
	
	// On slide complete
	commentSlider.on('slid.bs.carousel', function() {
		//var currentHeight = commentSlider.height();
		// Get auto height
		var autoHeight = commentSlider.css('height', 'auto').height();
		// Reset to default height
		commentSlider.height(currentHeight);
		// Animate
		commentSlider.stop().animate({ height: autoHeight }, 500, function() {
			// Re-height
			commentSlider.height('auto');
		});
	});
	
	// Clone slider items
	$('.carousel-showthree .item').each(function() {
		var itemToClone = $(this);
		
		for (var i=1; i<3; i++) {
			itemToClone = itemToClone.next();
			
			// wrap around if at end of item collection
			if (!itemToClone.length) {
				itemToClone = $(this).siblings(':first');
			}
			
			// grab item, clone, add marker class, add to collection
			itemToClone.children(':first-child').clone()
				.addClass('cloneditem-'+(i))
				.appendTo($(this));
		}
	});
	
	// Load place info
	function loadPlaceData(target) {
		var placeLoader = $('#place-loader');
		
		//console.log(target);
		
		// Get Default Height
		var currentHeight = placeLoader.height();
		
		placeLoader.load(target, function() {
			// Get auto height
			var autoHeight = placeLoader.css('height', 'auto').height();
			// Reset to default height
			placeLoader.height(currentHeight);
			// Animate
			placeLoader.stop().animate({ height: autoHeight, opacity:1 }, 500, function() {
				// Re-height
				placeLoader.height('auto');
			});
		});
	}
	
	// Loade teacher info
	function loadTeacherData(target) {
		var teacherLoader = $('#teacher-loader');
		
		//console.log(target);
		
		// Get Default Height
		var currentHeight = teacherLoader.height();
		
		$('#teacher-loader').load(target, function() {
			// Set hide text
			$('.show-bio').each(function(e) {
				$(this).text(showBioText);
			});
			
			//var currentHeight = teacherLoader.height();
			// Get auto height
			var autoHeight = teacherLoader.css('height', 'auto').height();
			// Reset to default height
			teacherLoader.height(currentHeight);
			// Animate
			teacherLoader.stop().animate({ height: autoHeight, opacity:1 }, 500, function() {
				// Re-height
				teacherLoader.height('auto');
			});
			
			// Toggle show/hide text
			$(".show-bio[data-toggle='collapse']").click(function() {
				if ($(this).text() == showBioText) {
					$(this).text(hideBioText);
				} else {
					$(this).text(showBioText);
				}
			});
			
			// Scroll to top on hide
			$('#bio').on('hide.bs.collapse', function (e) {
				$('html, body').stop().animate({
					scrollTop: $('#teachers').offset().top - (offsetHeight - 2)
				}, 700, 'easeOutExpo');
			});
			
			$('.collapse-comment').on('hide.bs.collapse', function (e) {
				$('html, body').stop().animate({
					scrollTop: $('#comments').offset().top - (offsetHeight - 2)
				}, 700, 'easeOutExpo');
			});
		});
	}
	
	// Set offset
	function checkWidth() {
		//console.log($('.navbar').height());
		var windowsize = $window.width();
		
		if ((windowsize >= 768) && ($('.navbar').height() >= 120)) {
			offsetHeight = 120;
		} else {
			offsetHeight = 60;
		}
		
		$('body').css('padding-top', offsetHeight);
		$('body').attr('data-offset', offsetHeight);
		
		$('body').scrollspy({
			offset: offsetHeight, 
			target: '.navbar-fixed-top'
		});
		
		adjustMenu();
	}
	
	function adjustMenu() {
		if ($('.navbar').offset().top >= headerHeight - offsetHeight) {
			$('.navbar-fixed-top').addClass('navbar-scroll');
		} else {
			$('.navbar-fixed-top').removeClass('navbar-scroll');
		}
	}
});