$(function(){

	var listPro = $('div.product div.list-product ul li');
		product = $('div.view div.train div.pro');
		currentList = 0;
		currentLink = 0;

	action = function(n){
		var list = $('div.product div.list-product ul li')
		list.eq(currentList).removeClass('active');
		list.eq(n).addClass('active');
		currentList=n;
	}

	activeLink = function(m){
		var link = $('div.left-menu ul li')
		link.eq(currentLink).removeClass('activelink');
		link.eq(m).addClass('activelink');
		currentLink=m;
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
/* slide ---------------------------- */
var train = $('section.product-detail div.info-pro div.slide-pro div.slideshow div.train'),
		//lists = $('div.slideshow ul.btns li')
		currentPic = 0,
		autoPlayIv = false;

	go2slide = function(n){
		//if(n>lists.length-1) n=0;
		//if(n<0) n = lists.length-1;
		train.animate({
			left:-450*n
		},500,'ease-in-out');
		//lists.eq(currentPic).removeClass('current');
		//lists.eq(n).addClass('current');
		currentPic=n;
	
	}

	$('section.product-detail div.info-pro div.slide-pro div.slideshow .next').click(nextSlide = function(){
		go2slide(currentPic+1);
	});





});

