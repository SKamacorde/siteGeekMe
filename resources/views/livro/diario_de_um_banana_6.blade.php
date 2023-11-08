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
						<img src="build/assets2/images/Livros/DiarioDeUmBanana6.png" alt="IMG-PRODUCT">
						<img src="build/assets2/images/Verso/DiarioDeUmBanana6Verso.png" alt="IMG-PRODUCT">
					</div>
				</div>
				<div class="product-info">
					<p class="product-name">Diário de um Banana 6 - Casa dos horrores</p>
					
				</div>
			</div>
			<div class="product-box2">

				<p class="product-title">Características</p>
				<p class="product-name">Resumo:</p>
				<p class="product-description">Em sua sexta aventura, Greg Heffley passará por grandes apuros. As coisas para ele vão de mal a pior, tanto na escola como em sua casa. Greg será suspeito de vandalismo e se tornará um suposto foragido da polícia. Além disso, uma forte tempestade de neve faz com que ele e sua família fiquem presos em casa. Em pouco tempo, o seu lar doce lar se transformará em uma verdadeira Casa dos horrores. Divirta-se com as novas confusões de Greg, ele nunca esteve tão Banana!</p>
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