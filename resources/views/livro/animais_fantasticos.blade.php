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
                    <img src="build/assets2/images/Livros/AnimaisFantasticos.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/AnimaisFantasticosVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Animais Fantásticos</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Quando o magizoólogo Newt Scamander chega em Nova York, sua intenção é fazer apenas uma breve parada. No entanto, quando sua maleta mágica é trocada e parte de seus animais fantásticos escapa, isso representa um problema para todos...</p>
      <p class="product-description">Inspirado no livro didático de Hogwarts escrito por Newt Scamander, ANIMAIS FANTÁSTICOS E ONDE HABITAM: O ROTEIRO ORIGINAL marca a estreia de J.K. Rowling, autora dos queridos best-sellers internacionais HARRY POTTER, como roteirista. Uma façanha da imaginação, apresentando um elenco repleto de personagens marcantes e criaturas mágicas, essa é uma narrativa épica e repleta de ação em sua melhor forma. Para fãs ou iniciantes no mundo de Harry Potter, essa é uma adição perfeita à estante de qualquer leitor ou amante do Cinema.</p>
      <p class="product-description">O filme ANIMAIS FANTÁSTICOS E ONDE HABITAM estreou nos cinemas em novembro de 2016.</p>
      
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