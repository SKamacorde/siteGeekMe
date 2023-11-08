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
    <p class="product-title">Motherboard</p>
	<div class="tips-box">
			<div class="product-image">
                    <img src="build/assets2/images/dicas/motherboard.jpg" alt="IMG-PRODUCT">
			</div>
			<div class="product-info">
				<p class="product-name">O que é necessario saber antes de comprar uma motherboard</p>
			</div>
		</div>
      <p class="product-title">Tipos</p>
      <p class="product-name">Motherboard ATX</p>
	  <p class="product-description">ATX é a sigla para Advanced Technology Extended. Esse é um padrão introduzido em 1995 como uma evolução do formato Baby AT, já em desuso. Via de regra, uma motherboard ATX deve ter tamanho de até 12 x 9,6 polegadas, isto é, 305 x 244 milímetros.</p>
      <p class="product-description">Além das dimensões, o padrão ATX estabelece as posições dos furos para que a motherboard seja fixada ao gabinete do computador e, sobretudo, a localização de determinados componentes.</p>
      <p class="product-description">Se colocarmos a motherboard “em pé”, notaremos, por exemplo, que os slots de expansão (frequentemente no padrão PCI Express) devem ficar posicionados na parte inferior e alinhados à esquerda. Nessa posição, uma placa de vídeo ou outro componente que for instalado ali terá os seus conectores virados para a traseira do gabinete, sem nenhum tipo de obstáculo.</p>
      <p class="product-name">Motherboard  Micro ATX (mATX)</p>
      <p class="product-description">Embora modelos ATX ainda possam ser encontrados, placas-mãe Micro ATX (ou mATX) se tornaram bastante populares no mercado. Elas foram introduzidas em 1997 e têm, como principal característica, formato de até 9,6 x 9,6 polegadas (244 x 244 milímetros).</p>
      <p class="product-description">Assim como no padrão anterior, placas Micro ATX devem seguir o mesmo posicionamento para furos de fixação e componentes. Como o nome indica, a principal diferença em relação ao padrão ATX está nas dimensões: placas-mãe Micro ATX são menores e, portanto, ideais para PCs com gabinete médio ou pequeno.</p>
      <p class="product-description">Note que o formato ATX admite outras variações, como o Extended ATX (EATX), que tem tamanho de 12 x 13 polegadas (305 x 330 milímetros), tipicamente. Porém, placas-mãe que seguem essa ou outras dimensões são menos comuns no mercado.</p>
      <p class="product-name">Motherboard Mini ITX</p>
	  <p class="product-description">Normalmente, quem precisa economizar espaço físico na mesa recorre a um notebook. Mas existe uma alternativa tão ou mais interessante: PCs compactos. Essa categoria pode atendida por gabinetes e placas-mãe no padrão Mini ITX (Information Technology Extended).</p>
	  <p class="product-description">Via de regra, placas-mãe nesse formato têm dimensões de até 6,7 x 6,7 polegadas (170 x 170 milímetros), razão pela qual podem ser instaladas em gabinetes de tamanho muito compacto.</p>
	  <p class="product-description">Na comparação com o formato Micro ATX, placas Mini ITX são aproximadamente 40% menores. Essa característica faz o dispositivo ter poucos slots de expansão. Por causa disso, alguns modelos trazem até processador embutido.</p>
      <p class="product-description">é responsável por exibir as imagens na tela do computador.</p>
      <p class="product-name">Motherboard Nano ITX</p>
	  <p class="product-description">Como o próprio nome sugere, placas-mãe do tipo Nano ITX têm dimensões ainda mais reduzidas. O tamanho máximo é de 4,7 x 4,7 polegadas (119 x 119 milímetros), detalhe que faz o nível de integração de componentes ser elevado aqui.</p>
	  <p class="product-description">Placas-mãe Nano ITX costumam ser direcionadas a aplicações focadas em baixo consumo de energia. É relativamente comum encontrar placas nesse formato empregadas em centrais de mídia e em automação industrial, por exemplo.</p>
	  <p class="product-name">Motherboard Pico ITX</p>
	  <p class="product-description">Entre todos os principais formatos de placa-mãe do mercado, o Pico ITX é o menor. Nesse padrão, as dimensões não passam de 3,9 x 2,8 polegadas (99 x 71 milímetros) — a placa é tão pequena que cabe na palma da mão. Novamente, o foco desse padrão recai sobre aplicações que demandam pouca energia.</p>
	  <p class="product-description">Por conta das dimensões diminutas, placas-mãe no formato Pico ITX são frequentemente empregadas em soluções de automação industrial, computadores veiculares, sistemas de monitoramento e assim por diante.</p>
	  <p class="product-title">Dicas antes de comprar o modelo ideal</p>
	  <p class="product-name">Escolha o fabricante do processador primeiro</p>
	  <p class="product-description">Para escolher uma placa-mãe que garanta um desempenho satisfatório ao seu computador, é preciso, antes de tudo, escolher qual o processador que você pretende utilizar. Isso é importante, pois cada placa-mãe possui compatibilidade com determinada geração de processadores, seja da Intel ou da AMD. Com essa precaução, você evita adquirir uma placa que possa não ser compatível com o processador que deseje utilizar.</p>
	  <p class="product-name">Verifique a quantidade de slots</p>
	  <p class="product-description">Verificar a quantidade de slots de memória RAM disponíveis também é muito importante na hora de escolher uma placa-mãe. Principalmente para quem busca um PC Gamer, ou para trabalhos onde se utiliza softwares mais pesados, buscar uma placa que tenha no mínimo quatro slots de RAM é essencial. Com isso, o usuário pode realizar upgrades assim que desejar e não fica limitado a uma baixa quantidade de memória.</p>
	  <p class="product-description">Além disso, verifique se o modelo é compatível com PCIe 4.0. Essa característica é importante para a instalação de placas de vídeo mais avançadas, atualizadas e das que podem surgir no futuro, aumentando o desempenho do computador. Caso você queira instalar SSDs de alto desempenho, ter um slot extra com esse tipo de barramento também é necessário.</p>
	  <p class="product-name">Não economize nas conexões</p>
	  <p class="product-description">Assim como os slots para memória RAM, procure por uma placa-mãe que tenha uma quantidade significativa de portas USB e entradas SATA. Busque por uma placa que tenha, principalmente, portas USB 3.0 ou USB-C, já que são as mais utilizadas atualmente por diferentes empresas fabricantes de periféricos e eletrônicos.</p>
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