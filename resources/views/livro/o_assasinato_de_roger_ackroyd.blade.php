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
                        <img src="build/assets2/images/Livros/OAssasinatodeRogerAckroyd.png" alt="IMG-PRODUCT">
                    </div>
                </div>
                <div class="product-info">
                    <p class="product-name">O Assasinato de Roger Ackroyd</p>
                    
                </div>
            </div>
            <div class="product-box2">

                <p class="product-title">Características</p>
                <p class="product-name">Resumo:</p>
                <p class="product-description">Em uma noite de setembro, o milionário Roger Ackroyd é encontrado morto, esfaqueado com uma adaga tunisiana – objeto raro de sua coleção particular – no quarto da mansão Fernly Park na pacata vila de King’s Abbott. A morte do fidalgo industrial é a terceira de uma misteriosa sequência de crimes, iniciada com a de Ashley Ferrars, que pode ter sido causada ou por uma ingestão acidental de soníferos ou envenenamento articulado por sua esposa – esta, aliás, completa a sequência de mortes, num provável suicídio.</p>

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