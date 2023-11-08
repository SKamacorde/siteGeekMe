@extends('layouts.app')

@section('page')
<!DOCTYPE html> <html> <head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css"
	href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" type="text/css" href="build/assets3/css/products.css">
</head>

<body class="background">
	<section>
		<div class="container" data-aos="fade-up">
			<!-- End Hero -->
			<div class="product-box">
				<div class="product-image">
					<div class="slider">
						<img src="build/assets2/images/Livros/DiarioDeUmBanana4.png" alt="IMG-PRODUCT">
						<img src="build/assets2/images/Verso/DiarioDeUmBanana4Verso.png" alt="IMG-PRODUCT">
					</div>
				</div>
				<div class="product-info">
					<p class="product-name">Diário de um Banana 4 - Dias de cão</p>
					
				</div>
			</div>
			<div class="product-box2">

				<p class="product-title">Características</p>
				<p class="product-name">Resumo:</p>
				<p class="product-description">Férias de verão - o tempo está lindo, e toda a garotada está se divertindo ao ar livre. Onde está Greg Heffley? Dentro da sua casa, jogando videogame com as cortinas fechadas. Greg, um "caseiro" assumido, está vivendo sua derradeira fantasia de verão: nada de responsabilidades e regras. Mas a mãe do Greg tem uma visão diferente para um verão ideal... muitas atividades fora de casa e "união da família".</p>
			</div>
			<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
			<script>
				$(document).ready(function () {
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
				$(document).ready(function () {
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