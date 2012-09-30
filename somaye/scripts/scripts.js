$(function(){

	var list = $('nav.mainmenu ul li li');
		li = $('nav.mainmenu ul');
		listPro = $('div.product div.list-product ul li');
		product = $('div.view div.train div.pro');
		currentList = 0;


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
		var list = $('div.product div.list-product ul li')
		list.eq(currentList).removeClass('active');
		list.eq(n).addClass('active');
		currentList=n;
	}

	listPro.mouseover(function(){
		index = ($(this).index());
		switch(index)
		{
			case 0:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img1').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 1:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img2').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 2:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img3').animate({
						opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 3:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img4').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 4:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img5').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 5:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img6').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 6:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img7').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
			case 7:
				product.animate({
					opacity:'0'
				},100);
				$('div.view div.train div#img8').animate({
					opacity:'1'
				},100);
				action( $(this).index() );
				break;
		}
	});

});

