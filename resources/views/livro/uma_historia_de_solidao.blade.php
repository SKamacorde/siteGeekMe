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
                    <img src="build/assets2/images/Livros/UmaHistoriaDeSolidao.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Uma História De Solidão</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Odran Yates era um garoto tímido nascido na Irlanda dos anos 1950. O país tinha uma longa tradição católica, e as leis da Igreja moldavam a sociedade com rigor claustrofóbico. Filho de um pai alcoólatra, que morreu com a certeza de que era um grande ator, e de uma mãe que abandonara a carreira de aeromoça para cuidar da família, Odran abraçou o caminho eclesiástico como único destino possível. Primogênito de um lar disfuncional, que se tornou sufocante após uma tragédia familiar, Odran obedece à mãe e vai estudar em um seminário, onde conhece Tom Cardle, de quem se torna amigo. Ao contrário de Odran, tímido, inocente e reservado, Tom era irritadiço e rebelde. Não fossem os maus-tratos constantes do pai, ele nunca teria nem sequer passado em frente a uma igreja. Já Odran concluiria mais tarde que o sacerdócio era realmente adequado à sua personalidade. Antes de se formar e ainda muito jovem, Odran fora designado para uma missão no Vaticano: caberia a ele servir pontualmente o café da manhã e o leite noturno do sumo pontífice - durante um ano, sete dias por semana -, incumbência que cumpriu com o rigor e o silêncio de “um fantasma”, como descreveria. Da ingenuidade dos primeiros anos de colégio à descoberta dos segredos mais bem guardados da Igreja, o padre Odran Yates descreve uma Irlanda repleta de contradições e ódio por trás de um projeto social baseado nos bons costumes. Vive a decadência de seu ofício, que, diante de tantas denúncias de abuso sexual, passa a ser visto com desconfiança. Mais do que lidar com a vida sofrida daqueles que ama e as implicações políticas de seu trabalho, o padre Yates tenta fazer um acerto de contas com a própria consciência, depois de ter sido convencido de que era inocente demais para entender o que ocorria ao seu redor.</p>
      
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