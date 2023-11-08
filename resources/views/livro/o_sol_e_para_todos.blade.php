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
                    <img src="build/assets2/images/Livros/OSoleParaTodos.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/OSoleParaTodos(Verso).png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">O Sol é para todos</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Nesta emocionante história ambientada no Sul dos Estados Unidos da década de 1930, região envenenada pela violência do preconceito racial, vemos um mundo de grande beleza e ferozes desigualdades através dos olhos de uma menina de inteligência viva e questionadora, enquanto seu pai, um advogado local, arrisca tudo para defender um homem negro injustamente acusado de cometer um terrível crime.</p>
      <p class="product-description">Uma história sobre raça e classe, inocência e justiça, hipocrisia e heroísmo, tradição e transformação, O sol é para todos permanece tão importante hoje quanto foi em sua primeira edição, em 1960, durante os anos turbulentos da luta pelos direitos civis dos negros nos Estados Unidos.</p>
      <p class="product-description">Considerado um dos romances norte-americanos mais importantes do século XX, O sol é para todos surpreende pela atualidade de seu enredo e estilo. A lamentável permanência do tema, o racismo, percorre a narrativa de Scout, criança sensível, filha do advogado Atticus Finch, responsável pela defesa de um homem negro acusado de estuprar uma mulher branca em Maycomb, pequeno município de Alabama, no sul dos Estados Unidos, no início dos anos 1930.Os sentimentos que cercam a família e a cidade de Scout - desde que Atticus se dispôs a cuidar do famigerado caso - são nossos velhos conhecidos: preconceito racial e social, conformismo diante das injustiças e a mais pura malícia destilada em relações banais e familiares. Apesar da crua humanidade desses personagens, Scout enxerga a realidade com o frescor dos olhos infantis, e conta sua história, deixando um improvável rastro de esperança.</p>
      <p class="product-description">Scout narra a rotina de um ambiente rural e pacato, as férias de verão com o irmão, Jem, e o melhor amigo deles, Dill, a curiosidade com os vizinhos, as travessuras inventadas, as aventuras na escola e a vida em família.O conjunto de pequenos casos nos transporta a um lugar de aparente quietude. No entanto, esse suposto relaxamento se transforma e desespero quando vemos a reação da população de Maycomb diante de denúncia contra Tom Robinson.</p>
      <p class="product-description">O impacto da publicação e da contínua exposição de O sol é para todos o fez figurar em dezenas de listas e pesquisas, tendo sido escolhido pelo Library Journal como o melhor romance do século XX e eleito pelos leitores da Modern Library um dos 100 melhores romances em língua inglesa desde 1900. O livro apareceu pela primeira vez em uma lista feita por bibliotecários em 2006 como o livro que todos deveriam ler antes de morrer, seguido da Bíblia. Um clássico moderno que continua a emocionar jovens e adultos.</p>
      
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