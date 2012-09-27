$(function(){

	var list = $('div.main nav ul li li');
		li = $('div.main nav ul li a');
		list = $('div.main nav ul li li');
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

	$('div.product div.list-product ul li a').mouseout(function(){
		action( $(this).index() );
	});


});




function preview()
{
	document.getElementById('img1').style.opacity='1';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview1()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='1'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview2()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='1'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview3()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='1';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview4()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='1';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview5()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='6'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview5()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='1'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview6()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='1'; 
	document.getElementById('img8').style.opacity='0'; 
}

function preview7()
{
	document.getElementById('img1').style.opacity='0';
	document.getElementById('img2').style.opacity='0'; 
	document.getElementById('img3').style.opacity='0'; 
	document.getElementById('img4').style.opacity='0';
	document.getElementById('img5').style.opacity='0';
	document.getElementById('img6').style.opacity='0'; 
	document.getElementById('img7').style.opacity='0'; 
	document.getElementById('img8').style.opacity='1'; 
}
