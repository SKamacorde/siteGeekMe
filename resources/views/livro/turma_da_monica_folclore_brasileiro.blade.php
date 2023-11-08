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
                    <img src="build/assets2/images/Livros/TurmadaMônicaFolcloreBrasileiro.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/TurmaDaMonicaFolcloreBraisleiroVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Turma da Mônica Folclore Brasileiro</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Um dos aspectos mais ricos da cultura brasileira é o seu diversificado folclore. São cantigas de roda, parlendas, pegadinhas, trava-línguas, músicas, adivinhas, provérbios, crendices, trovas, acalantos e brincadeiras que atravessaram gerações e gerações e até hoje encantam as crianças. Neste livro, os personagens da brasileiríssima Turma da Mônica mostram o quanto o folclore está presente no nosso dia a dia e como continua atrativo, mesmo em tempos de computadores e videogames. Afinal, manter o folclore brasileiro vivo é missão de todos nós. Este livro já se tornou um clássico mais que indispensável! Vem ainda com um guia do professor ao final do livro com muitas divas de atividades para desenvolver com os pequenos e trabalhar de forma interdisciplinar. Conteúdo especialmente desenvolvido com curadoria psicopedagógica.</p>
      
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