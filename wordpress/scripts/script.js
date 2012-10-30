// Zepto/jQuery fadeLoop plugin for fade slide show effects
(function($){
	$.extend($.fn,{
		fadeLoop :function(options){

			options=$.extend({
				duration : 2500,
				delay : 2000,
				startIndex : -1,
				fadeFirstImage : true
			},options);

			var nextPic,
				pics    =this,
				indx    =options.startIndex,
				plen    =this.length,
				fadeIn  ={opacity:1},
				fadeOut ={opacity:0},
				ease = !!window.Zepto ? 'ease-in-out' : 'swing';

			pics.css(fadeOut);
			options.fadeFirstImage || pics.eq(0).css(fadeIn);

			(nextPic=function(){
				
				pics.eq(indx).css({zindex:-3},400).animate({
					'z-index':'-3',
					opacity:0,
					//fadeOut
					},options.duration,ease);
				indx=indx<plen-1?indx+1:0;	
				pics.eq(indx).animate({
					'z-index':'1',
					opacity:1,
//					fadeIn,
					},options.duration,ease,function(){
						setTimeout(nextPic,options.delay);
				});
			})();
		}
	});
})($)

/****************************** VALIDATE INPUT *******************/
	function validateEmail(str){
		var emailPattern = /^[a-z0-9+_%.-]+@(?:[a-z0-9-]+\.)+[a-z]{2,6}$/i ;
		return emailPattern.test(str);
  	}
	
	function validateText(str,len){
		return str.length >= len;
	}

/****************************** VALIDATE EMAIL *******************/

$(function(){
	var BgImg1 = $('.slideshow .backimg  #bgimg1'),
		BgImg2 = $('.slideshow .backimg  #bgimg2'),
		BgImg3 = $('.slideshow .backimg  #bgimg3'),
		currentList = 0,
		list = $('div.content-pr nav.content-pr-nav ul li'),
		product='gallery',
		listtopmenu = $('nav.content-pr-nav ul li'),
		gallery=$('nav.content-pr-nav div.gallery'),
		clicka = $('section.product-detail div.info-pro div.desc-pro div.desc a.btnlink');
		
		clicka.click(function(){
			$('section.product-detail').removeClass('btnlink').addClass('dispaly-none');
			$('div.mazaya').removeClass('mazaya').addClass('dispaly-block');
		});
		
		
		listtopmenu.click(function(){
			topclick = ($(this).index());
			if(topclick==0){
				$('div#mz').addClass('dispaly-block').removeClass('dispaly-none');
				$('div#gallery').addClass('gallery').removeClass('dispaly-block');
				$('div#model').removeClass('dispaly-block').addClass('model');
			}
			if(topclick==1){
				$('div#mz').addClass('dispaly-none').removeClass('dispaly-block');
				$('div#gallery').removeClass('gallery').addClass('dispaly-block');
				$('div#model').removeClass('dispaly-block').addClass('model');
			}
			if(topclick==2){
				$('div#mz').addClass('dispaly-none').removeClass('dispaly-block');
				$('div#gallery').addClass('gallery').removeClass('dispaly-block');
				$('div#model').removeClass('model').addClass('dispaly-block');
			}
		});
/****************************** HOME PAGE *************************
	BgImg1.click(function(){
		window.open("./test3.php","_self");
	});
		
	BgImg2.click(function(){
		window.open("./demo2.php","_self");
	});

	BgImg3.click(function(){
		window.open("./body-detail-product.php","_self");
	});
/****************************** HOME PAGE *************************/

/****************************** SIGN IN **************************/
	$('#frmsign-in').submit(function(){
		var target, err = false;

		target = $('#email');
		if( validateEmail(target.val()) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#pas');
		if( validateText(target.val(),6) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		return !err;

	});
/****************************** SIGN IN **********************/
/****************************** SIGN UP **********************/
	$('#frmsign-up').submit(function(){
		var target, err = false;
		
		target = $('#name');
		if( validateText(target.val(),3) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#family');
		if( validateText(target.val(),5) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#email');
		if( validateText(target.val(),1) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#pas');
		if( validateText(target.val(),6) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#conpas');
		if( validateText(target.val(),6) && ($('pas')===target) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#city');
		if( validateText(target.val(),2) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#adrs');
		if( validateText(target.val(),10) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		/****change function validate for number *****/
		target = $('#phone');
		if( validateText(target.val(),7) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		
		target = $('#controlcode');
		if( validateText(target.val(),6) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}
		return !err;
	});
/*************************** SIGN UP *************************/
/*************************** GARANTEE FORM *************************/
	$('#formgarantee').submit(function(){
		var target, err = false;

		target = $('#name');
		if( validateText(target.val(),3) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#email');
		if( validateEmail(target.val()) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#txt');
		if( validateText(target.val(),10) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#numberfactor');
		if( validateText(target.val(),5) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#model');
		if( validateText(target.val(),3) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#numbergarantee');
		if( validateText(target.val(),5) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		target = $('#tell');
		if( validateText(target.val(),7) ){
			target.removeClass('err').addClass('ok');
		}else{
			target.removeClass('ok').addClass('err');
			err = true;
		}

		if(!err){
			$('#sendinfo').animate({
				height:'80px'
			},500);
		}

		return !err;

	});

	$('#resetgarantee').click(function(){
		$('#sendinfo').animate({
			height:'0px'
		},200);
	});
/*************************** GARANTEE FORM *************************/

});