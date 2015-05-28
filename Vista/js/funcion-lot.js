$(document).ready(
	function() {
		var nuevacarta;
		
		$('#img1').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img2').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img3').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img4').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img5').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img6').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img7').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img8').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");
		$('#img9').attr("src","img/"+parseInt((Math.random()*31)+1)+".jpg");

		setInterval(
			function(){
				nuevacarta='img/'+parseInt((Math.random()*31)+1)+'.jpg';
				$('#cartaMaestra').attr('src',nuevacarta);
			},1000
		);



		$('.carta').click(
			function(){
				$(this).hide();
			}
		);


	}
	);