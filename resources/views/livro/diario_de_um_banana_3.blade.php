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
						<img src="build/assets2/images/Livros/DiarioDeUmBanana3.png" alt="IMG-PRODUCT">
						<img src="build/assets2/images/Verso/DiarioDeUmBanana3Verso.png" alt="IMG-PRODUCT">
					</div>
				</div>
				<div class="product-info">
					<p class="product-name">Diário de um Banana 3: A gota d'água</p>
					
				</div>
			</div>
			<div class="product-box2">

				<p class="product-title">Características</p>
				<p class="product-name">Resumo:</p>
				<p class="product-description">Greg não toma jeito mesmo. E a cada dia se envolve em mais confusão. O difícil é fazer seu pai engolir esse talento de Greg para se meter em situações embaraçosas. Ele já está por aqui com o garoto. E para botar algum juízo na cabeça dele, Frank Heffley tenta de tudo um pouco. É claro que Greg sempre encontra uma maneira de estragar tudo. Até que seu pai faz uma grande ameaça e as coisas mudam de figura. Qual será a gota d’água que vai fazer a paciência de Frank transbordar de vez?</p>
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