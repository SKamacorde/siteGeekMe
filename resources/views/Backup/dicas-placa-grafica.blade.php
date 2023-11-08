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
    <p class="product-title">Placa Gráfica</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/placa.png" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">Como escolher uma placa de gráfica</p>
			</div>
		</div>
		<p class="product-title">Qual placa-grafica escolher?</p>
		<p class="product-description">Você decide comprar uma placa de gráfica para o seu computador, mas se depara com várias opções no mercado. Qual escolher? A mais barata? Bom, considerar apenas o preço pode te levar a uma compra ruim. Mas não se preocupe: o Tecnoblog preparou algumas dicas sobre como escolher uma placa de gráfica adequada às suas necessidades.</p>
		<p class="product-name">Verifique os conectores da placa de gráfica</p>
		<p class="product-description">Esse é um detalhe fácil de ser checado. A maioria dos monitores de vídeo modernos tem pelo menos uma das seguintes conexões: HDMI (o padrão mais comum), DisplayPort ou DVI. Basta então checar se a placa de gráfica é compatível com o padrão disponível no seu monitor.</p>
      <p class="product-description">A maioria dos monitores modernos, se não todos, é baseada em HDMI. Modelos mais sofisticados costumam trazer conexão DisplayPort de modo complementar. Por essa razão, é fácil encontrar placas de vídeo que suportam esses padrões.</p>
	  <p class="product-description">Agora, se você tem um monitor relativamente antigo ou com especificações simples, é provável que encontre uma conexão DVI ali, um padrão que tende a cair em desuso. Felizmente, não é difícil achar placas compatíveis com esse tipo de conexão.</p>
      <p class="product-title">Modelos Nvidia</p>
			<div class="product-image2">
                    <img src="build/assets2/images/dicas/nvidia.png" alt="IMG-PRODUCT">
			</div>
            <p class="product-title"></p>
            <p class="product-title">Modelos AMD</p>
			<div class="product-image2">
                    <img src="build/assets2/images/dicas/amd.png" alt="IMG-PRODUCT">
			</div>
        <div class="tips-box">

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