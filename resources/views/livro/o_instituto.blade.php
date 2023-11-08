@extends('layouts.app')

@section('page')
<!DOCTYPE html> <html> <head>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="stylesheet" type="text/css" href="build/assets3/css/products.css">
</head>

<body class="background">
    <section>
        <div class="container" data-aos="fade-up">
            <!-- End Hero -->
            <div class="product-box">
                <div class="product-image">
                    <div class="slider">
                        <img src="build/assets2/images/Livros/OInstituto.png" alt="IMG-PRODUCT">
                    </div>
                </div>
                <div class="product-info">
                    <p class="product-name">O instituto</p>
                    
                </div>
            </div>
            <div class="product-box2">

                <p class="product-title">Características</p>
                <p class="product-name">Resumo:</p>
                <p class="product-description">O novo livro de Stephen King, o Mestre do Terror, traz uma história
                    inesquecível sobre um grupo de crianças com talentos especiais que precisam se unir para derrubar um
                    grande mal.</p>
                <p class="product-description">No meio da noite, em uma casa no subúrbio de Minneapolis, um grupo de
                    invasores assassina os pais de Luke e sequestra silenciosamente o menino de doze anos. A operação
                    leva menos de dois minutos.
                    Quando Luke acorda, ele está no Instituto, em um quarto que parece muito o dele, exceto pelo fato de
                    que não tem janela. E do lado de fora tem outras portas, e atrás delas, outras crianças com talentos
                    especiais, que chegaram àquele lugar do mesmo jeito que Luke. O grupo formado por ele, Kalisha,
                    Nick, George, Iris e o caçula, Avery Dixon, de apenas dez anos, está na Parte da Frente. Outros
                    jovens, Luke descobre, foram levados para a Parte de Trás e nunca mais vistos.
                    Nessa instituição sinistra, a equipe se dedica impiedosamente a extrair dessas crianças toda a força
                    de seus poderes paranormais. Não existem escrúpulos. Conforme cada nova vítima vai desaparecendo
                    para a Parte de Trás, Luke fica mais e mais desesperado para escapar e procurar ajuda. Mas até hoje
                    ninguém nunca conseguiu fugir do Instituto.
                    Tão aterrorizante quanto A incendiária e tão espetacular quando It: a Coisa, este novo livro de
                    Stephen King mostra um mundo onde o bem nem sempre vence o mal.</p>

            </div>
            <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
            <script>
                $(document).ready(function () {
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
                $(document).ready(function () {
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