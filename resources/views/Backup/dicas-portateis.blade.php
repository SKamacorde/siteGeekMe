@extends('layouts.app')

@section('page')
<!DOCTYPE html>
	<html>
	<head>
    <meta http-equiv="cache-control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="pragma" content="no-cache">
<meta http-equiv="expires" content="0">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
		<link rel="stylesheet" type="text/css" href="build/assets3/css/products.css">
	</head>
	<body class="background">
    <section>
    <div class="container" data-aos="fade-up">
  <!-- End Hero -->
    <div class="product-box2">
    <p class="product-title">Portáteis</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/PCvsNot.png" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">Principais diferenças de um computador para um portátil</p>
			</div>
		</div>
		<p class="product-title">Computador VS Portátil</p>
		<p class="product-description">Os computadores portáteis estão a ganhar terreno na esfera pessoal, mas os computadores de secretária são inigualáveis quando se trata de trabalho e a maioria dos videojogos. Descobre as diferenças entre cada um deles!</p>
		<p class="product-name">Portabilidade</p>
		<p class="product-description">A principal função de um portátil é poder levá-lo connosco para onde quisermos. A maioria dos modelos faz isto na perfeição.

Não só são mais práticos para os transportar para qualquer lugar, mas também com a sua própria autonomia podemos aproveitá-los sem necessidade de cabos durante mais horas.</p>
      <p class="product-name">Portabilidade</p>
      <p class="product-name">Preços</p>
	  <p class="product-description">Um computador portátil é mais barato do que um computador de secretária equivalente, até porque lhe faltam periféricos tais como um monitor, teclado ou mesmo um rato, uma vez que tudo está integrado.</p>
      <p class="product-name">PLeve e compacto</p>
      <p class="product-description">Mover um computador de secretária de um lugar para o outro não é uma experiência recomendada. Destinam-se a ser instalados no mesmo local fixo e a mudança tanto da torre como dos seus periféricos é uma tarefa complicada.

Um portátil, por outro lado, é leve, prático e pode ser levado para qualquer lugar. Mas o melhor é que é compacto e não ocupa um espaço excessivo quando está a ser utilizado, mas pelo contrário, ocupa o mínimo espaço possível. Ideal para um pequeno escritório em casa ou para utilização numa pequena secretária de escritório.</p>
      <p class="product-name">Potência </p>
	  <p class="product-description">Um computador portátil não atinge atualmente os limites de potência e desempenho que o melhor computador de secretária pode oferecer.

Tal como a maioria das suas vantagens, isto deve-se ao facto de um computador de secretária ocupar mais espaço. Isto significa, por exemplo, poder ter um CPU de maior desempenho, mais armazenamento em disco rígido ou mais RAM.</p>
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
	<script src="build/assets2/vendor/sweetalert/sweetalert.min.js"></script>
	<script>
		$('.js-addwish-b2').on('click', function(e){
			e.preventDefault();
		});

		$('.js-addwish-b2').each(function(){
			var nameProduct = $(this).parent().parent().find('.js-name-b2').html();
			$(this).on('click', function(){
				swal(nameProduct, "Adicionado aos favoritos!", "success");

				$(this).addClass('js-addedwish-b2');
				$(this).off('click');
			});
		});

		$('.js-addwish-detail').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.js-name-detail').html();

			$(this).on('click', function(){
				swal(nameProduct, "Adicionado aos favoritos!", "success");

				$(this).addClass('js-addedwish-detail');
				$(this).off('click');
			});
		});
	</script>
</section>
</body>
</html>
@endsection