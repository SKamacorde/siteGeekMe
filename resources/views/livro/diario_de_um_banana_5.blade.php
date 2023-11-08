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
						<img src="build/assets2/images/Livros/DiarioDeUmBanana5.png" alt="IMG-PRODUCT">
						<img src="build/assets2/images/Verso/DiarioDeUmBanana5Verso.png" alt="IMG-PRODUCT">
					</div>
				</div>
				<div class="product-info">
					<p class="product-name">Diário de um Banana 5 - A verdade nua e crua</p>
					
				</div>
			</div>
			<div class="product-box2">

				<p class="product-title">Características</p>
				<p class="product-name">Resumo:</p>
				<p class="product-description">Greg Heffley sem quis crescer logo. Mas será que ficar mais velho é tão legal assim? De repente, Greg começa a lidar com as pressões das festas de meninos e meninas, com o aumento de responsabilidades e também com as mudanças embaraçosas que acompanham o crescimento. Depois de uma grande briga com seu amigo, Rowley, parece que Greg vai ter de encarar sozinho a verdade nua e crua?</p>
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