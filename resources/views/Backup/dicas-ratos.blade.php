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
    <p class="product-title">Ratos</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/mouse.png" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">Principais características de um rato</p>
			</div>
		</div>
		<p class="product-title">O que é improtante saber na hora de comprar um rato</p>
		<p class="product-description">Os ratos têm evoluído cada vez mais em tecnologias de movimentação, leitura e ergonomia. Por mais que modelos modernos sejam caros, é possível encontrar algum que te agrade com um preço bastante amigável!</p>
		<p class="product-name">O mais importante</p>
		<p class="product-description">Existe uma grande quantidade de bons ratos no mercado e, antes de escolher um, pense em que tipo de uso você fará do periférico e com que frequência.
Ratos sem fio e mouses com fio têm características distintas e são ideais para grupos de pessoas com padrões de uso diferentes, assim como ratos ópticos e ratos a laser.
Já é possível encontrar ratos ergonômicos, que se adaptam bem às suas mãos, com ótimos preços.</p>
<p class="product-title">O que um bom rato precisa ter?</p>
      <p class="product-name">Precisão</p>
      <p class="product-description">Medida em DPI, indica o quanto um mouse é preciso na localização dos seus cliques. Quem usa o periférico para jogar ou trabalhar com design, edição de imagens e vídeos ou outras áreas visuais precisa de um modelo com um alto número na categoria.</p>
      <p class="product-name">Durabilidade</p>
	  <p class="product-description">Ratos sem fio costumam ter maior durabilidade do que os com fio, mas é importante optar por uma marca de confiança e um modelo bem avaliado.</p>
      <p class="product-name">Alcance</p>
      <p class="product-description">Independente da sua preferência por um rato com fio ou sem fio, é bom que o alcance do bluetooth ou o tamanho do cabo seja bom o bastante para que você tenha liberdade de movimentação e conforto no uso do periférico.</p>
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