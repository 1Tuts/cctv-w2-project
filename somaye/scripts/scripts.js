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

	activeLink = function(m){ // Kar Nakard !!!!!!!!!!!
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
var listDetail = $('section.product-detail div.info-pro div.slide-pro div.slideshow div.train div.detail');
	viewDetail = $('div.img-desc div.train div.pro');
	nameDetail = $('div.name-desc div.train div.pro')
	descDetail = $('div.desc div.train div.pro')
	currentDet = 0;


	current = function(n){
		var listPic = $('section.product-detail div.info-pro div.slide-pro div.slideshow div.train > div')
		listPic.eq(currentDet).removeClass('current');
		listPic.eq(n).addClass('current');
		currentDet=n;
	}

listDetail.click(function(){
		index = ($(this).index());
		switch(index)
		{
			case 0:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img1').css({
					opacity:'1'
				});
				$('div.name-desc div.train div#name1').css({
					opacity:'1'
				});
				$('div.desc div.train div#desc1').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 1:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img2').css({
					opacity:'1'
				});
				$('div.name-desc div.train div#name2').css({
					opacity:'1'
				});
				$('div.desc div.train div#desc2').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 2:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img3').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name3').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc3').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;


				case 3:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img4').css({
					opacity:'1'
				});
				$('div.name-desc div.train div#name4').css({
					opacity:'1'
				});
				$('div.desc div.train div#desc4').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 1:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img2').css({
					opacity:'1'
				});
				$('div.name-desc div.train div#name2').css({
					opacity:'1'
				});
				$('div.desc div.train div#desc2').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 2:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img3').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name3').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc3').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 3:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img4').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name4').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc4').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 4:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img5').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name5').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc5').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 5:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img6').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name6').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc6').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 6:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img7').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name7').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc7').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 7:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img8').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name8').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc8').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
			case 8:
				viewDetail.css({
					opacity:'0'
				});
				nameDetail.css({
					opacity:'0'
				});
				descDetail.css({
					opacity:'0'
				});
				$('div.img-desc div.train div#img9').css({
						opacity:'1'
				});
				$('div.name-desc div.train div#name9').css({
						opacity:'1'
				});
				$('div.desc div.train div#desc9').css({
					opacity:'1'
				});
				current( $(this).index() );
				break;
		}
	});
});