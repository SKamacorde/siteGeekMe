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
    <p class="product-title">Processadores</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/processador.jpg" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">Saiba o que procurar em um novo processador na hora de montar o seu PC</p>
			</div>
		</div>
		<p class="product-title">O que é improtante saber na hora de comprar um processador</p>
		<p class="product-description">Escolher o processador certo para o seu computador é muito importante. Dependendo do tipo de uso desejado e do hardware disponível, comprar o chip errado pode significar pagar a mais sem necessidade ou até limitar o desempenho de uma máquina que deveria ser poderosa. Enquanto a Intel oferece diferentes modelos de Core i3, Core i5, Core i7 e Core i9, a AMD faz o mesmo com os Ryzen 3, Ryzen 5, Ryzen 7 e Ryzen 9, o que pode confundir o usuário na hora de comprar.</p>
		<p class="product-name">Saiba o tipo de uso desejado</p>
		<p class="product-description">O processador é o componente central de seu computador, e suas capacidades têm impacto direto no desempenho da máquina. Portanto, entender o tipo de uso desejado vai fazer a diferença na hora de comprar, evitando gastos excessivos ou até mesmo limitar o PC. É possível separar três grandes grupos de usuários com variados níveis de exigência: aqueles que trabalham com edição de vídeos e modelagem 3D, gamers em geral e usuários domésticos em geral.</p>
      <p class="product-description">Enquanto profissionais de design, por exemplo, precisam de um computador poderoso para lidar com as tarefas exigentes, gamers também podem aproveitar um alto desempenho, apesar de ser possível aproveitar uma máquina intermediária para jogar. Já para usar o PC no dia a dia, o foco é em agilidade para o sistema e boa fluidez para acessar a Internet, assistir a filmes e séries ou até aproveitar alguns títulos mais básicos.</p>
	  <p class="product-description">No primeiro caso, o ideal deve ser um processador com boa quantidade de núcleos – e também mais caro. Se o foco é jogar com alta qualidade, o maior investimento pode ser feito em uma boa placa de vídeo. De qualquer forma, vale procurar por uma CPU com suporte a overclock e um bom número de núcleos. Já para uso casual, um dual-core mais acessível pode ser suficiente, o que não impede a compra de um bom Core i7 mais recente, por exemplo.</p>
      <p class="product-title">Fique atento ao hardware que você tem</p>
      <p class="product-description">Caso você esteja pensando em realizar um upgrade de CPU, é importante atentar à compatibilidade do hardware. Gerações mais recentes podem não encaixar fisicamente na placa-mãe, ou até mesmo não funcionar no soquete ali disponível. Esses "encaixes" costumam ser fáceis de identificar: basta pesquisar a documentação relativa ao modelo da sua placa no site da fabricante para encontrar dados como LGA1151 ou LGA1200, usados em chips de 8ª e 10ª gerações da Intel, respectivamente</p>
	  <p class="product-description">A AMD também tem diferentes soquetes, mas, desde 2016, a marca lança todos seus processadores com o padrão AM4. A questão aqui é que processadores mais recentes, como os Ryzen 4000, podem até encaixar fisicamente na placa-mãe mais antiga, mas mesmo assim não funcionar. Dessa forma, é importante conferir se o Ryzen ou APU AMD desejado tem suporte por parte da placa.</p>
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