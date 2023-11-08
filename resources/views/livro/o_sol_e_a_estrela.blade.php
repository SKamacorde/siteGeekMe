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
                    <img src="build/assets2/images/Livros/OSoleaEstrela.png" alt="IMG-PRODUCT">
                    <img src="build/assets2/images/Verso/OSolEaEstrelaVerso.png" alt="IMG-PRODUCT">
				</div>
			</div>
			<div class="product-info">
				<p class="product-name">O Sol e a Estrela</p>
				
			</div>
		</div>
    <div class="product-box2">
	
	<p class="product-title">Características</p>
	  <p class="product-name">Resumo:</p>
      <p class="product-description">Muito aguardado pelos fãs, livro do universo de Percy Jackson traz Nico di Angelo e Will Solace em uma aventura sombria e emocionante pelo Mundo Inferior</p>
      <p class="product-description">Nico di Angelo não tem uma vida lá muito fácil. Além de ser filho de Hades, o deus mais tenebroso do Olimpo, o jovem perdeu a mãe e a irmã, passou por poucas e boas no Acampamento Meio-Sangue e teve que se despedir de um dos melhores amigos. Ainda que nem tudo sejam flores, há uma luz no fim do túnel: Will Solace, seu namorado e filho de Apolo. Juntos, os dois semideuses conseguem enfrentar tudo e todos. Pelo menos até agora… Das profundezas do Tártaro, o nível mais macabro do Mundo Inferior, uma voz solitária e atormentada implora pela ajuda de Nico, e o jovem tem uma suspeita de quem seja: um ex-titã chamado Bob que Percy e Annabeth tiveram que abandonar ao escaparem do lugar. Os sonhos cada vez mais frequentes de Nico e uma profecia macabra confirmam que Bob ainda vai ser fonte de muitos problemas, e logo o semideus se lança em uma missão arriscada e assustadora.</p>
      <p class="product-description">É claro que, sendo um ótimo namorado, Will decide acompanhar o amado. Mas como um ser feito literalmente de luz vai sobreviver em meio às trevas do Tártaro? E ao que a profecia se referia quando disse que Nico terá que deixar para trás “algo de igual valor”? Agora, o filho de Hades precisará confrontar verdades difíceis em seu relacionamento com Will enquanto luta contra demônios poderosos. Inclusive os que vivem dentro dele. Nessa nova aventura do universo de Percy Jackson, o autor best-seller Rick Riordan se une a Mark Oshiro em uma história inesquecível e emocionante, um lembrete de que o amor é o verdadeiro triunfo da vida.</p>
      
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