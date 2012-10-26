$(function(){
/* Product Page
 ----------------------------------------------------------- */
	var listPro = $('div.product div.list-product ul li');
		currentList = 0;
		viewPro = $('div.product div.view-pro div.scroll div.pro');

	action = function(n){
		var list = $('div.product div.list-product ul li')
		list.eq(currentList).removeClass('menu-item-120');
		list.eq(n).addClass('menu-item-120');
		currentList=n;
	}

	listPro.mouseover(function(){
			indexListPro = ($(this).index());
			viewPro.css({
					opacity:0
				});
			indexViewPro = viewPro.eq(indexListPro);
			action( $(this).index() );
			indexViewPro.animate({
				opacity: 1,
			}, 200);

	});
/* Detail Page
 ----------------------------------------------------------- */
	var listDetail = $('section.product-detail div.info-pro div.slide-pro div.slideshow-pro div.scroll div.detail');
		viewDetail = $('div.img-desc div.train div.pro');
		nameDetail = $('div.name-desc div.train div.pro')
		descDetail = $('div.desc div.train div.pro')
		currentDet = 0;

	currentPic = function(n){
		var listPic = $('section.product-detail div.info-pro div.slide-pro div.slideshow-pro div.scroll > div')
		listPic.eq(currentDet).removeClass('current-img');
		listPic.eq(n).addClass('current-img');
		currentDet=n;
	}

	listDetail.click(function(){
		indexListDetail = ($(this).index());
		nameDetail.css({
					opacity:0
				});
		viewDetail.css({
			opacity:0
		});
		descDetail.css({
			opacity:0
		});
		indexNameDetail = nameDetail.eq(indexListDetail);
		indexViewDetail = viewDetail.eq(indexListDetail);
		indexDescDetail = descDetail.eq(indexListDetail);
		currentPic( $(this).index() );
		indexNameDetail.css({
			opacity: 1,
		});
		indexViewDetail.css({
			opacity: 1,
		});
		indexDescDetail.css({
			opacity: 1,
		});
	}); 

	var train = $('div.slideshow-pro div.scroll'),
		lists = $('section.product-detail div.info-pro div.slide-pro div.slideshow-pro div.scroll > div')
		currentSlide = 0;

	go2slide = function(n){
		if(n>lists.length-1) n=0;
		if(n<0) n = lists.length-1;
		train.animate({
			left:-112*n
		},1000);
		currentSlide=n;
	}

	$('section.product-detail div.info-pro div.slide-pro div.slideshow-pro div.next').click(nextSlide = function(){
		go2slide(currentSlide+2);
	});
	$('section.product-detail div.info-pro div.slide-pro div.slideshow-pro div.previous').click(preSlide = function(){
		go2slide(currentSlide-2);
	});

/* Main Menu ************************/
	var liList = $('nav.mainmenu li');

	liList.mouseover(function(){
		$('ul',this).animate({
			top:-35
		},400);
	});

	liList.mouseout(function(){
		$('ul',this).animate({
			top:-500
		},1500);
	});
});