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
                    <img src="build/assets2/images/Livros/ACasaAssombrada.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/ACasaAssombrada.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">A Casa Assombrada</p>
				<p class="product-description">Entre em contato para receber este livro:<br>tiagozaninete@gmail.com</p>
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Eliza Caine tem 21 anos e acaba de perder o pai. Totalmente sozinha e sem dinheiro suficiente para pagar o aluguel na cidade, ela se depara com o anúncio de um tal H. Bennet. Ele busca uma governanta para se dedicar aos cuidados e à educação das crianças de Gaudlin Hall, uma propriedade no condado de Norfolk – sem, no entanto, mencionar quantas são, quantos anos têm ou dar quaisquer outras explicações. Assim, ela larga o emprego de professora numa escola para meninas e ruma para o interior. Chegando a Gaudlin Hall, Eliza se surpreende ao encontrar apenas Isabella, uma menina que parece inteligente demais para sua idade, e Eustace, seu adorável irmão de oito anos.</p>
      <p class="product-description">Os pais das crianças não estão lá. Não se veem criados. Ela logo constata que não há nenhum outro adulto na propriedade, e a identidade de H. Bennet permanece um mistério. A governanta recém-contratada busca informações com as pessoas do vilarejo, mas todos a evitam. Nesse meio-tempo, fica intrigada com janelas que se fecham sem explicação, cortinas que se movem sozinhas e ventos desproporcionais soprando pela propriedade. E então coisas realmente assustadoras começam a acontecer… “Uma aventura que irá encantar os fãs de Dickens e intrigar qualquer um que tenha coragem de seguir os passos de Eliza.” - The Daily Express</p>
      
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