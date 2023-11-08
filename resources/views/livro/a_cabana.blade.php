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
						<img src="build/assets2/images/Livros/ACabana.png" alt="IMG-PRODUCT">
						<img src="build/assets2/images/Verso/ACabanaVerso.png" alt="IMG-PRODUCT">
					</div>
				</div>
				<div class="product-info">
					<p class="product-name">A Cabana</p>
					<p class="product-description">Entre em contato para receber este livro:<br>tiagozaninete@gmail.com</p>
					
				</div>
			</div>
			<div class="product-box2">

				<p class="product-title">Características</p>
				<p class="product-name">Resumo:</p>
				<p class="product-description">Durante uma viagem de fim de semana, a filha mais nova de Mack Allen
					Phillips é raptada e evidências de que ela foi brutalmente assassinada são encontradas numa velha
					cabana.</p>
				<p class="product-description">Após quatro anos vivendo numa tristeza profunda causada pela culpa e pela
					saudade da menina, Mack recebe um estranho bilhete, aparentemente escrito por Deus, convidando-o a
					voltar à cabana onde acontecera a tragédia.</p>
				<p class="product-description">Apesar de desconfiado, ele vai ao local numa tarde de inverno e adentra
					passo a passo o cenário de seu mais terrível pesadelo. Mas o que ele encontra lá muda o seu destino
					para sempre.</p>
				<p class="product-description">Em um mundo cruel e injusto, A cabana levanta um questionamento
					atemporal: se Deus é tão poderoso, por que não faz nada para amenizar nosso sofrimento?</p>
				<p class="product-description">As respostas que Mack encontra vão surpreender você e podem transformar
					sua vida de maneira tão profunda quanto transformaram a dele. Você vai querer partilhar esse livro
					com todas as pessoas que ama.</p>

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