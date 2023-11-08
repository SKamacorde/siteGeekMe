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
    <div class="product-box2">
    <p class="product-title">Computador</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/partes-pc.jpg" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">Um computador é uma máquina que processa dados de entrada e produz informações úteis de saída, composto por vários componentes que trabalham juntos para realizar uma tarefa</p>
			</div>
		</div>
      <p class="product-title">Peças de um Computador</p>
      <p class="product-name">Motherboard</p>
	  <p class="product-description">é a principal placa de circuito em um computador e conecta todos os componentes.</p>
      <p class="product-name">Processador (CPU)</p>
      <p class="product-description">é o cérebro do computador, responsável por executar as instruções e tarefas..</p>
      <p class="product-name">Placa Gráfica</p>
      <p class="product-description">é responsável por exibir as imagens na tela do computador.</p>
      <p class="product-name">Memória RAM</p>
	  <p class="product-description">é a memória de acesso aleatório do computador, usada para armazenar temporariamente os dados e programas que o processador está usando no momento.</p>
	  <p class="product-name">Disco rígido (HD) ou unidade de estado sólido (SSD)</p>
	  <p class="product-description">é o dispositivo de armazenamento principal do computador, usado para armazenar permanentemente os dados e programas.;</p>
	  <p class="product-name">Fonte de alimentação</p>
      <p class="product-description">fornece energia para todos os componentes do computador.</p>
      <p class="product-name">Gabinete;</p>
      <p class="product-description">Local destinado a armazenar os componentes</p>
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