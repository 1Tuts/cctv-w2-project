$(function(){
	var listpro = $('section.product-box div.product ul li'),
		slide = $('section.product-box div.product div.view div.preview'),
		train = $('section.product-box div.product div.view div.preview div.train'),
		current = 0;

	goToPic = function(n){
		if(n > listpro.length-1) n=0;
		if(n < 0) n = listpro.length-1;
		train.animate({
			left:(-770*n)	
		},800,'ease-in');
		listpro.eq(current).removeClass('active');
		listpro.eq(n).addClass('active');
		current = n;
	}

	listpro.mouseover(function(){
		goToPic($(this).index());	
	});

	

})