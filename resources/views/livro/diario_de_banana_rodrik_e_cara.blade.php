@extends('layouts.app')

@section('page')
<!DOCTYPE html>
	<html>
	<head>
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
		<link rel="stylesheet" type="text/css" href="build/assets3/css/products.css">
	</head>
	<body class="background">
    <section>
    <div class="container" data-aos="fade-up">
  <!-- End Hero -->
		<div class="product-box">
			<div class="product-image">
				<div class="slider">
                    <img src="build/assets2/images/Livros/DiarioDeUmBanana2.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/DiarioDeUmBanana2Verso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Diário de um Banana 2 - Rodrick é o cara</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Faça o que quiser, só não pergunte a Greg Heffley como foram suas férias de verão, porque ele realmente não quer falar sobre isso. De volta às aulas, Greg está ansioso para enterrar de vez os últimos três meses... e um acontecimento em particular. Mas seu irmão mais velho, Rodrick, não vai deixar que as coisas caiam no esquecimento assim tão fácil. Ele é testemunha de um 'pequeno' incidente que Greg quer manter em sigilo. Mas sabe como são os segredos, não é? Logo, logo estão na boca do povo, especialmente quando há um diário envolvido na confusão.</p>
      
</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
		<script>
			$(document).ready(function(){
				$('.slider').slick({
					dots: true,
					infinite: true,
					speed: 500,
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000
				});
			});
			$(document).ready(function(){
            $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            pauseOnHover: true, 
            pauseOnFocus: true
		});
	});
	</script>
</section>
</body>
</html>
@endsection