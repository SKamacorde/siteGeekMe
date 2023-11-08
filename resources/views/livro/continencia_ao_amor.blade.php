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
                    <img src="build/assets2/images/Livros/ContinênciaAoAmor.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/ContinenciaAoAmorVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Continência Ao Amor</p>
				<p class="product-description">Entre em contato para receber este livro:<br>MariaCarolina@gmail.com</p>
			</div>
		</div>
    <div class="product-box2">
	
	
      <p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Livro que inspirou fenômeno global da Netflix entra em pré-venda em agosto e chega às lojas em novembro.</p>

      <p class="product-description">Quando um soldado com um passado problemático e uma cantora em dificuldades concordam em entrar em um casamento de fachada para obter benefícios militares, nenhum dos dois espera muita coisa após confirmarem os votos. Até que uma tragédia acontece, e os limites entre o que é real e o que é mentira começam a se confundir neste romance inteligente e surpreendente, perfeito para fãs de Jojo Moyes e Nicholas Sparks.</p>

      <p class="product-description">Cassie Salazar e Luke Morrow são totalmente diferentes. A perspicaz Cassie trabalha à noite em um bar em Austin, Texas, onde tenta ganhar a vida enquanto corre atrás do sonho de ser cantora e compositora. Luke é um militar prestes a ir para a guerra que identifica na disciplina implacável do Exército o conforto de que precisa. Mas um encontro fortuito com Cassie muda para sempre o curso da vida dos dois.</p>

      <p class="product-description">Cassie está sendo soterrada pelas despesas médicas após receber o diagnóstico de diabetes. Ao encontrar seu velho amigo Frankie, que se alistou ao Exército, ela propõe um acordo: ela se casaria com ele em troca de um plano de saúde melhor e os dois dividiriam o dinheiro a mais que o Exército concede por eles serem uma “família”. Quando Frankie recusa a proposta, seu atraente amigo Luke se oferece para se casar com Cassie no lugar dele. O que ela não sabe é que o jovem militar tem suas próprias razões para concordar com o matrimônio de fachada.</p>

      <p class="product-description">Nesta inesquecível história de amor, Cassie e Luke precisam deixar de lado suas profundas diferenças para que o arranjo deles pareça um casamento de verdade... a menos que, ao longo do caminho, o amor faça com que os dois não precisem mais fingir.</p>
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