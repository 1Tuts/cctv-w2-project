$(function(){

	var list = $('div.main nav ul li li');
		li = $('div.main nav ul li a');
		that = $('div.view div.train div.pro img'); 

		currentSlide = 0;


	li.mouseover(function(){
		list.animate({
			height:40
		},300,'ease-in-out');
	});

	li.mouseout(function(){
		list.animate({
			height:0
		},300,'ease-in-out');
	});

	action = function(n){
		$('div.product div.list-product ul li').eq(currentSlide).removeClass('active');
		$('div.product div.list-product ul li').eq(n).addClass('active');
		currentSlide=n;
	}

	$('div.product div.list-product ul li').mouseover(function(){
		action( $(this).index() );
	});


	var listPro = $('div.product div.list-product ul li');
	currentList = 0;

	listPro.mouseover(function(){
		index = ($(this).index());
		switch(index)
		{
			case 0:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img1').animate({
					opacity:'1'
				},100);
				break;
			case 1:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img2').animate({
					opacity:'1'
				},100);
				break;
			case 2:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img3').animate({
						opacity:'1'
				},100);
				break;
			case 3:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img4').animate({
					opacity:'1'
				},100);
				break;
			case 4:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img5').animate({
					opacity:'1'
				},100);
				break;
			case 5:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img6').animate({
					opacity:'1'
				},100);
				break;
			case 6:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img7').animate({
					opacity:'1'
				},100);
				break;
			case 7:
				$('div.view div.train div.pro').animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img8').animate({
					opacity:'1'
				},100);
				break;
		}
	});

});

