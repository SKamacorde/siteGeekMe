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
                    <img src="build/assets2/images/Livros/ATravessia.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/ATravessiaVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">A Travessia</p>
				<p class="product-description">Entre em contato para receber este livro:<br>MatheusModunha@gmail.com</p>
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Um derrame cerebral deixa Anthony Spencer, um multimilionário egocêntrico, em coma. Quando "acorda", ele se vê em um mundo surreal habitado por um estranho, que descobre ser Jesus, e por uma idosa que é o Espírito Santo.</p>
      <p class="product-description">À sua frente se descortina uma paisagem que lhe revela toda a mágoa e a tristeza de sua vida terrena. Jamais poderia ter imaginado tamanho horror. Debatendo-se contra um sofrimento emocional insuportável, ele implora por uma segunda chance.</p>
      <p class="product-description">Sua prece é ouvida e ele é enviado de volta à Terra, onde viverá uma experiência de profunda comunhão com uma série de pessoas e terá a oportunidade de reexaminar a própria vida. Nessa jornada, precisará "enxergar" através dos olhos dos outros e conhecer suas visões de mundo, suas esperanças, seus medos e seus desafios.</p>
      <p class="product-description">Na busca de redenção, Tony deverá usar um poder que lhe foi concedido: o de curar uma pessoa. Será que ele terá coragem de fazer a escolha certa?</p>
      
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