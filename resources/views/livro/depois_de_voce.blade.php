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
                    <img src="build/assets2/images/Livros/DepoisDeVoce.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/DepoisDeVoceVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">Depois de você</p>
				<p class="product-description">Entre em contato para receber este livro:<br>MariaCarolina@gmail.com</p>
			</div>
		</div>
    <div class="product-box2">
	
	
      <p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Quando uma história termina, outra tem que começar.</p>

      <p class="product-description">Com mais de 5 milhões de exemplares vendidos em todo o mundo, Como eu era antes de você conta a história do relacionamento entre Will Traynor e Louisa Clark, cujo fim trágico deixou de coração apertado os milhares de fãs da autora Jojo Moyes.</p>

      <p class="product-description">Em Depois de você, Lou ainda não superou a perda de Will. Morando em um flat em Londres, ela trabalha como garçonete em um pub no aeroporto. Certo dia, após beber muito, Lou cai do terraço. O terrível acidente a obriga voltar para a casa de sua família, mas também a permite conhecer Sam Fielding, um paramédico cujo trabalho é lidar com a vida e a morte, a única pessoa que parece capaz de compreendê-la.</p>

      <p class="product-description">Ao se recuperar, Lou sabe que precisa dar uma guinada na própria história e acaba entrando para um grupo de terapia de luto. Os membros compartilham sabedoria, risadas, frustrações e biscoitos horrorosos, além de a incentivarem a investir em Sam. Tudo parece começar a se encaixar, quando alguém do passado de Will surge e atrapalha os planos de Lou, levando-a a um futuro totalmente diferente.</p>
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