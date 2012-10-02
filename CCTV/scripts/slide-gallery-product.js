$(function(){
	
	var slide = $('div.content-slide'),
		train = $('div.slide div.train'),
		btn = $('div.gallery-thumbs ul.button li'),
		prv = $('div.gallery-nav div.prv'),
		next = $('div.gallery-nav div.next'),
		intervalAuto = false;
		current = 0;
	
	goToPic = function(n){
		if(n > btn.length-1) n=0;
		if(n < 0) n = btn.length-1;
		train.animate({
			left:(-820*n)	
		},900,'ease-in');
		btn.eq(current).removeClass('active');
		btn.eq(n).addClass('active');
		current = n;
	}
	
	btn.click(function(){
		goToPic($(this).index());	
	});
	
	prv.click(prev = function(){
		goToPic(current-1);
	});
	
	next.click(nextpic = function(){
		goToPic(current+1);
	});	
	
	(startAuto = function(){
		if(intervalAuto){
			return;
		}
		intervalAuto = setInterval(nextpic,4000);	
	})();
	
	stopAuto = function(){
		clearInterval(intervalAuto);
		intervalAuto = false;
	}
	
	slide.mouseover(stopAuto);
	slide.mouseout(startAuto);
})
