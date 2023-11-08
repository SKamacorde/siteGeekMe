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
                    <img src="build/assets2/images/Livros/CidadesDePapel.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/CidadesDePapelVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Cidades de papel</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Quentin Jacobsen tem uma paixão platônica pela magnífica vizinha e colega de escola Margo Roth Spiegelman. Até que em um cinco de maio que poderia ter sido outro dia qualquer, ela invade sua vida pela janela de seu quarto, com a cara pintada e vestida de ninja, convocando-o a fazer parte de um engenhoso plano de vingança. E ele, é claro, aceita.</p>
      <p class="product-description">Assim que a noite de aventuras acaba e um novo dia se inicia, Q vai para a escola e então descobre que o paradeiro da sempre enigmática Margo é agora um mistério. No entanto, ele logo encontra pistas e começa a segui-las. Impelido em direção a um caminho tortuoso, quanto mais Q se aproxima de Margo, mais se distancia da imagem da garota que ele achava que conhecia.</p>
      <p class="product-description">“A prosa de Green é impressionante ― de gírias e palavrões hilários e intelectuais a filosofias complexas e observações verdadeiras e devastadoras.” School Library Journal</p>
      <p class="product-description">“Green, numa abordagem adorável, apresenta um menino inteligente e sua maneira de amar. Cidades de papel tem diálogos reais ― e muito engraçados ―; um mistério intricado, porém crível, e personagens secundários encantadores.” Kirkus Reviews</p>
      
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