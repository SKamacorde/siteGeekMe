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
                    <img src="build/assets2/images/Livros/AEsperaDeUmMilagre.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/AEsperaDeUmMilagreVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">A Espera de um Milagre</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Bem-vindos à Penitenciária Cold Mountain, lar de um grupo de assassinos que esperam sua vez de andar pelo corredor da morte rumo à cadeira elétrica. Ambientado nos anos 1930, durante a Depressão da economia americana, em um cenário de desespero, À espera de um milagre traz a história do condenado John Coffrey e sua relação com o guarda penitenciário Paul Edgecombe. Edgecombe já viu muitas coisas bizarras durante a carreira, mas John Coffrey – um gigante com mente de criança – é uma das figuras mais estranhas que já conheceu. Acusado de estuprar e matar brutalmente duas garotas, seria o homem a encarnação do mal? Ou algo completamente diferente? O guarda está prestes a descobrir verdades terríveis e assombrosas que desafiarão todas as suas crenças. Originalmente publicado em seis partes, com o título de O corredor da morte, o romance é agora lançado em volume único À espera de um milagre. Nas telas, o diretor Frank Darabont recriou a história magistral de King, com Tom Hanks interpretando o guarda Edgecombe.</p>
      
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