$(function(){

	var listPro = $('div.product div.list-product ul li');
		product = $('div.view div.train div.pro');
		currentList = 0;


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
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img1').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 1:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img2').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 2:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img3').css({
						opacity:'1'
				});
				action( $(this).index() );
				break;
			case 3:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img4').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 4:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img5').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 5:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img6').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 6:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img7').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
			case 7:
				product.css({
					opacity:'0'
				});
				$('div.view div.train div#img8').css({
					opacity:'1'
				});
				action( $(this).index() );
				break;
		}
	});

});

