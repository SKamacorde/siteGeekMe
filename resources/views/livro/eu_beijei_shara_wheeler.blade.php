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
                    <img src="build/assets2/images/Livros/EuBeijeiSharaWheeler.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Eu Beijei Shara Wheeler</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Da mesma autora de Vermelho, branco e sangue azul, uma história cheia de reviravoltas sobre o que acontece quando você se apaixona pela pessoa que menos espera.</p>
      <p class="product-description">Chloe Green está a um passo de terminar o ensino médio e deixar False Beach, a cidadezinha ultraconservadora onde vive, para trás. Mas, antes disso, ela tem um último objetivo a cumprir: ser eleita a melhor aluna do colégio e a oradora da turma. Seu único obstáculo? Shara Wheeler, a garota mais popular da cidade, que arranca suspiros por onde passa.Só que, faltando pouco mais de um mês para a formatura, Shara simplesmente desaparece. Todos são pegos de surpresa, mas Chloe tem um motivo a mais para ficar chocada: um dia antes, Shara a tinha beijado na boca sem maiores explicações.Decidida a encontrá-la para tirar a história a limpo, Chloe logo se vê em uma busca bastante inusitada: Shara espalhou vários cartões pela cidade, dando pistas sobre o seu paradeiro e revelando uma personalidade até então desconhecida ― e que pode mudar completamente os planos de Chloe.</p>
      
      
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