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
                    <img src="build/assets2/images/Livros/TripulacaoEsqueleto.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/TripulacaoEsqueletoVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Tripulação Esqueleto</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Em Tripulação de esqueletos, Stephen King reúne vinte e dois contos aterrorizantes ― entre eles, o clássico O nevoeiro, adaptado para cinema e televisão, e Sobrevivente, elencado pelo próprio King como uma de suas histórias favoritas. Nessa coletânea extraordinária, o mestre do terror nos mostra mais uma vez os motivos de merecer esse título.</p>
      <p class="product-description">Até onde você iria para sobreviver? A sobrevivência é um tema clássico da literatura de ficção, e foi abordado por Stephen King em algumas histórias que também se tornaram clássicas. Uma delas é O nevoeiro, em que uma misteriosa e espessa neblina se aproxima de uma cidadezinha do Maine, trazendo perigos que desafiam a razão humana. No entanto, na insana luta por permanecerem vivos, os personagens perceberão que ficar na rua em meio ao nevoeiro pode ser tão perigoso quanto ficar em um cômodo fechado com pessoas desconhecidas. Outra é Sobrevivente, uma história sobre um cirurgião que passa por um naufrágio e vai parar em uma ilha deserta, completamente isolada. Quando não há nada a recorrer exceto a si mesmo, ele tem que encontrar formas de tornar úteis os próprios conhecimentos médicos.</p>
      <p class="product-description">Na coletânea Tripulação de esqueletos, o leitor encontra essas duas histórias e também muitas outras, conhecendo personagens que tentam manter a sanidade diante de situações inimagináveis. Um contador de histórias por excelência, Stephen King revela aqui o amplo leque de suas habilidades, transitando com desenvoltura pelo pavor causado por criaturas abomináveis e por um terror psicológico de gelar o sangue. No fim, fica a reflexão: até que ponto a mente humana pode suportar o terror?</p>
      
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